@extends('layout')
@section('title')
    <title>Phone Inquiry</title>
@stop
@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/phoneInquiry.js") }}"></script>
@stop

@section('content')
    @include('createNewCustomer/progressBar', ['step1' => 'finished'])
    <h1 class="form-header"><i class="fa fa-phone dark-gray" aria-hidden="true"></i> Phone <span class="brookside-green">Inquiry</span></h1>
    <hr>
    <p class="italic form-note">Fields denoted with * are required</p>
    <div class="form-errors"></div>
    <form method="POST" id="contactForm" action="/createNewCustomer/customerPreferences">
        {{ csrf_field() }}
        <input type="hidden" name="contactFormUsed" value="phone" />

        <label for="phone-number">Phone Number *</label>
        <input type="text" id="phone-number" name="phone" />
        <label for="email-address">Email Address</label>
        <input type="email" id="email-address" name="email"/>
        @include('createNewCustomer/contactFormInputs')
        <div class="clear"></div>
        <div class="form-button-container">
            <button type="button" class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
            <button type="submit" id="phone-continue-submit">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
        <p id="unqualified-link"><a href="/createNewCustomer/unqualifiedInquiry"><i class="fa fa-times-circle" aria-hidden="true"></i> Unqualified Inquiry?</a></p>
    </form>
@stop