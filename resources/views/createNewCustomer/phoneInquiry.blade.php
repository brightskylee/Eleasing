@extends('layout')

@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/phoneInquiry.js") }}"></script>
@stop

@section('content')
    <h1 class="form-header"><i class="fa fa-phone charcoal" aria-hidden="true"></i> Phone <span class="brookside-green">Inquiry</span></h1>
    <hr>
    <p class="italic form-note">Fields denoted with * are required</p>
    <div class="form-errors"></div>
    <form method="POST" id="contactForm" action="/createNewCustomer/directContactForm">
        {{ csrf_field() }}
        <input type="hidden" name="contactFormUsed" value="phone" />

        <label for="phone-number">Phone Number *</label>
        <input type="text" id="phone-number" name="phone" />
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="firstName"/>
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="lastName"/>
        <label for="email-address">Email Address</label>
        <input type="email" id="email-address" name="email"/>
        <div id="address-input">
            <div class="address-container">
                <label for="street-address">Street Address</label>
                <input type="text" id="street-address" name="streetAddress"/>
            </div>
            <div class="address-container">
                <label for="street-address-2">Street Address 2</label>
                <input type="text" id="street-address-2" name="streetAddress2"/>
            </div>
            <div class="address-container">
                <label for="city">City</label>
                <input type="text" id="city" name="city"/>
            </div>
            <div class="address-container">
                <label for="state">State</label>
                <select id="state" name="state">
                    <option value="0" >Select State</option>
                    @include('includes/states')
                </select>
            </div>
            <div class="address-container">
                <label for="country">Country</label>
                <input type="text" id="country" placeholder="United States" name="country"/>
            </div>
            <div class="address-container">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip"/>
            </div>
        </div>
        <div class="clear"></div>
        <hr>
        <div class="form-button-container">
            <button type="button" id="contact-back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            <button type="submit" id="phone-continue-submit">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </form>
@stop