<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\AdvokatFirma;
use App\Notifications\FirmaRegistration;
use Torzer\Awesome\Landlord\BelongsToTenants;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable, BelongsToTenants;

    protected $table = 'brukere';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firma_id'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function generatePassword()
    {
        return bcrypt(Str::random(8));
    }

    public static function sendWelcomeEmail($user)
    {
        $token = app('auth.password.broker')->createToken($user);

        $user->notify(new FirmaRegistration($token));
    }
}
