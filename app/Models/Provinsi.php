<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Provinsi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'pictureID'
    ];

    /**
     * Get the picture associated with the Provinsi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function picture(): HasOne
    {
        return $this->hasOne(Picture::class);
    }
}
