<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


	class Item extends Model
		{
		   public $fillable = ['title','description'];
		   /* delcaring what can be filled */
		}
		