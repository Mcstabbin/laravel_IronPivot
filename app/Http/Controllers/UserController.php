<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $results = DB::select( DB::raw("SELECT * FROM tbl_employee") );

        return view('home')->with(['results' => $results]);
            /**
            foreach ($users as $user) {
                echo $user->name;
            }
             */

    }
}