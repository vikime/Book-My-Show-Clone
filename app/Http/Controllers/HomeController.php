<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $data = Movies::all();
        return view('welcome')->with('data', $data);
    }

    public function ticketRegistration()
    {
        return view('seat_booking/{id}');
    }

    public function ticketRegistrationForPartner()
    {
        return view('seat_booking/{id}');
    }

    public function seat_booking()
    {
        return view('seat_booking');
    }

    public function payment(Request $request)
    {
//        ($request->all());
//
//
//        $getPaymentToken = $this->generateBookingPaymentToken($request);
//        return view('payment')->with('token', $getPaymentToken);

        //Redirect the page to the get method payment url with an order id
        //Save all the post data to database (call it as orders) - insert it to db - create an order id
        //Reddirect this page to the payment get page with the order id
    }


    public function payment_Con()
    {
        return view('confirmation');
    }



    public function storeBookingDetails(Request $request)
    {
        $request = $request->all();
        print_r($request);
    }
}
