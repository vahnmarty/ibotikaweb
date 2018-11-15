@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <div class="feature feature-3 boxed bg-secondary">
                <h3>Sign up in iBotika today!</h3>
                <p>
                    Get unlimited access to locally-approved drug information, medical news and disease treatment guidelines on the go!
                </p>
                <hr class="pink-line" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>I am a :</label>
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select name="type" required data-old="{{ old('type') }}">
                                    <option selected>Citizen</option>
                                    <option >Doctor</option>
                                    <option >Pharmacist</option>
                                    <option >Pharmacy Owner</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="first_name" placeholder="First Name" required value="{{ old('first_name') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input type="text" name="email" placeholder="Email Address" required value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="********" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Confirm Password:</label>
                            <input type="password" name="password_confirmation" placeholder="********" required class="mb0">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="checkbox">
                              <label><input type="checkbox" value="agree" required>I agree to the <a href="">Terms of Use</a> and <a href="">Privacy Policy</a> and I voluntarily consent to the processing of my personal data as set forth in the Privacy Policy.</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-filled btn-block">Create Account</button>
                        </div>
                    </div>
                </div>
            </div>  
        </form>                                             
    </div>
    <div class="col-lg-6">
    </div>
</div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endpush
