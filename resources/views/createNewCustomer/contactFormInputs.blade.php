<label for="first-name">First Name</label>
<input type="text" id="first-name" name="firstName"/>
<label for="last-name">Last Name</label>
<input type="text" id="last-name" name="lastName"/>
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
        <select name="state" id="state">
            <option value="">Select State</option>
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