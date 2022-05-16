<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kampus extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'alamatID',
        'logo',
    ];

    /**
     * Get the alamatDetail associated with the Kampus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alamatDetail(): HasOne
    {
        return $this->hasOne(AlamatDetail::class);
    }

    /**
     * Get the logo associated with the Kampus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function logo(): HasOne
    {
        return $this->hasOne(Picture::class);
    }
}
