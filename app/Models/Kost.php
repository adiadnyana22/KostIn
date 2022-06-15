<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kost extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'ownerID',
        'approved',
    ];

    /**
     * Get the owner that owns the Kost
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function owner(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'ownerID');
    }
}
