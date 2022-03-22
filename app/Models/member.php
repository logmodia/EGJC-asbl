<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = ['firstname','lastname','gender','birthday','photo','memberCateg_id'];
    protected $primaryKey = 'member_id';

    public function memberCategory(){
        return $this->belongsTo(memberCategory::class,'memberCateg_id','memberCateg_id');
    }
    public function departements(){
        return $this->belongsToMany(departement::class, 'departement_member','member_id','dep_id')
        ->withPivot('id','startdate','enddate','active','member_id','dep_id','memberRole_id');
    }
    public function memberRoles(){
        return $this->belongsToMany(memberRole::class, 'departement_member','member_id','memberRole_id')
        ->withPivot('id','startdate','enddate','active','member_id','dep_id','memberRole_id');
    }

    public function communiques(){
        return $this->hasMany(communique::class,'member_id','member_id');
    }
    
}
