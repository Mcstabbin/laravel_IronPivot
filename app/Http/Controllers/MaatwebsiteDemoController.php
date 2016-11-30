<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\ExcelServiceProvider;
//use Illuminate\Support\Facades\Excel;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Excel;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Collections\CellCollection;
use Excel;



class MaatwebsiteDemoController extends Controller
{

	public function index()
	{
		return view('welcome');
	}




	public function downloadExcel($type)
	{

		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}





	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
				if(!empty($insert)){
					DB::table('items')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}



}