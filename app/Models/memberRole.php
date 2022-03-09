<?php

namespace App\Models;

use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class memberRole extends Model
{
    use HasFactory;

    protected $fillable = ['role_name','dep_id'];
    protected $primaryKey = 'memberRole_id';

    public function departement(){
        return $this->belongsTo(departement::class);
    }
}
