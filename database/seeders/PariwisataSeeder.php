<?php

namespace Database\Seeders;

use App\Models\Pariwisata;
use App\Models\PariwisataOverlays;
use Illuminate\Database\Seeder;

class PariwisataSeeder extends Seeder
{
    public function run(): void
    {
        // Data pariwisata Indonesia
        $pariwisataData = [
            [
                'title' => 'Borobudur',
                'label' => 'Candi Bersejarah',
                'subtitle' => 'Keajaiban Dunia di Jawa Tengah',
                'slug' => 'borobudur',
                'content' => "Candi Borobudur adalah candi Buddha terbesar di dunia dan salah satu monumen Buddha terbesar di dunia. Dibangun pada abad ke-8 dan ke-9 Masehi pada masa pemerintahan Dinasti Syailendra.\n\nCandi ini memiliki enam teras berbentuk bujur sangkar yang diatapi oleh tiga pelataran berbentuk lingkaran, dan dihiasi dengan 2.672 panel relief dan 504 arca Buddha.",
                'background_url' => 'https://picsum.photos/1920/1080?random=1',
                'cta_href' => 'https://borobudurpark.com/',
                'cta_label' => 'Kunjungi Sekarang',
                'align' => 'left',
                'overlays' => [
                    [
                        'overlay_url' => 'https://picsum.photos/300/200?random=11',
                        'position_horizontal' => 'right',
                        'position_vertical' => 'top',
                        'object_fit' => 'cover'
                    ],
                    [
                        'overlay_url' => 'https://picsum.photos/250/300?random=12',
                        'position_horizontal' => 'right',
                        'position_vertical' => 'bottom',
                        'object_fit' => 'cover'
                    ]
                ]
            ],
            [
                'title' => 'Raja Ampat',
                'label' => 'Surga Diving',
                'subtitle' => 'Keanekaragaman Hayati Laut Terbaik Dunia',
                'slug' => 'raja-ampat',
                'content' => "Raja Ampat adalah kepulauan yang terletak di ujung barat laut Semenanjung Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan kepulauan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.\n\nKepulauan ini merupakan tempat yang tepat bagi para pecinta diving karena memiliki keanekaragaman hayati laut terlengkap di dunia.",
                'background_url' => 'https://picsum.photos/1920/1080?random=2',
                'cta_href' => 'https://www.indonesia.travel/gb/en/destinations/bali-nusa-tenggara/raja-ampat',
                'cta_label' => 'Jelajahi Raja Ampat',
                'align' => 'right',
                'overlays' => [
                    [
                        'overlay_url' => 'https://picsum.photos/280/180?random=21',
                        'position_horizontal' => 'left',
                        'position_vertical' => 'center',
                        'object_fit' => 'cover'
                    ],
                    [
                        'overlay_url' => 'https://picsum.photos/200/250?random=22',
                        'position_horizontal' => 'center',
                        'position_vertical' => 'bottom',
                        'object_fit' => 'cover'
                    ]
                ]
            ],
            [
                'title' => 'Danau Toba',
                'label' => 'Danau Vulkanik',
                'subtitle' => 'Keindahan Alam Sumatera Utara',
                'slug' => 'danau-toba',
                'content' => "Danau Toba adalah danau alami berukuran besar di Indonesia yang terletak di kaldera gunung berapi super. Danau ini memiliki panjang 100 kilometer, lebar 30 kilometer, dan kedalaman hingga 508 meter.\n\nDanau ini terletak di tengah pulau Sumatera bagian utara dengan ketinggian permukaan sekitar 900 meter di atas permukaan laut.",
                'background_url' => 'https://picsum.photos/1920/1080?random=3',
                'cta_href' => 'https://www.indonesia.travel/gb/en/destinations/sumatra/north-sumatra/lake-toba',
                'cta_label' => 'Nikmati Ketenangan',
                'align' => 'left',
                'overlays' => [
                    [
                        'overlay_url' => 'https://picsum.photos/320/240?random=31',
                        'position_horizontal' => 'right',
                        'position_vertical' => 'center',
                        'object_fit' => 'cover'
                    ]
                ]
            ],
            [
                'title' => 'Komodo Island',
                'label' => 'Pulau Naga',
                'subtitle' => 'Habitat Asli Komodo Dragon',
                'slug' => 'komodo-island',
                'content' => "Pulau Komodo adalah sebuah pulau yang terletak di Kepulauan Nusa Tenggara. Pulau Komodo dikenal sebagai habitat asli hewan komodo. Pulau ini juga merupakan kawasan Taman Nasional Komodo.\n\nSelain komodo, pulau ini juga menyimpan eksotisme flora yang menawan serta savana yang luas dan pantai yang menakjubkan.",
                'background_url' => 'https://picsum.photos/1920/1080?random=4',
                'cta_href' => 'https://www.indonesia.travel/gb/en/destinations/bali-nusa-tenggara/labuan-bajo',
                'cta_label' => 'Bertemu Komodo',
                'align' => 'right',
                'overlays' => [
                    [
                        'overlay_url' => 'https://picsum.photos/250/200?random=41',
                        'position_horizontal' => 'left',
                        'position_vertical' => 'top',
                        'object_fit' => 'cover'
                    ],
                    [
                        'overlay_url' => 'https://picsum.photos/200/300?random=42',
                        'position_horizontal' => 'center',
                        'position_vertical' => 'center',
                        'object_fit' => 'cover'
                    ]
                ]
            ],
            [
                'title' => 'Bromo Tengger',
                'label' => 'Gunung Api',
                'subtitle' => 'Sunrise Spektakuler di Jawa Timur',
                'slug' => 'bromo-tengger',
                'content' => "Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten.\n\nBromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif.",
                'background_url' => 'https://picsum.photos/1920/1080?random=5',
                'cta_href' => 'https://www.indonesia.travel/gb/en/destinations/java/east-java/bromo-tengger-semeru-national-park',
                'cta_label' => 'Saksikan Sunrise',
                'align' => 'left',
                'overlays' => [
                    [
                        'overlay_url' => 'https://picsum.photos/300/180?random=51',
                        'position_horizontal' => 'right',
                        'position_vertical' => 'bottom',
                        'object_fit' => 'cover'
                    ]
                ]
            ]
        ];

        foreach ($pariwisataData as $data) {
            $overlays = $data['overlays'];
            unset($data['overlays']);
            
            $pariwisata = Pariwisata::create($data);
            
            foreach ($overlays as $overlay) {
                PariwisataOverlays::create([
                    'pariwisata_id' => $pariwisata->id,
                    'overlay_url' => $overlay['overlay_url'],
                    'position_horizontal' => $overlay['position_horizontal'],
                    'position_vertical' => $overlay['position_vertical'],
                    'object_fit' => $overlay['object_fit']
                ]);
            }
        }
    }
}