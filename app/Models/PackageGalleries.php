<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageGalleries extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'image'
    ];

    public function Travel(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id');
    }
}
