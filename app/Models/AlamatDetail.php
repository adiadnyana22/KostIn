<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AlamatDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kecamatan',
        'kabupaten',
        'provinsiID',
        'alamatDetail',
        'kodePos'
    ];

    /**
     * Get the provinsi associated with the AlamatDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provinsi(): HasOne
    {
        return $this->hasOne(Provinsi::class);
    }
}
