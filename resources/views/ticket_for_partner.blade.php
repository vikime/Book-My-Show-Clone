@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booked Tickets for Partner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ticket_for_Partner') }}">
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
                            <label for="Row_No" class="col-md-4 col-form-label text-md-end">{{ __('Row Number') }}</label>

                            <div class="col-md-6">
                                <input id="Row_No" type="number"  name="Row_No" value="{{ old('Row_No') }}" required autocomplete="Row_No">
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="Seat_no" class="col-md-4 col-form-label text-md-end">{{ __('Seat Number') }}</label>

                            <div class="col-md-6">
                                <input id="Seat_no" type="number"  name="Seat_no" value="{{ old('Seat_no') }}" required autocomplete="Seat_no">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Cinema Hall Location') }}</label>

                            <div class="col-md-6">
                            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">

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


                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                            <script type="text/javascript"
                                src="https://maps.google.com/maps/api/js?key=Your_Google_Key=places&callback=initAutocomplete"></script>
                            <script>
                                $(document).ready(function () {
                                    $("#latitudeArea").addClass("d-none");
                                    $("#longtitudeArea").addClass("d-none");
                                });
                            </script>  

                        <script>
                                google.maps.event.addDomListener(window, 'load', initialize);
                                function initialize() {
                                    var input = document.getElementById('autocomplete');
                                    var autocomplete = new google.maps.places.Autocomplete(input);
                                    autocomplete.addListener('place_changed', function () {
                                        var place = autocomplete.getPlace();
                                        $('#latitude').val(place.geometry['location'].lat());
                                        $('#longitude').val(place.geometry['location'].lng());
                                        $("#latitudeArea").removeClass("d-none");
                                        $("#longtitudeArea").removeClass("d-none");
                                    });
                                }
                            </script>

 -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
