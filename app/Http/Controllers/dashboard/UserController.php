<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Models\User as MainTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $table = "dashboard.users";
    public $redirect = "user";
    public function index(Request $req)
    {

        
        $data = MainTable::orderBy('created_at', 'desc')->get();

        return View($this->table . ".user", compact('data'))->with([$this->redirect . 's' => $data]);

    }

    public function create()
    {
        return view('auth.register');
    }
    public function delete(Request $req)
    {
        MainTable::destroy($req->id);
        $image = MainTable::select('userimage')->where('id', $req->id)->get();
        $filePathName = 'images/users/' . $image->userimmage;
        if (file_exists($filePathName)) {
        }
        unlink($filePathName);
        return redirect()->route($this->redirect . ".index");
    }
    public function store(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => 'required|in:male,female',
            'userimage' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $user = new MainTable;
        if ($req->file('userimage') != null) {
            $file = $req->file('userimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . 'ProfileImage' . rand(1, 999999999999999) . $extenstion;
            $file->move('images/users', $filename);
            $user->userimage = $filename;
        }
        $user->name = $req->name;
        $user->gender = $req->gender;
        $user->type = $req->type;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route($this->redirect . ".index");

    }
    public function update(Request $req)
    {
        $data = MainTable::find($req->id);
        return View($this->table . ".update")->with([$this->redirect => $data]);

    }

    public function updatedb(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => 'required|in:male,female',
            'userimage' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        $user = MainTable::find($req->id);

        if ($req->file('userimage') != null) {
            $file = $req->file('userimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . 'ProfileImage' . rand(1, 999999999999999) . $extenstion;
            $file->move('images/users', $filename);
            $user->userimage = $filename;
        }
        $user->name = $req->name;
        $user->gender = $req->gender;
        $user->type = $req->type;
        $user->email = $req->email;
        $user->save();
        return redirect()->route($this->redirect . ".index");
    }
// public function user(Request $req )
// {
//   $data=MainTable::where('users.id',$req->id)
//     ->join('countries','countries.id','users.country_id')
//     ->select('users.*','countries.name as countriesname')
//     ->get();

//     return View($this->table.".userprofile",compact('data'))->with([$this->redirect.'s'=>$data]);
// }

}