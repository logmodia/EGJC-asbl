<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement_member extends Model
{
    use HasFactory;
    protected $fillable = ['startdate','enddate','active','member_id','dep_id','memberCateg_id'];
}
