<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;
    protected $table = 'consultation';
    //protected $primaryKey = 'wine_id';
	public $timestamps = false;
}
