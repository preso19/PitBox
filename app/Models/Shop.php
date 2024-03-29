<?php

namespace App\Models;

use App\Models\Appointment;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'description',
        'lat',
        'lng'
    ];

    /**
     * Shop owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo(User::class);
    }

    /**
     * Shop appointments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function appointments() {
        return $this->belongsToMany(Appointment::class);
    }
}
