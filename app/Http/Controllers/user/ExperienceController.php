<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Experience as MainTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{

    public $table = "user.experience";
    public $redirect = "experience";
    public function index()
    {
        $data = MainTable::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        $count = 1;
        return View($this->table . ".index", compact('data', 'count'))->with([$this->redirect . 's' => $data]);
    }
    public function create()
    {
        return View($this->table . ".create");
    }
    public function store(Request $req)
    {
        $req->validate([
            'organization' => 'required|max:255',
            'designation' => 'required|max:255',
            'start' => 'required',
            'end' => 'required|after:start',
        ]);

        $experience = new MainTable();
        $experience->organization = $req->organization;
        $experience->start = $req->start;
        $experience->end = $req->end;
        $experience->designation = $req->designation;
        $experience->user_id = Auth::user()->id;
        $experience->save();
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
        return View($this->table . ".update", compact('data'))->with([$this->redirect . 's' => $data]);

    }

    public function updatedb(Request $req)
    {
        $experience = MainTable::find($req->id);
        $experience->designation = $req->designation;
        $experience->organization = $req->organization;
        $experience->start = $req->start;
        $experience->end = $req->end;
        $experience->user_id = Auth::user()->id;
        $experience->update();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }

}