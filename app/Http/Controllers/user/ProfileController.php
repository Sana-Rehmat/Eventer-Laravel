<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Education;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Profile as MainTable;
use App\Models\Review;
use App\Models\Serviceimage;
use App\Models\Social;
use App\Models\User;use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public $table = "user.profile";
    public $redirect = "profile";
    public function index()
    {
        $social = Social::where('user_id', Auth::user()->id)->first();
        $profile = MainTable::where('user_id', Auth::user()->id)->first();
        $education = Education::where('user_id', Auth::user()->id)->get();
        $experiences = Experience::where('user_id', Auth::user()->id)->get();
        $awards = Award::where('user_id', Auth::user()->id)->get();
        $services = Event::where('user_id', Auth::user()->id)->get();
        $users = User::all();
        $reviews = Review::all();

        $images = Serviceimage::all();
        return View($this->table . ".index", compact('reviews', 'users', 'images', 'social', 'profile', 'education', 'experiences', 'awards', 'services'));
    }
    // public function index()
    // {
    //     $data=MainTable::join('countries','countries.id','users.country_id')
    //     ->select('users.*','countries.name as countriesname')
    //     ->orderBy('created_at','desc')->paginate(5);;
    //     $count=1;
    //      return View($this->table.".user",compact('data','count'))->with([$this->redirect.'s'=>$data]);
    // }
    public function create()
    {
        $profile = MainTable::where('user_id', Auth::user()->id)->first();

        return view($this->table . ".create", compact('profile'));
    }
    public function store(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'DOB' => ['required', 'string'],
            'Phone_no' => ['required', 'string', 'min:11'],
            'bio' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
            'city' => ['required', 'string'],
            'userimage' => ['mimes:jpeg,png,jpg,gif,svg,jfif'],
        ]);
        $profile = new MainTable;
        $profile->DOB = $req->DOB;
        $profile->Phone_no = $req->Phone_no;
        $profile->city = $req->city;
        $profile->bio = $req->bio;
        $profile->address = $req->address;
        $profile->postal_code = $req->postal_code;
        $profile->state = $req->state;
        $profile->country = $req->country;
        $profile->user_id = Auth::user()->id;
        $profile->save();

        $user = User::find(Auth::user()->id);
        if ($req->file('userimage') != null) {
            $file = $req->file('userimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'User' . rand(1, 9999999999) . $req->id . time() . '.' . $extenstion;
            $file->move('images/users', $filename);
            $user->userimage = $filename;
        }
        $user->name = $req->name;
        $user->save();
        return redirect()->route($this->redirect . ".index");
    }
    public function delete(Request $req)
    {
        MainTable::destroy($req->id);
        return redirect()->route($this->redirect . ".index");
    }
    public function update(Request $req)
    {
        $profile = MainTable::find($req->id);
        return View($this->table . ".update")->with([$this->redirect => $profile]);
    }
    public function updatedb(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'DOB' => ['required', 'string'],
            'Phone_no' => ['required', 'string', 'min:11'],
            'bio' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
            'city' => ['required', 'string'],
            'userimage' => ['mimes:jpeg,png,jpg,gif,svg,jfif'],
        ]);

        $profile = MainTable::find($req->id);
        $profile->DOB = $req->DOB;
        $profile->Phone_no = $req->Phone_no;
        $profile->city = $req->city;
        $profile->bio = $req->bio;
        $profile->address = $req->address;
        $profile->postal_code = $req->postal_code;
        $profile->state = $req->state;
        $profile->country = $req->country;
        $profile->user_id = Auth::user()->id;
        $profile->update();
        $user = User::find(Auth::user()->id);
        if ($req->file('userimage') != null) {
            $file = $req->file('userimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'User' . rand(1, 9999999999) . $req->id . time() . '.' . $extenstion;
            $file->move('images/users', $filename);
            $user->userimage = $filename;
        }
        $user->name = $req->name;
        $user->update();

        return redirect()->route($this->redirect . ".index");
    }
}