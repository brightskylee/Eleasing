@extends('layout')

@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/specialEventInquiry.js") }}"></script>
@stop

@section('content')
    <h1 class="form-header"><i class="fa fa-calendar-o charcoal" aria-hidden="true"></i> Special Event <span class="brookside-green">Inquiry</span></h1>
    <hr>
    <p class="italic form-note">Fields denoted with * are required</p>
    <div class="form-errors"></div>
    <form>
        <label for="email-address">Email Address</label>
        <input type="email" />
        <label for="phone-number">Phone Number</label>
        <input id="phoneNumber" type="text" id="phone-number" />
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" />
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" />
        <div id="address-input">
            <div class="address-container">
                <label for="street-address">Street Address</label>
                <input type="text" id="street-address" />
            </div>
            <div class="address-container">
                <label for="street-address-2">Street Address 2</label>
                <input type="text" id="street-address-2" />
            </div>
            <div class="address-container">
                <label for="city">City</label>
                <input type="text" id="city" />
            </div>
            <div class="address-container">
                <label for="state">State</label>
                <select id="state">
                    <option value="0">Select State</option>
                    @include('includes/states')
                </select>
            </div>
            <div class="address-container">
                <label for="country">Country</label>
                <input type="text" placeholder="United States" />
            </div>
            <div class="address-container">
                <label for="zip">Zip</label>
                <input type="text" />
            </div>
        </div>
        <div class="clear"></div>
        <hr>
        <div class="form-button-container">
            <button type="button" id="contact-back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            <button type="submit" id="special-event-continue-submit">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </form>
@stop