<ul class="progressbar">
    <li @if(!empty($step1)) class="active" @endif>Customer Contact</li>
    <li @if(!empty($step2)) class="active" @endif>Contact Information</li>
    <li @if(!empty($step3)) class="active" @endif>Customer Preferences</li>
    <li @if(!empty($step4)) class="active" @endif>Finished</li>
</ul>