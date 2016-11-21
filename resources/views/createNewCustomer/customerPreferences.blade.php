@extends('layout')
@section('title')
    <title>Customer Preferences</title>
@stop
@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/phoneInquiry.js") }}"></script>
@stop

@section('content')
    @include('createNewCustomer/progressBar', ['step1' => 'finished', 'step2' => 'finished'])
    <h1 class="form-header"><i class="fa fa-address-book-o" aria-hidden="true"></i> Customer <span class="brookside-green">Preferences</span></h1>
    <hr>
    @include('createNewCustomer/contactFormDetails')
    <form action="/createNewCustomer/submitCustomerInformation" method="POST">
        {{ csrf_field() }}
        @include('createNewCustomer/providedCustomerContactInformation')
        <div id="location-preference" class="preference-container">
            <h2 class="preference-header">Locations</h2>
            <hr>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/downtown-logo.png')}}">
                    <h3 class="location-name">Brookside Downtown</h3>
                    <input class="checkbox" type="checkbox" name="customerContact[]" value="brooksideDowntown" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/midtown-logo.png')}}">
                    <h3 class="location-name">Brookside Midtown</h3>
                    <input type="checkbox" name="customerContact[]" value="brooksideMidtown" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" style="width: 80px !important;" src="{{asset('assets/img/logos/dark/townhomes-logo.png')}}">
                    <h3 class="location-name">Brookside Townhomes</h3>
                    <input type="checkbox" name="customerContact[]" value="brooksideTownhomes" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" style="width: 80px !important;" src="{{asset('assets/img/logos/dark/townhomes-logo.png')}}">
                    <h3 class="location-name">Bengal Ridge</h3>
                    <input type="checkbox" name="customerContact[]" value="bengalRidge" />
                </label>
            </div>
            <div class="selectable-input-image">
                <label>
                    <img class="selectable-logo" src="{{asset('assets/img/logos/dark/midtown-logo.png')}}">
                    <h3 class="location-name">Midtown WKU</h3>
                    <input type="checkbox" name="customerContact[]" value="midtownWKU" />
                </label>
            </div>
        </div>
        <div class="clear"></div>
        <div class="preference-container">
            <h2 class="preference-header">Additional Preferences</h2>
            <hr>
            <div class="guide-box"></div>
        </div>
        <div class="preference-container">
            <h2 class="preference-header">Brand Exposure</h2>
            <hr>
            <div class="floated-container" style="width: 200px;">
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="facebook"> Facebook<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="google"> Google<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="twitter"> Twitter<br>
            </div>
            <div class="floated-container" style="width: 200px;">
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="brooksideBus"> The Brookside Bus<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="apartmentFinder"> Apartment Finder<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="greekWeek"> Greek Week<br>
            </div>
            <div class="floated-container" style="width: 200px;">
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="friends"> Friends<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="fliers"> Fliers<br>
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="craigslist"> Craigslist<br>
            </div>
            <div class="floated-container" style="width: 200px;">
                <input class="brand-exposure-input" type="checkbox" name="brandExposure[]" value="other"> Other<br>
            </div>
        </div>
        <div class="clear"></div>
        <div class="preference-container">
            <h2 class="preference-header">Does this customer have an appointment?</h2>
            <hr>
            <input type="radio" name="customerAppointment" value="yes"/> Yes<br>
            <input type="radio" name="customerAppointment" value="no"/> No<br>
        </div>
        <div class="form-button-container">
            <button type="button" class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            <button type="submit" id="preference-continue-submit">Finished <i class="fa fa-check" aria-hidden="true"></i></button>
        </div>
        <p id="unqualified-link"><a href="/createNewCustomer/unqualifiedInquiry"><i class="fa fa-times-circle" aria-hidden="true"></i> Unqualified Inquiry?</a></p>
    </form>
@stop