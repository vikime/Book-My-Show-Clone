@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payment Mode') }}</div>
                {{ $flight ?? '' }}

                <div class="card-body">
                    <form method="POST" action="{{ route('generateBookingPaymentToken') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Person Name:-') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Card Holder Name..." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
                                <span><b>{{ $data['name'] }}</b></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __(' Movie Name:-') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Card Holder Name..." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
                                <span><b>{{ $data['movie'] }}</b></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Card_Number" class="col-md-4 col-form-label text-md-end">{{ __('booked Seats:-') }}</label>

                            <div class="col-md-6">
{{--                                <?php print_r(gettype($data['seat_Booked']));die;?>--}}
                               <span><b>{{ implode(',', $data['seat_booked']) }}</b></`sp`an>
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->





                        <div class="row mb-3">
                            <label for="cvv_num" class="col-md-4 col-form-label text-md-end">{{ __('Amount :- ') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="cvv_num" type="number"  name="cvv_num" value="{{ old('cvv_num') }}" required autocomplete="cvv_num"> -->
                              <span><b>{{ $data['amount'] }}</b></span>
                            </div>
                        </div>


                        <!-- <div class="row mb-3">
                            <label for="expiry_date" class="col-md-4 col-form-label text-md-end">{{ __('Expiry Date') }}</label>

                            <div class="col-md-6">
                                <input id="expiry_date" type="date"  name="expiry_date" value="{{ old('expiry_date') }}" required autocomplete="expiry_date">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>

                            </div>
                        </div> -->


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" onclick="payNow()" id="btn">
                                    {{ __('Pay Now') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <script id="context" type="text/javascript"
                     src="https://sandbox-payments.open.money/layer"></script>

                     <script>

                        //const btn = document.querySelector("#btn").addEventListener('click',payNow())
                        //You can bind the Layer.checkout initialization script to a button click event.
                        //Binding inside a click event open Layer payment page on click of a button
                        function payNow(){
                            Layer.checkout({
                                token: "{{ $token }}",
                                accesskey: "c6b19ee0-284e-11ed-a4b4-91d56a37fb20",
                                theme: {
                                    logo : "https://open-logo.png",
                                    color: "#3d9080",
                                    error_color : "#ff2b2b"
                                }
                            },
                            function(response) {

                                if (response.status == "captured") {

                                // response.payment_token_id
                                // response.payment_id

                                } else if (response.status == "created") {


                                } else if (response.status == "pending") {


                                } else if (response.status == "failed") {


                                } else if (response.status == "cancelled") {

                                }
                            },
                            function(err) {
                                //integration errors
                            }
                        );
                        }


                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
