<?php
// modelname and controller (post)  all (posts)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable=[  //show what colum avaliable to fill from  controller
        'title',
        'description' ,
        'user_id',
    ];


    public function User(){
        return $this->belongsTo(User::class);
    }
}
