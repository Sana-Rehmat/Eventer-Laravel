<?php
namespace App\Http\Controllers\user;

use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Serviceimage;
use Illuminate\Http\Request;
use App\Models\Category_service;
use App\Models\Event as MainTable;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventControlelr extends Controller
{
    public $table = "user.event";
    public $redirect = "event";

// index page view
    public function index()
    {
        $services = MainTable::where('user_id', Auth::user()->id)->get();
        $images = Serviceimage::all();
        $users = User::all();
        return View($this->table . ".index", compact('services', 'images', 'users'))->with([$this->redirect . 's' => $services]);
    }
// MAin website service  page view
    public function service(Request $req)
    {
        $services = MainTable::where('status', 1)->get();
        $images = Serviceimage::all();
        $users = User::all();
        $service_categories = Category_Service::where('category_id', $req->id)->get();
        return View("service", compact('services', 'images', 'users', 'service_categories'))->with([$this->redirect . 's' => $services]);
    }

    // create view
    public function create()
    {
        $categories = Category::all();
        return View($this->table . ".create", compact('categories'))->with([$this->redirect => $categories]);

    }

// create db
    public function store(Request $req)
    {
        $req->validate([
            'short_description' => ['required', 'string', 'max:30'],
            'Descripition' => ['required'],
            'charges' => ['required'],
            'tags' => ['required'],
            // 'category_id' => ['required'],
            'serviceimages' => ['required'],
            'serviceimages.*' => ['mimes:jpeg,jpg,png,gif,jfif']]);

        $tags = explode(",", $req->tags);
        $service = new MainTable;
        $service->short_description = $req->short_description;
        $service->Descripition = $req->Descripition;
        $service->charges = $req->charges;
        $service->user_id = Auth::user()->id;
        $service->status = 1;
        $service->save();
        $service->tag($tags);
        $service->save();

        $category_id = $req->input('categories_id');
        $idService = $service->id;
        foreach ($category_id as $key => $value) {
            $service_category = new Category_service;
            $service_category->service_id = $idService;
            $service_category->category_id = $value;
            $service_category->save();
        }

        if ($req->hasfile('serviceimages')) {
            $images = $req->file('serviceimages');
            foreach ($images as $image) {
                $extenstion = $image->getClientOriginalName();
                $filename = 'Service_Image' . rand(1, 9999999999) . $req->id . time() . '.' . $extenstion;
                $image->move('images/services', $filename);
                $service_images = new Serviceimage();
                $service_images->serviceimages = $filename;
                $service_images->service_id = $service->id;
                $service_images->save();
            }
        }

        return redirect()->route($this->redirect . ".index");
    }

// delete Data
    public function delete(Request $req)
    {
        $images = Serviceimage::select('serviceimages')->where('service_id', $req->id)->get();
        foreach ($images as $img) {
            $filePathName = 'images/services/' . $img->serviceimages;
            if (file_exists($filePathName)) {
            }
            unlink($filePathName);
        }
        Serviceimage::where('service_id', $req->id)->delete();
        MainTable::destroy($req->id);
        return redirect()->route($this->redirect . ".index");
    }

// Delete Image
    public function deleteImage(Request $req)
    {
        $image = Serviceimage::find($req->id);
        $filePathName = 'images/services/' . $image->serviceimages;
        if (file_exists($filePathName)) {
        }
        unlink($filePathName);

        Serviceimage::destroy($req->id);
        return redirect()->back();
    }
//  Delete Tag
    public function deleteTag($id, $name)
    {
        DB::table('tagging_tagged')
            ->where('taggable_id', $id)->where('tag_name', $name)
            ->delete();

        return redirect()->back();
    }
// Update View
    public function update(Request $req)
    {
        $service = MainTable::find($req->id);
        $images = Serviceimage::where('service_id', $req->id)->get();
        $categories = Category::all();
        $user_category = Category_service::all();
        return View($this->table . ".update", compact('service', 'images', 'categories', 'user_category'))->with([$this->redirect => $service]);
    }

// Update Data
    public function updatedb(Request $req)
    {
        $req->validate([
            'short_description' => ['required', 'string', 'max:30'],
            'Descripition' => ['required'],
            'charges' => ['required'],
            // 'category_id' => ['required'],
            'serviceimages.*' => 'mimes:jpeg,jpg,png,gif,jfif']);

        $tags = explode(",", $req->tags);
        $service = MainTable::findOrFail($req->id);
        $service->short_description = $req->short_description;
        $service->Descripition = $req->Descripition;
        $service->charges = $req->charges;
        $service->user_id = Auth::user()->id;
        $service->status = 1;
        $service->save();

        $service->tag($tags);
        $service->save();

        // $input = $req->all();

        if ($req->serviceimages) {
            foreach ($req->serviceimages as $image) {

                $extenstion = $image->getClientOriginalName();
                $filename = 'Service_Image' . rand(1, 9999999999) . $req->id . time() . '.' . $extenstion;
                $image->move('images/services', $filename);
                $service_images = new Serviceimage;
                $service_images->service_id = $service->id;
                $service_images->serviceimages = $filename;
                $service_images->save();

            }

        }
        // $service->update($input);

        // sync updated tags
        $data = [];
        $data['category_id'] = $req->input('categories_id');
        MainTable::find($req->id)->categories()->sync($data['category_id']);

        return redirect()->route($this->redirect . ".index");
    }

// Event Status
    public function status(Request $req)
    {
        $service = MainTable::find($req->id);
        if ($service->status == 1) {
            $service->status = 0;
            $service->save();
        } else if ($service->status == 0) {
            $service->status = 1;
            $service->save();
        }

        $services = MainTable::where('user_id', Auth::user()->id)->get();
        $images = Serviceimage::all();
        $users = User::all();
        return redirect()->route($this->redirect . ".index", compact('services', 'images', 'users'))->with([$this->redirect . 's' => $services]);
    }

    public function service_detail($service_id,$user_id)
    {
        $service = MainTable::find($service_id);
        // dd($service);
        // exist();
        $images = Serviceimage::where('service_id',$service_id)->get();
        $seller = User::find($user_id);
        $reviews = Review::where('service_provider_id',$service_id)->get();
        $tags = DB::table('tagging_tagged')->where('taggable_id',$service_id)->get();
        $service_category = Category_service::join('categories', 'categories.id', 'category_service.category_id')
            ->select(
                'categories.name as category_name',
                'categories.id as category_id',

            )->where('service_id', $service_id)
            ->get();
            $users = User::with(['reviews' => function($query) use ($user_id) { 
           // $query->sum('quantity');
           $query->where('service_provider_id',$user_id)
           ->orderBy('created_at','DESC'); // without `order_id`
        }
        ])->get();

        return View("service_detail", compact('service', 'images', 'seller', 'users','reviews', 'tags', 'service_category'))->with([$this->redirect . 's' => $service]);
    }
}