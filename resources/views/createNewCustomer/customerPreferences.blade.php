@extends('layout')

@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/phoneInquiry.js") }}"></script>
@stop

@section('content')
    @include('createNewCustomer/contactFormDetails')
    <h1 class="form-header"><i class="fa fa-address-book-o" aria-hidden="true"></i> Customer Preferences</h1>
    <hr>
    <form action="" method="POST">
        {{ csrf_field() }}
        <div id="location-preference">
            <h2 class="preference-header">Locations</h2>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/downtown-logo.png')}}">
                    <h3>Brookside Downtown</h3>
                    <input type="checkbox" name="customerContact" value="" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/midtown-logo.png')}}">
                    <h3>Brookside Midtown</h3>
                    <input type="checkbox" name="customerContact" value="" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" style="width: 100px !important;" src="{{asset('assets/img/logos/dark/townhomes-logo.png')}}">
                    <h3>Brookside Townhomes</h3>
                    <input type="checkbox" name="customerContact" value="" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" style="width: 100px !important;" src="{{asset('assets/img/logos/dark/townhomes-logo.png')}}">
                    <h3>Bengal Ridge</h3>
                    <input type="checkbox" name="customerContact" value="" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/midtown-logo.png')}}">
                    <h3>Midtown WKU</h3>
                    <input type="checkbox" name="customerContact" value="" />
                </label>
            </div>
        </div>
        <div class="clear"></div>
        <h2 class="preference-header">Additional Preferences</h2>
        <div class="guide-box"></div>
        <h2 class="preference-header">Brand Exposure</h2>
        <div class="guide-box"></div>
        <hr>
        <div class="form-button-container">
            <button type="button" class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            <button type="submit" id="preference-continue-submit">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </form>
@stop