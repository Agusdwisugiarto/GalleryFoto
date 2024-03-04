<?php

namespace App\Models;

use App\Models\User;
use App\Models\Foto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'users_id',
    ];
    protected $table = 'album';

    //nilai balik ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    //nilai ke foto
    public function foto()
    {
        return $this->hasMany(Foto::class, 'album_id', 'id');
    }
}