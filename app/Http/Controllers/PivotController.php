<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\ExcelServiceProvider;
//use Illuminate\Support\Facades\Excel;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Excel;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Collections\CellCollection;
use Excel;


class PivotController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $SKU = '';
        return view('pivot.searchCompetitorSku')->with([
            'originalSku' => $SKU,
            ]);;
    }


        public function createQuery()
        {
                        $SKU = Input::get('SKU');
                        $explodeSkew = explode(' ',$SKU); 
                        $Query = "select * from 
                        (SELECT min(p.TF_OPTION) as TF_OPTION, Catalog
                        FROM PIVOT_MASTER AS P
                        LEFT JOIN IRONMAN_SKU as S ON P.Lifetech_ID = S.SKU
                        LEFT JOIN IRONMAN_DESC as D ON S.WORKFLOW_ID = D.WORKFLOW_ID 
                        WHERE P.Catalog = '$explodeSkew[0]'";
                        $limit = count($explodeSkew);
                        $SkuSearch = count($explodeSkew);
                        if (count($explodeSkew) > 1)
                            {
                            for($i = 1; $i < count($explodeSkew); $i ++)
                                {
                                    $Query.= " or P.Catalog = ";
                                    $Query.= "'$explodeSkew[$i]'";
                                }
                            }
                                $Query.=" group by Catalog
                                ORDER BY P.TF_OPTION) as a 
                            left outer join (SELECT p.*
                        FROM PIVOT_MASTER AS P
                         ) as b on a.TF_OPTION = b.TF_OPTION and a.Catalog = b.Catalog"; 

                return $Query;
        }




        public function createThermoQuery()
        {
                        $SKU = Input::get('SKU');
                        $explodeSkew = explode(' ',$SKU); 

                       $Query = "SELECT P.Catalog, P.Competitor_Company, P.Competitor_Name,URL,
                        P.Lifetech_ID, P.TF_OPTION, P.MATCH_TYPE, P.TF_Company, P.TF_NAME,
                        P.TF_SIZE, S.SKU_NAME ,p.Lifetech_ID
                        FROM PIVOT_MASTER AS P
                        LEFT JOIN IRONMAN_SKU as S ON P.Lifetech_ID = S.SKU    /*LifeTech ID is the ThermoFisher ProductID that corresponds to the the competitors ProductNumber */
                        LEFT JOIN IRONMAN_DESC as D ON S.WORKFLOW_ID = D.WORKFLOW_ID
                        WHERE P.Lifetech_ID = '$explodeSkew[0]'";
                        $limit = count($explodeSkew);
                        $SkuSearch = count($explodeSkew);
                        if (count($explodeSkew) > 1)
                        {
                            for($i = 1; $i < count($explodeSkew); $i ++)
                            {
                                $Query.= " or P.Lifetech_ID = ";
                                $Query.= "'$explodeSkew[$i]'";
                            }
                        }



                        $Query.= " group by P.Catalog, P.Competitor_Company, P.Competitor_Name,
                        P.Lifetech_ID, P.TF_OPTION, P.MATCH_TYPE, P.TF_Company, P.TF_NAME,
                        P.TF_SIZE, S.SKU_NAME ,p.Lifetech_ID, URL
                        ORDER BY P.TF_OPTION";

                        return $Query;
        }


        public function PivotResults()
        {
                $checked = Input::get('ThermoFisher');
                //$this->excel();
                if(isset($checked))
                {
                    $query = $this->createThermoQuery();
                }

                else
                {
                    $query = $this->createQuery();
                }
                //dd($checked);
                $SKU = Input::get('SKU');
                $explodeSkew = explode(' ',$SKU); 
                $SkuSearch = count($explodeSkew);
                $results = DB::select( DB::raw($query));
                //dd($query);
                $resultsetcount = count($results);
                $skusNotMatched = ($SkuSearch - $resultsetcount);


                if(isset($checked))
                {
                //dd($query);
                    return view('pivot.SearchThermo')->with([
                        'results' => $results,
                        'originalSku' => $SKU,
                        'count' => $SkuSearch,
                        'resultsetcount' => $resultsetcount,
                        'skusNotMatched' => $skusNotMatched,
                    ]);
                }

                return view('pivot.searchCompetitorSkuResults')->with([
                    'results' => $results,
                    'originalSku' => $SKU,
                    'count' => $SkuSearch,
                    'resultsetcount' => $resultsetcount,
                    'skusNotMatched' => $skusNotMatched,
                ]);
        }
}