@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payment Confirmation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('confirmation') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Card Holder Name') }}</label> -->

                            <div class="col-md-6">
            
                                <h2> Your Payment is successful. tickects are also booked.</h2>
                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection