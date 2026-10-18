
@extends('layouts.app')

@section('title', $nft->title . ' - NFT Marketplace')

@section('content')
<div class="mb-3">
    <a href="{{ route('nfts.index') }}"
       class="btn btn-outline-secondary">
        &larr; Kembali ke Koleksi
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="row g-0">
        <div class="col-md-6">
            <img
                src="{{ asset('assets/images/' . $nft->image) }}"
                alt="{{ $nft->title }}"
                class="w-100 h-100"
                style="min-height: 300px; object-fit: cover;">
        </div>

        <div class="col-md-6">
            <div class="card-body p-4 p-lg-5">
                <span class="badge text-bg-primary mb-3">
                    {{ $nft->collection }}
                </span>

                <h1 class="fw-bold">{{ $nft->title }}</h1>

                <p class="text-muted">
                    Dibuat oleh {{ $nft->creator }}
                </p>

                <hr>

                <h6 class="text-muted">Harga NFT</h6>
                <h2 class="text-primary fw-bold">
                    {{ number_format($nft->price_eth, 4) }} ETH
                </h2>

                <h5 class="mt-4">Deskripsi</h5>
                <p>{{ $nft->description }}</p>

                <a href="{{ route('nfts.index') }}"
                   class="btn btn-primary mt-3">
                    Lihat NFT Lainnya
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
