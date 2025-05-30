<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Tymon\JWTAuth\Contracts\JWTSubject;// implementasi class Authenticatable

class UserModel extends Authenticatable implements JWTSubject
{
        public function  getJWTIdentifier()
        {
            return $this->getKey();
        }

        public function getJWTCustomClaims()
        {
            return [];
        }








    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'level_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = ['password']; 
    protected $casts = ['password' => 'hashed']; 

    /**
     * Relasi ke tabel level
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

public function getRoleName(): string
{
    return $this->level->level_nama;
}

public function hasRole($role): bool
{
    return $this->level->level_kode == $role;
}

public function getRole()
{
    return $this->level->level_kode;
}


   public function getProfilePictureUrl()
    {
        return $this->image
            ? asset($this->image)
            : asset('adminlte/dist/img/user2-160x160.jpg');
    }

}