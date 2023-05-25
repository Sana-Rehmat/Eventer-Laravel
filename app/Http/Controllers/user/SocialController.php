<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Social as MainTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public $table = "user.social";
    public $redirect = "social";
    public function index()
    {$social = MainTable::where('user_id', Auth::user()->id)->first();

        $data = MainTable::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        return View($this->table . ".index", compact('data', 'social'))->with([$this->redirect . 's' => $data]);

    }
    public function store(Request $req)
    {
        $req->validate([
            'fb' => 'nullable|max:255',
            'insta' => 'nullable|max:255',
            'linkidin' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'printrest' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
        ]);
        $social = new MainTable();
        $social->fb = $req->fb;
        $social->insta = $req->insta;
        $social->linkidin = $req->linkidin;
        $social->twitter = $req->twitter;
        $social->printrest = $req->printrest;
        $social->youtube = $req->youtube;
        $social->user_id = Auth::user()->id;
        $social->save();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }
    public function delete(Request $req)
    {
        MainTable::destroy($req->id);
        return redirect()->route($this->redirect . ".index");
    }
    public function update(Request $req)
    {
        $data = MainTable::find($req->id);
        return response()->json([
            'status' => 200,
            'social' => $data,

        ]);
    }
    public function updatedb(Request $req)
    {
        $req->validate([
            'fb' => 'nullable|max:255',
            'insta' => 'nullable|max:255',
            'linkidin' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'printrest' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
        ]);
        $social = MainTable::find($req->social_id);
        $social->fb = $req->fb;
        $social->insta = $req->insta;
        $social->linkidin = $req->linkidin;
        $social->twitter = $req->twitter;
        $social->printrest = $req->printrest;
        $social->youtube = $req->youtube;
        $social->user_id = Auth::user()->id;
        $social->update();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }

}