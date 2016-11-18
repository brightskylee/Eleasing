@extends('layout')

@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
    <script src="{{ elixir("js/createNewCustomer/phoneInquiry.js") }}"></script>
@stop

@section('content')
    <h1 class="form-header"><i class="fa fa-times-circle charcoal" aria-hidden="true"></i> Unqualified <span class="brookside-green">Inquiry</span></h1>
    <hr>
    <form method="POST" id="contactForm" action="/createNewCustomer/customerPreferences">
        {{ csrf_field() }}
        <input type="hidden" name="contactFormUsed" value="email" />

        <label for="email-address">Email Address</label>
        <input type="email" id="email-address" name="email"/>
        <label for="phone-number">Phone Number</label>
        <input type="text" id="phone-number" name="phone"/>
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="firstName"/>
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="lastName"/>
        <label for="last-name">Reason</label>
        <select id="unqualified-reason" name="reason">
            <option>Select Reason</option>
        </select>
        <label for="last-name">Additional Notes</label>
        <textarea rows="7" cols="50"></textarea>
    </form>
    <div class="form-button-container">
        <button type="button" class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
        <button type="submit" id="preference-continue-submit">Finished <i class="fa fa-check" aria-hidden="true"></i></button>
    </div>
@stop