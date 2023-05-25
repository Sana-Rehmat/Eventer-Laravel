<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category as MainTable;
use Illuminate\Http\Request;

class CategorListController extends Controller
{
    public $table = "dashboard.categorylist";
    public $redirect = "categorylist";

    public function index()
    {
        $data = MainTable::orderBy('created_at', 'desc')->paginate(5);
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
            'name' => 'required|max:255',
        ]);
        $category = new MainTable();
        $category->name = $req->name;
        $category->save();
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
            'name' => 'required|max:255',
        ]);
        $category = MainTable::find($req->id);
        $category->name = $req->name;
        $category->update();
        return redirect()->route($this->redirect . ".index")->with('success', 'Data');
    }

    public function find(Request $req)
    {
        $categories = [];

        if ($req->has('q')) {
            $search = $req->q;
            $categories = MainTable::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($categories);

        // $term = trim($req->q);

        // if (empty($term)) {
        //     return \Response::json([]);
        // }
        // $categories = MainTable::search($term)->limit(5)->get();
        // $formatted_tags = [];
        // foreach ($categories as $category) {
        //     $formatted_categories[] = ['id' => $category->id, 'text' => $category->name];
        // }
        // return \Response::json($formatted_categories);
    }
}
