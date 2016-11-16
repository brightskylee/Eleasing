@extends('layout')

@section('pageLinks')
    <link rel="stylesheet" href="{{ elixir('css/createNewCustomer/createNewCustomer.css') }}">
    <script src="{{ elixir("js/createNewCustomer/createNewCustomer.js") }}"></script>
@stop

@section('content')
    <h1 class="form-header"><i class="fa fa-user-circle charcoal" aria-hidden="true"></i> Create New <span class="neutra-bold brookside-green">Customer</span></h1>
    <hr>
    <form method="POST" action="/createNewCustomer/contactInformation/">
        {{ csrf_field() }}
        <h2 class="form-sub-heading">How did this customer <span class="brookside-green">make contact</span>?</h2>
        <div id="contact-selection">
            <div class="contact-type">
                <label>
                    <i class="fa fa-envelope-o contact-icon" aria-hidden="true"></i>
                    <h3>Email</h3>
                    <input type="radio" name="customerContact" value="email" />
                </label>
            </div>
            <div class="contact-type">
                <label>
                    <i class="fa fa-phone contact-icon" aria-hidden="true"></i>
                    <h3>Phone</h3>
                    <input type="radio" name="customerContact" value="phone"/>
                </label>
            </div>
            <div class="contact-type">
                <label>
                    <i class="fa fa-building-o contact-icon" aria-hidden="true"></i>
                    <h3>Walk-In</h3>
                    <input id="fb3" type="radio" name="customerContact" value="walkIn" />
                </label>
            </div>
            <div class="contact-type">
                <label>
                    <i class="fa fa-calendar-o contact-icon" aria-hidden="true"></i>
                    <h3>Special Event</h3>
                    <input id="fb4" type="radio" name="customerContact" value="specialEvent" />
                </label>
            </div>
        </div>
        <div class="clear"></div>
        <h2 class="form-sub-heading" id="inquiry-heading">Is this customer an <span class="brookside-green">inquiry</span>?</h2>
        <div id="inquiry-selection">
            <div class="contact-type">
                <label>
                    <i class="fa fa-check-circle contact-icon" aria-hidden="true"></i>
                    <h3>Yes</h3>
                    <input type="radio" name="inquiryCustomer" value="phone"/>
                </label>
            </div>
            <div class="contact-type">
                <label>
                    <i class="fa fa-times contact-icon" aria-hidden="true"></i>
                    <h3>No</h3>
                    <input type="radio" name="inquiryCustomer" value="phone"/>
                </label>
            </div>
        </div>
        <div class="clear"></div>
        <button type="submit" id="start-submit"><i class="fa fa-arrow-right" aria-hidden="true"></i> Continue</button>
    </form>
@stop