<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class ProfileController extends Controller 

{
		public function getProfile($username)
		{
				//dd($username);
				$user = User::where('username', $username)->first();

				if (!$user)
				{
						abort(404); // profile not found 404 error

				}

			    $statuses = $user->statuses()->notReply()->get();

		        return view('profile.index')
		            ->with('user', $user)
		            ->with('statuses', $statuses)
		            ->with('authUserIsFriend', Auth::user()->isFriendWith($user));
				
		}


		public function getEdit()
				{
						return view('profile.edit');

				}



		public function postEdit(Request $request)
				{

						$this->validate($request, [
							'first_name' => 'alpha|max:50',
							'first_name' => 'alpha|max:50',
							'location' => 'max:20',
						]);

						Auth::user()->update([
						'first_name' => $request->input('first_name'),
						'last_name' => $request->input('last_name'),
						'location' => $request->input('location'),
						]);

					return redirect()->route('profile.edit')
					->with('info', 'Your profile has been updated');
						//dd('all ok');
				}
	
}