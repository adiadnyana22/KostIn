<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KostFacilities extends Model
{
    public $timestamps = false;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kostID',
        'facilitiesID',
    ];

    /**
     * Get the kost that owns the KostFacilities
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class);
    }

    /**
     * Get the facilities associated with the KostFacilities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facilities(): HasOne
    {
        return $this->hasOne(Facility::class);
    }
}
