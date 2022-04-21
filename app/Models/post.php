<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\comment;


class post extends Model
{
    use HasFactory;

    //defining fillable field
    protected $fillable = [
        'body',
        'active',
    ];
    
    //restricts columns from modifying
    protected $guarded = [];

    //defining validation
    public static function validate($req){
        $req->validate([
            'body'=> 'required',
            'active' => 'boolean'
        ]);
    }

    //post has many comments
    //returns all comment on the post
    public function comments(){
        return $this->hasMany(comment::class);
    }

    //return the instance of the user who is author of that post
    public function author(){
        return $this->belongsTo(User::class);
    }
}

