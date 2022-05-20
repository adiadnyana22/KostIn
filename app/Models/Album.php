<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kostID',
        'coverID',
    ];

    /**
     * Get the kost that owns the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class);
    }

    /**
     * Get the cover associated with the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cover(): HasOne
    {
        return $this->hasOne(Picture::class);
    }
}
