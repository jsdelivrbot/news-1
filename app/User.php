<?php

namespace App;

use App\Models\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'yetki',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function article()
    {
        return $this->hasMany("App\Models\Article", "user_id");
    }

    public function yetki()
    {
        return $this->yetki;
    }

    public function comment(){
        return $this->hasMany(Comment::class,"user_id","id");
    }
}
