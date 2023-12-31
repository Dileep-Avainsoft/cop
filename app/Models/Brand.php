<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $primaryKey ='brand_id';
    protected $fillable = ['brand_logo', 'car_stage_id', 'brand_name', 'status'];
    use HasFactory;
}
