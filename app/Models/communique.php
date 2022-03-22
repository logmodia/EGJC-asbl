<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class communique extends Model
{
    use HasFactory;
    public $fillable = ['title','content','expiration','newscategory_id','member_id'];

    public function newscategory(){
        return $this->belongsTo(newscategory::class);
    }
    public function member(){
        return $this->belongsTo(member::class,'member_id','member_id');
    }
}
