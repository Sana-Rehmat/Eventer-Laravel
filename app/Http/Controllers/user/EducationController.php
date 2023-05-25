<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Education as MainTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public $table = "user.education";
    public $redirect = "education";
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
            'Degree' => 'required|max:255',
            'institute' => 'required|max:255',
            'start_year' => 'required',
            'end_year' => 'required|date_format:Y|after:start_year',
        ]);
        $education = new MainTable();
        $education->Degree = $req->Degree;
        $education->start_year = $req->start_year;
        $education->end_year = $req->end_year;
        $education->institute = $req->institute;
        $education->user_id = Auth::user()->id;
        $education->save();
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
            'Degree' => 'required|max:255',
            'institute' => 'required|max:255',
            'start_year' => 'required',
            'end_year' => 'required|date_format:Y|after:start_year',
        ]);

        $education = MainTable::find($req->id);

        $education->Degree = $req->Degree;
        $education->start_year = $req->start_year;
        $education->end_year = $req->end_year;
        $education->institute = $req->institute;
        $education->user_id = Auth::user()->id;
        $education->update();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }

}