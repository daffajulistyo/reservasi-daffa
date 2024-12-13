<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['nama_hotel', 'alamat', 'telepon'];

    public function kamars()
    {
        return $this->hasMany(Kamar::class);
    }
}
