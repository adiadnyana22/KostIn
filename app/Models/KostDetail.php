<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KostDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kostID',
        'tipeKost',
        'jumlahKamar',
        'jumlahPenghuni',
        'harga',
        'jatuhTempo',
        'alamatID',
        'favourites',
        'coverID'
    ];

    /**
     * Get the kost that owns the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class);
    }

    /**
     * Get the alamatDetail associated with the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alamatDetail(): HasOne
    {
        return $this->hasOne(AlamatDetail::class);
    }

    /**
     * Get the picture associated with the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function picture(): HasOne
    {
        return $this->hasOne(Picture::class);
    }
}
