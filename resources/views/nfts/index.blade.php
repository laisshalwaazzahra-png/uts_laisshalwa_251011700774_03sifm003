
@extends('layouts.app')

@section('title', 'Koleksi NFT')

@section('content')
<div class="mb-4">
    <h1 class="fw-bold">Koleksi NFT</h1>
    <p class="text-muted">
        Temukan dan jelajahi koleksi seni digital kami.
    </p>
</div>

<div class="row g-4">
    @forelse ($nfts as $nft)
        <div class="col-sm-6 col-lg-4">
            <div class="card nft-card shadow-sm h-100">
                <img
                    src="{{ asset('assets/images/' . $nft->image) }}"
                    class="nft-image"
                    alt="{{ $nft->title }}">

                <div class="card-body d-flex flex-column">
                    <span class="badge text-bg-primary align-self-start mb-2">
                        {{ $nft->collection }}
                    </span>

                    <h5 class="fw-bold">{{ $nft->title }}</h5>

                    <p class="text-muted">
                        Kreator: {{ $nft->creator }}
                    </p>

                    <p class="fw-bold text-primary mt-auto">
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
                Data NFT belum tersedia.
            </div>
        </div>
    @endforelse
</div>
@endsection
