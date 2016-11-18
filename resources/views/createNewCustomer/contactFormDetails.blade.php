@if(!empty($firstName) && !empty($lastName))
    <p class="reference-detail"><span class="brookside-dark-blue"><i class="fa fa-user" aria-hidden="true"></i> Name:</span> {{ $firstName }} {{ $lastName }}</p>
@endif
@if(!empty($contactFormUsed))
    <p class="reference-detail"><span class="brookside-dark-blue"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact Type:</span> {{ ucwords($contactFormUsed) }}</p>
@endif
@if(!empty($email))
    <p class="reference-detail"><span class="brookside-dark-blue"><i class="fa fa-envelope" aria-hidden="true"></i> Email:</span> {{ $email }}</p>
@endif
@if(!empty($phone))
    <p class="reference-detail"><span class="brookside-dark-blue"><i class="fa fa-phone" aria-hidden="true"></i> Phone Number:</span> {{ $phone }}</p>
@endif
@if(!empty($streetAddress) && !empty($city) && !empty($state) && !empty($country) && !empty($zip))
    <p class="reference-detail"><span class="brookside-dark-blue"><i class="fa fa-home" aria-hidden="true"></i> Address:</span> {{ $streetAddress }} @if(!empty($streetAddress2)) {{$streetAddress2}} @endif {{ $city }}, {{ $state }}. {{ $country }}. {{ $zip }}</p>
@endif
<div class="clear"></div>