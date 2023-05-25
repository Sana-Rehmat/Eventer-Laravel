<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create($order_id,$user_id)
    {
        $user_provider = User::find($user_id);
        $order = Orders::find($order_id);
        return view('review', compact('user_provider','order'));
    }
    public function store($order_id,$user_id,Request $req)
    {
        $req->validate([
            // 'rating' => 'required',
            // 'user_id' => 'required',
            // 'order_id' => 'required',
            // 'service_provider_id' => 'required',
            'comment' => 'required|max:255',
            
        ]);
        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->service_provider_id = $user_id;
        $review->order_id = $order_id;
        $review->ratings = $req->ratings;
        $review->comment = $req->comment;
        $review->save();
        return view('review_success');

    }



        $response = Http::get('https://gentecbspro.com/MRVapora/CoreAPI/api/values/GetStockWarehousWise?Barcode=&WarsehouseCode=03');
        
        $json_res = json_decode($response, true);
        // $all_data = [];
        foreach ($json_res as $json) {
            // return $json['name'];
            $info = new Info;
            $info->BarCode = $json['BarCode'];
            $info->Quantity = $json['Quantity'];
            $info->WarehouseCode = $json['WarehouseCode'];
            $info->Item = $json['Item'];
            $info->SalePrice =  $json['SalePrice'];
            $info->NetSalePrice = $json['NetSalePrice'];
            $info->DataEntryDate = substr($json["DataEntryDate"], 6, -2);
            $info->DataEntryEditDateTime = $json['DataEntryEditDateTime'];
            $info->save();
           
            );
        }
        
        return view('info');
    }
    
}
