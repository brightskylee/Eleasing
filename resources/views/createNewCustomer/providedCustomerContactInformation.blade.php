@if(!empty($contactFormUsed))
<input type="hidden" name="contactFormUsed" value="{{ $contactFormUsed }}" />
@endif
@if(!empty($firstName))
<input type="hidden" name="firstName" value="{{ $firstName }}" />
@endif
@if(!empty($lastName))
<input type="hidden" name="lastName" value="{{ $lastName }}" />
@endif
@if(!empty($email))
<input type="hidden" name="email" value="{{ $email }}" />
@endif
@if(!empty($phone))
<input type="hidden" name="phone" value="{{ $phone }}" />
@endif
@if(!empty($streetAddress) && !empty($city) && !empty($state) && !empty($country) && !empty($zip))
<input type="hidden" name="streetAddress" value="{{ $streetAddress }}" />
<input type="hidden" name="city" value="{{ $city }}" />
<input type="hidden" name="state" value="{{ $state }}" />
<input type="hidden" name="country" value="{{ $country }}" />
<input type="hidden" name="zip" value="{{ $zip }}" />
@endif
@if(!empty($streetAddress2))
<input type="hidden" name="streetAddress2" value="{{ $streetAddress2 }}" />
@endif