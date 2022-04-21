<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
use App\Models\User;
class comment extends Model
{
    use HasFactory;
    //define fillable column
    protected $fillable = [
        'body'
    ];

    //comments table in database
    protected $guarded = [];
    
    //validate inputs
    public static function validate($req){
        $req->validate([
            'body'=>'required|text',
        ]);
    }

    //user who has made comment
    public function author(){
        return $this->belongsTo(User::class);
    }

    //return post of any comment
    public function post(){
        $this->belongTo(Post::class);
    }


    
}
