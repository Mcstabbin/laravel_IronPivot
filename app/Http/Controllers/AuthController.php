<?php 

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller 
{
	public function getSignup()
		{
			return view('login.body.partials.register');
		}

	public function postSignup(Request $request)
		{
					/****request gives us our access too post data!! 
			**  we this controller recieves requests from the signup controller...
			**  we want to validate this data... all we need to do is pass the $request array to the validate method which is inherited

					'email' => 'required|unique:users|email|max:255',
					'username' => 'required|unique:users|alpha_dash|max:25',
					'password' => 'required|min:6',

			** We pass out post data through this controller. the function validate accepts our request variable and 
						***/

				$this->validate($request,[
					'email' => 'required|unique:users|email|max:255',
					'username' => 'required|unique:users|alpha_dash|max:25',
					'password' => 'required|min:6',

					]);

				User::create([
					'email' => $request->input('email'),
					'username' => $request->input('username'),
					'password' => bcrypt($request->input('password')),
					]);


				return redirect()->route('home')->with('info', 'Your account has been created!!!');
			//it goes through an abstraction layer and cleaneses it !!!
		}

	public function getSignin()
		{
				return view('login.body.partials.loginForm');
		}


	public function postSignin(Request $request)
		{
		
				$this->validate($request,[
					'email' => 'required',
					'password' => 'required',

					]);

				/* if the vaidation does not pass it stops the funtion execturion in its tracks */

				/* this sAuth:: authomatically starts the session */
				if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))){

					return redirect()->back()->with('info', 'Could not sign you in with those details');

				}

				return redirect()->route('home')->with('info','You are signed in');
		}	

	public function getSignout()
		{
				Auth::logout();
				return redirect()->route('home');
		}
}