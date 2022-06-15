<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KostRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'ownerID',
        'kostID',
        'status',
    ];

    /**
     * Get the user associated with the KostRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'userID');
    }

    /**
     * Get the owner associated with the KostRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'ownerID');
    }

    /**
     * Get the kost associated with the KostRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kost(): HasOne
    {
        return $this->hasOne(Kost::class, 'id', 'kostID');
    }
}
