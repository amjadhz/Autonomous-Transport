<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'blog'
    ];

    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function getUserName(int $test){
        return DB::table("users")->where("id", $test)->first()->name;
    }
}
