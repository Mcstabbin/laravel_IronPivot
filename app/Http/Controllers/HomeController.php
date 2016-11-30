<?php 

namespace App\Http\Controllers;

use Auth;
use App\Models\Status;


class HomeController extends Controller 

{
	    public function index()
    {
        if (Auth::check()) 
        {
	            /*$statuses = Status::notReply()->where(function($query) {

	                return $query->where('user_id', Auth::user()->id)

	                    ->orWhereIn('user_id', Auth::user()
	                    	->friend()
	                    	->pluck('id')
	                    	);
	            })
	            ->orderBy('created_at', 'desc')
	            ->paginate(10);

	            return view('timeline.index')
	                ->with('statuses', $statuses); */
			 return view('home');
        }

        return view('login.body.partials.loginForm');
    }


		

		public function login()
		{
			return view('login.login');
		}


}