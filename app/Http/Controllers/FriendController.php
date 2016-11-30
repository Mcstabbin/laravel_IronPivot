<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;


class FriendController extends Controller
{
    public function getIndex()

    {
        /* This part is not populating the right things)*/
        $friends = Auth::user()->friend();
        /* had to change some stuff in the user()->friendRequest() method from false to null becasue of some database issue */
        $requests = Auth::user()->friendRequest();
   //dd($query);
       //dd($requests);

        return view('friends.index')
            ->with('friends', $friends)
            ->with('requests', $requests);
    }

    public function getAdd($username)
    {
        //dd($username);
        $user = User::where('username', $username)->first();

        if (!$user) {
            return redirect()
                ->route('home')
                ->with('info', 'That user could not be found');
        }

        if (Auth::user()->id === $user->id) {
            return redirect()->route('home');
        }


        if (Auth::user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(Auth::user())) {
            return redirect()
                ->route('profile.index', ['username' => $user->username])
                ->with('info', 'Friend request already pending.');
        }

        if (Auth::user()->isFriendWith($user)) {
            return redirect()
                ->route('profile.index', ['username' => $user->username])
                ->with('info', 'You are already friends.');
        }

        Auth::user()->addFriend($user);

        return redirect()
            ->route('profile.index', ['username' => $username])
            ->with('info', 'Friend request sent.');
    }

    public function getAccept($username)

    {

        //dd($username);
        $user = User::where('username', $username)->first();

        if (!$user) {
            return redirect()
                ->route('home')
                ->with('info', 'That user could not be found');
        }

        if (!Auth::user()->hasFriendRequestReceived($user)) {
            return redirect()->route('home');
        }

        Auth::user()->acceptFriendRequest($user);

        return redirect()
            ->route('profile.index', ['username' => $username])
            ->with('info', 'Friend request accepted.');
    }
}

	
/*
		$users = DB::select(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'"));  This one works
---------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------	

		This works:::: $users = DB::select(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'"));  

		$users = User::where(DB::select("  SELECT * FROM users where first_name like '%{{$query}}%'or username like '%{{$query}}%'  "))->get();


		  $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();
 
	$users =  DB::select(" SELECT * FROM users where first_name like '%?%'or username like '%?%'" , 
		[$query]);

$results = DB::select('select * from users where id = :id', ['id' => 1]); Laravel example from website

		users = user::where(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'")); 
		dd($users);

		return view('search.results')->with('users', $users);  codecourse way i am going with the documentation way. 
		 return view('search.results', ['users' => $users]);
	} 

*/

