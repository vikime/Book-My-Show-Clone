@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booked The Tickets') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ticket_booking') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Movie Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="director_name" class="col-md-4 col-form-label text-md-end">{{ __('Directed BY') }}</label>

                            <div class="col-md-6">
                                <input id="director_name_first" type="text"  name="d_name" value="{{ old('director_name') }}" placeholder="first name...">
                                <input id="director_name_last" type="text"  name="d_name" value="{{ old('director_name') }}" placeholder="last name...">

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
                            <label for="Booking_Date" class="col-md-4 col-form-label text-md-end">{{ __('Date of Booking') }}</label>

                            <div class="col-md-6">
                                <input id="Booking_Date" type="date"  name="Booking_Date" value="{{ old('Booking_Date') }}" required autocomplete="Booking_Date">
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="Seat_no" class="col-md-4 col-form-label text-md-end">{{ __('Seat Number') }}</label>

                            <div class="col-md-6">
                                <input id="Seat_no" type="number"  name="Seat_no" value="{{ old('Seat_no') }}" required autocomplete="Seat_no">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
