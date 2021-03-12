<?php
/*
|--------------------------------------------------------------------------
| app/User.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Noclegownia\Presenters\UserPresenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname'   /* Lecture 7 surname */
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    /* Lecture 16 */
    public function objects()
    {
        return $this->morphedByMany('App\TouristObject', 'likeable');
    }
    
    /* Lecture 22 */
    public function larticles()
    {
        return $this->morphedByMany('App\Article', 'likeable');
    }
    
    /* Lecture 16 */
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }
}

