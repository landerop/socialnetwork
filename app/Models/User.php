<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The database table for this model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'country',
        'city',
        'biography',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns the user's full name, first name or username.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name} {$this->last_name}";
        }

        if ($this->first_name) {
            return $this->first_name;
        }

        return $this->username;
    }

    /**
     * Returns the user's gravatar picture.
     *
     * @return string
     */
    public function getGravatarUrl($size = 40)
    {
        $hash = md5($this->email);

        return 'https://www.gravatar.com/avatar/' . $hash . '/?d=mm&s=' . $size;
    }
}
