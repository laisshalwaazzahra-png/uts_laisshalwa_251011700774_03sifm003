<?php

namespace App\Http\Controllers;

use App\Models\Nft;

class NftController extends Controller
{
    public function home()
    {
        $nfts = Nft::latest()->take(3)->get();

        return view('home', compact('nfts'));
    }

    public function index()
    {
        $nfts = Nft::latest()->get();

        return view('nfts.index', compact('nfts'));
    }

    public function show(Nft $nft)
    {
        return view('nfts.show', compact('nft'));
    }
}
