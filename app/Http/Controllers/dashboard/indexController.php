<?php

namespace App\Http\Controllers\dashboard;
use App\Models\User;
use App\Models\Event;
use App\Models\Orders;
use App\Models\Serviceimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function services()
    {

        $services = Event::all();
        $images = Serviceimage::all();
        $users = User::all();
        return view('dashboard.services', compact('services', 'images', 'users'));
    }
     public function invoice_list()
    {
        $invoices = Orders::where('status',0)->get();
        $users = User::all();
        $services = Event::all();
        return view('dashboard.invoice.index', compact('invoices', 'services', 'users'));

    }
    public function invoice_cancel_list()
    {
        $invoices = Orders::where('status',1)->get();
        $users = User::all();
        $services = Event::all();
        return view('dashboard.invoice.cancel', compact('invoices', 'services', 'users'));

    }
     public function invoice_complete_list()
    {
        $invoices = Orders::where('status',2)->get();
        $users = User::all();
        $services = Event::all();
        return view('dashboard.invoice.complete', compact('invoices', 'services', 'users'));

    }
    
   

}
