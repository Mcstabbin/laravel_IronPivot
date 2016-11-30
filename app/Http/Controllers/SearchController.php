<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SearchController extends Controller 

{
	public function getResults(Request $request){

		$query = $request->input('query');

		if (!$query){

			return redirect()->route('home');
		}

	/*

		$users = DB::select(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'"));  This one works
---------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------
*/		

		/* This works $users = DB::select(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'"));  */

		//$users = User::where(DB::select("  SELECT * FROM users where first_name like '%{{$query}}%'or username like '%{{$query}}%'  "))->get();


		   $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();
 
	//$users =  DB::select(" SELECT * FROM users where first_name like '%?%'or username like '%?%'" , 
		//[$query]);

//$results = DB::select('select * from users where id = :id', ['id' => 1]); Laravel example from website

		
//users = user::where(DB::raw("SELECT * FROM users where first_name like '%{$query}% 'or username like '%{$query}%'")); 
		//dd($users);

		//return view('search.results')->with('users', $users);  codecourse way i am going with the documentation way. 
		 return view('search.results', ['users' => $users]);
	}
}