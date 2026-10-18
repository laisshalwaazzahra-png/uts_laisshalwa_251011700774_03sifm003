
@extends('layouts.app')

@section('title', 'Beranda - NFT Marketplace')

@section('content')
<div class="hero p-4 p-md-5 mb-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1 class="fw-bold display-5">Jelajahi Dunia NFT</h1>
            <p class="lead">
                Temukan koleksi seni digital unik dari berbagai kreator.
            </p>
            <a href="{{ route('nfts.index') }}"
               class="btn btn-light btn-lg">
                Lihat Koleksi
            </a>
        </div>
        <div class="col-md-4 text-center mt-4 mt-md-0">
            <div class="display-1">🎨</div>
            <h4>Digital Art Collection</h4>
        </div>
    </div>
</div>

<h2 class="fw-bold mb-4">NFT Terbaru</h2>

<div class="row g-4">
    @forelse ($nfts as $nft)
        <div class="col-sm-6 col-lg-4">
            <div class="card nft-card shadow-sm h-100">
                <img
                    src="{{ asset('assets/images/' . $nft->image) }}"
                    class="nft-image"
                    alt="{{ $nft->title }}">

                <div class="card-body">
                    <h5 class="fw-bold">{{ $nft->title }}</h5>
                    <p class="text-muted mb-2">
                        Kreator: {{ $nft->creator }}
                    </p>
                    <p class="fw-bold text-primary">
                        {{ number_format($nft->price_eth, 4) }} ETH
                    </p>

                    <a href="{{ route('nfts.show', $nft) }}"
                       class="btn btn-primary w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info">
                Belum ada data NFT. Jalankan seeder terlebih dahulu.
            </div>
        </div>
    @endforelse
</div>
@endsection
