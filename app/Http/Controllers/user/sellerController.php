<?php

namespace App\Http\Controllers\user;

use App\Models\Award;
use App\Models\Event;
use App\Models\Orders;
use App\Models\Review;
use App\Models\Social;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Serviceimage;
use Illuminate\Http\Request;
use App\Models\User as MainTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class sellerController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function profile()
    {
        $social = Social::where('user_id', Auth::user()->id)->first();
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('user.profile.index', compact('social', 'profile'));}

    public function seller_detail(Request $req)
    {
        $social = Social::where('user_id', $req->id)->first();
        $profile = Profile::where('user_id', $req->id)->first();
        $user = MainTable::find($req->id);
        $education = Education::where('user_id', $req->id)->get();
        $experiences = Experience::where('user_id', $req->id)->get();
        $awards = Award::where('user_id', $req->id)->get();
        $services = Event::where('user_id', $req->id)->get();
        $images = Serviceimage::all();
        $count =Review::where('service_provider_id',$req->id)->count();
       $avg =Review::where('service_provider_id',$req->id)->avg('ratings');
        $users = MainTable::with(['reviews' => function($query) use ($req) { 
           // $query->sum('quantity');
           $query->where('service_provider_id',$req->id)
           ->orderBy('created_at','DESC'); // without `order_id`
        }
        ])->get();
        // $users = MainTable::all();
        $reviews = Review::where('user_id', $req->id)->get();
        

        return View("seller_detail", compact('count','avg','reviews', 'users', 'social', 'profile', 'user', 'education', 'experiences', 'awards', 'services', 'images'))->with([$education]);
    }

    public function updateImage(Request $req)
    {
        $data = MainTable::find(Auth::user()->id);
        return View($this->table . ".update")->with([$this->redirect => $data]);

    }

    public function updatedbImage(Request $req)
    {
        $user = MainTable::find(Auth::user()->id);

        if ($req->file('userimage') != null) {
            $file = $req->file('userimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'User' . rand(1, 9999999999) . $req->id . time() . '.' . $extenstion;
            $file->move('frontend/images/users', $filename);
            $user->userimage = $filename;
        }
        $user->name = $req->name;
        $user->gender = $req->gender;
        $user->type = $req->type;
        $user->email = $req->email;
        $user->save();
        return redirect()->route($this->redirect . ".index");
    }
    public function invoice_list()
    {
        $invoices = Orders::all();
        $users = MainTable::all();
        $services = Event::where('user_id', Auth::user()->id)->get();
        return view('user.invoice.index', compact('invoices', 'services', 'users'));

    }
    public function invoice_cancel_list()
    {
        $invoices = Orders::where('status',1)->get();
        $users = MainTable::all();
        $services = Event::where('user_id', Auth::user()->id)->get();
        return view('user.invoice.cancel', compact('invoices', 'services', 'users'));

    }
    public function invoice_complete_list()
    {
        $invoices = Orders::where('status',2)->get();
        $users = MainTable::all();
        $services = Event::where('user_id', Auth::user()->id)->get();
        return view('user.invoice.complete', compact('invoices', 'services', 'users'));

    }
    public function inv_cancel(Request $req)
    {
        $invoice = Orders::find($req->id);
        $invoice->status = 1;
        $invoice->save();
return redirect()->route('home');
        // return redirect route('home');
        // 

    }
    public function inv_complete(Request $req)
    {
        $invoice = Orders::find($req->id);
        $invoice->status = 2;
        $invoice->save();

        return redirect()->route('seller.invoice');

    }
    public function review(){
       $count =Review::where('service_provider_id',Auth::user()->id)->count();
       $avg =Review::where('service_provider_id',Auth::user()->id)->avg('ratings');
        $users = MainTable::with(['reviews' => function($query) { 
           // $query->sum('quantity');
           $query->where('service_provider_id',Auth::user()->id)
           ->orderBy('created_at','DESC'); // without `order_id`
        }
        ])->get();

        return view('user.review.index',compact('users','avg','count'));
    }


// Update Data
    public function review_updatedb(Request $req)
    {

$ldate = date('Y-m-d H:i:s');

        //  $req->validate([
        //     'fb' => 'nullable|max:255',
        //     'insta' => 'nullable|max:255',
        //     'linkidin' => 'nullable|max:255',
        //     'twitter' => 'nullable|max:255',
        //     'printrest' => 'nullable|max:255',
        //     'youtube' => 'nullable|max:255',
        // ]);
        $review = Review::find($req->id);
        $review->reply = $req->reply;
        $review->reply_on = $ldate;
        $review->update();
        return route('profile.index');
    }


}