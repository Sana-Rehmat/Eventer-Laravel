<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Orders;
use App\Models\Review;
use App\Models\Category;
use App\Models\Serviceimage;
use Illuminate\Http\Request;
use App\Models\Category_Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $header_tags = DB::table('tagging_tagged')->select('tag_name')
            ->distinct()->get();
        return view('welcome', compact('categories', 'header_tags'));
    }
//  service  Detail view

    public function info(Request $req)
    {
        return view('user.event.info');

    }

    public function checkout($id)
    {$dates = Orders::where('service_id', $id)->where('status','!=',1)->get();
        $service = Event::find($id);
        return view('checkout', compact('service', 'dates'));
    }

    public function checkout_store($id, Request $req)
    {
        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->service_id = $id;
        $order->quantity = $req->quantity;
        $order->price = $req->price;
        $order->from = $req->start_date;
        $order->to = $req->end_date;
        $order->address = $req->address;
        $order->phone = $req->phone;
        $order->status = 0;
        $order->save();
        return view('success');

    }
    public function orderlist()
    {
        $orders = Orders::where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->get();
        $users = User::all();
        $services = Event::all();
        $reviews=Review::where('user_id',Auth::user()->id)->get();
        $images = Serviceimage::all();
        return view('orderlist', compact('orders', 'services', 'users', 'images','reviews'));

    }
    public function search(Request $req)
    {
        // Get the search value from the request
        $search = $req->input('search');

        $images = Serviceimage::all();
        $users = User::all();
        $service_categories = Category_Service::all();

        $cat_id = Category::
            where('name', 'LIKE', "%{$search}%")->get();

        $tags = DB::table('tagging_tagged')->where('tag_name', 'LIKE', "%{$search}%")->get();
        $services = Event::query()
            ->where('status', 1)
            ->where('short_description', 'LIKE', "%{$search}%")
            ->get();

        $service = Event::where('status', 1)->get();

        // Return the search view with the resluts compacted
        return view('search', compact('services', 'images', 'users', 'service_categories', 'cat_id', 'service', 'tags'));
    }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function adminHome()
    // {
    //     return view('welcome');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function buyerHome()
    // {
    //     return view('welcome');
    // }
}