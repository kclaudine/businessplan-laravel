<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// since we are using auth
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Booking;

class HomeController extends Controller
{
    public function redirect() 
    {
        // if someone try to login it will get usertype help
        
        $usertype=auth()->user()->usertype;
        
        if($usertype == '1')
        {
            return view('admin.home');
        } 
        else 
        {
             //this will help to get all the data from database to the browser
            //  $data = product::all();
            $data = product::paginate(6);
             //to send all data to product.blade.php, we need to use compact and the data as parameter
             return view('user.home', compact('data'));
            
            // return view('user.home');
            
        }
        
    }

    public function index()
    {
        if(Auth::id()) 
        {
            return redirect('redirect');
        }
        else
        {
            //this will help to get all the data from database to the browser
            //  $data = product::all();

            // after this go to the product template and add the pagination link
            $data = product::paginate(6);
            //to send all data to product.blade.php, we need to use compact and the data as parameter
            return view('user.home', compact('data'));
            // return view('user.home');
        }
        
    }

    public function viewbooking($booking)
    { 
        $booking=Product::where('id',$booking)->get();
        dd($booking);
    }
    
}
