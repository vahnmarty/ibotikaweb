@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
<section class="bg-secondary pt32">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6 col-sm-offset-3 align-self-center">
                <div class="feature feature-3 boxed">
                    <div class="card-body">
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                        {{ html()->email('email')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.email'))
                                            ->attribute('maxlength', 191)
                                            ->required() }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group" style="position: relative;">
                                        {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                        <input class="form-control" type="password" name="password" id="password" placeholder="*******" required />
                                        <a href="{{ route('frontend.auth.password.reset') }}" style="position: absolute; top: 43px; right: 30px">@lang('labels.frontend.passwords.forgot_password')</a>
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                        </div>
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group clearfix mb0">
                                        <button type="submit" class="btn btn-filled btn-block mb0">Log in</button>
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->
                        {{ html()->form()->close() }}

                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    {!! $socialiteLinks !!}
                                </div>
                            </div><!--col-->
                        </div><!--row-->
                    </div><!--card body-->
                </div><!--card-->
            </div><!-- col-md-8 -->
        </div><!-- row -->
    </div>

</section>    
@endsection
