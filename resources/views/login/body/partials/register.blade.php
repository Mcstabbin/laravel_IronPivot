@extends('login.login')

@section('content') 
			
				<form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Your email address</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">Choose a username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{ Request::old('username') ?: '' }}">
                    @if ($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Choose a password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
               <!-- <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign up</button>
                </div> -->
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            
								<div class="form-group">
									<label class="mt-checkbox mt-checkbox-outline">
										<input type="checkbox" name="tnc" /> I agree to the
										<a href="javascript:;">Terms of Service </a> &
										<a href="javascript:;">Privacy Policy </a>
										<span></span>
									</label>
									<div id="register_tnc_error"> </div>
								</div>
								<div class="form-actions">
									<a href="{{ route('auth.signin') }}"><button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button></a>
									<button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
								</div>

                                </form>
			<!-- END REGISTRATION FORM -->
@stop

