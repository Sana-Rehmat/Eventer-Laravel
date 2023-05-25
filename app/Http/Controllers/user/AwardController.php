<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Award as MainTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AwardController extends Controller
{
    public $table = "user.award";
    public $redirect = "award";
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
            'award' => 'required|max:255',
            'year' => 'required|max:255',
        ]);
        $award = new MainTable();
        $award->award = $req->award;
        $award->year = $req->year;
        $award->user_id = Auth::user()->id;
        $award->save();
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
        $req->validate([
            'award' => 'required|max:255',
            'year' => 'required|max:255',
        ]);

        $award = MainTable::find($req->id);
        $award->award = $req->award;
        $award->year = $req->year;
        $award->user_id = Auth::user()->id;
        $award->update();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }
}