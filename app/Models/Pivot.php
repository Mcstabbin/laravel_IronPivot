<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pivot extends Model
{

 public $fillable =  
 				[
                    'TF_OPTION',
                    'Catalog',
                    'Competitor_ID',
                    'Competitor_Company',
                    'Catalog',
                    'Competitor_Name',
                    'Competitor_Size',
                    'Competitor_Unit',
                    'Level_01',
                    'Level_02',
                    'Level_03',
                    'Price',
                    'Url',
                    'Size_Group',
                    'Last_Update',
                    'Source',
                    'VWR',
                    'FISHER',
                    'VENDOR_01',
                    'VENDOR_02',
                    'DESCRIPTION',
                    'Brand',
                    'Root',
                    'Match_ID',
                    'TF_Option',
                    'Match_Type',
                    'Lifetech_ID',
                    'TF_Company',
                    'TF_Name',
                    'ProductLine_Code',
                    'TF_Size',
                    'TF_Group',
                    'UOM',
                    'Timestamp',
                    'Origin',
                    'SizeGroup',
                    'STATUS',
                    'REGION'
                ];

}