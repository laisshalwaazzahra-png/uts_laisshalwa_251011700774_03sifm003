<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    protected $fillable = [
        'title',
        'creator',
        'price_eth',
        'image',
        'collection',
        'description',
    ];
}
