
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;

Route::get('/', [NftController::class, 'home'])
    ->name('home');

Route::get('/nfts', [NftController::class, 'index'])
    ->name('nfts.index');

Route::get('/nfts/{nft}', [NftController::class, 'show'])
    ->name('nfts.show');
