<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;

    protected $fillable = ['dep_name'];
    protected $primaryKey = 'dep_id';

    public function memberRole(){
        return $this->hasMany(memberRole::class);
    }
    
    public function members(){
        return $this->belongsToMany(member::class, 'departement_member','dep_id','member_id')
        ->withPivot('id','startdate','enddate','active','member_id','dep_id','memberRole_id');
    }
}
