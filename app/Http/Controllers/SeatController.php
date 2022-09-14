<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use App\Models\seatBooking;
use App\Contracts\SeatInterface;
use Illuminate\Http\Response;

class SeatController extends Controller
{
    protected $seatinterface;

    public function __construct(SeatInterface $seatinterface)
    {
        $this->seatinterface = $seatinterface;

    }

    /**
     * Show the form for creating a new resource.
     *
     *  * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws GuzzleException
     */
    public function create(Request $request)
    {

        $data = $request->input();
        $seatsBooked = $data['seat_booked'];
        $data['amount'] = count($seatsBooked) * 200;

       $this->seatinterface->create($request);

        $getPaymentToken = $this->generateBookingPaymentToken($data['amount']);
        return view('payment')->with('token', $getPaymentToken)->with('data', $data);
    }

    /**
     * @throws GuzzleException
     */
    public function generateBookingPaymentToken($amount)
    {
        $bytes = random_bytes(20);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://sandbox-icp-api.bankopen.co/api/payment_token', [
            'body' => json_encode([
                "amount" => $amount,
                "contact_number" => "7645378923",
                "email_id" => "code@gmail.com",
                "currency" => "INR",
                "mtx" => bin2hex($bytes)
            ]),
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer c6b19ee0-284e-11ed-a4b4-91d56a37fb20:1c7903dfe788673d46d6a2fc898756ef229efb6b',
                'Content-Type' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        return $responseData->id;

    }


    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',

    //     ]);

    //     return redirect()->route('payment')
    //                     ->with('success','User created successfully.');
    // }


}
