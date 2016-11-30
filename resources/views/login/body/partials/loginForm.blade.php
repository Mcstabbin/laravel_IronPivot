@extends('login.login')

@section('content') 


            <form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            
								<!--<div class="login-options">
									<h4>Or login with</h4>
									<ul class="social-icons">
										<li>
											<a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
										</li>
										<li>
											<a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
										</li>
										<li>
											<a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
										</li>
										<li>
											<a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
										</li>
									</ul>
								</div> -->
								<!--<div class="forget-password">
									<h4>Forgot your password ?</h4>
									<p> no worries, click
										<a href="{{ route('auth.signin') }}"> here </a> to reset your password. </p>
								</div>-->
								<div class="create-account">
									<p> Don't have an account yet ?&nbsp;
										<a href="{{ route('auth.signup') }}"> Create an account </a>
									</p>
								</div>
								<!-- END LOGIN FORM -->
					</form>
@stop