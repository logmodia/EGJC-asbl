<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberCategory extends Model
{
    use HasFactory;
    protected $fillable = ['categ_name'];
    protected $primaryKey = 'memberCateg_id';

    public function member(){
        return $this->hasMany(member::class,'memberCateg_id','memberCateg_id');
    }
}
