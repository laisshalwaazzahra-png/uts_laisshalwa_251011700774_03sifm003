<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nft;

class NftSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Cosmic Dream',
                'creator' => 'Awa Studio',
                'price_eth' => 0.1250,
                'image' => 'nft1.jpg',
                'collection' => 'Digital Universe',
                'description' => 'Karya seni digital bertema alam semesta dengan warna yang memukau.',
            ],
            [
                'title' => 'Neon City',
                'creator' => 'Pixel Artist',
                'price_eth' => 0.2500,
                'image' => 'nft2.jpg',
                'collection' => 'Cyber World',
                'description' => 'Ilustrasi kota futuristik dengan cahaya neon.',
            ],
            [
                'title' => 'Abstract Bloom',
                'creator' => 'Mira Art',
                'price_eth' => 0.1800,
                'image' => 'nft3.jpg',
                'collection' => 'Modern Art',
                'description' => 'Seni abstrak digital yang terinspirasi oleh keindahan bunga.',
            ],
            [
                'title' => 'Golden Horizon',
                'creator' => 'Digital Vision',
                'price_eth' => 0.3200,
                'image' => 'nft4.jpg',
                'collection' => 'Golden Series',
                'description' => 'Karya digital dengan nuansa emas dan pemandangan futuristik.',
            ],
            [
                'title' => 'Pixel Galaxy',
                'creator' => 'Nova Creator',
                'price_eth' => 0.0950,
                'image' => 'nft5.jpg',
                'collection' => 'Pixel Universe',
                'description' => 'Koleksi pixel art dengan tema galaksi.',
            ],
            [
                'title' => 'Dreamy Ocean',
                'creator' => 'Ocean Lab',
                'price_eth' => 0.2100,
                'image' => 'nft6.jpg',
                'collection' => 'Nature Digital',
                'description' => 'Ilustrasi digital yang menggambarkan keindahan lautan.',
            ],
        ];

        foreach ($items as $item) {
            Nft::create($item);
        }
    }
}
