<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yearvision extends Model
{
    use HasFactory;

    protected $fillable = ['year','subject','details'];
}
