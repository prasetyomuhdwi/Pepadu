<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    private string $infoUpdate;

    private string $logoHorizontal;

    public function __construct(string $infoUpdate, ?string $logo)
    {
        $this->infoUpdate = $infoUpdate;
        $this->logoHorizontal = $logo == '' ? asset('/img/logo-horizontal.svg') : $logo;
    }

    public function getLogo()
    {
        return $this->logoHorizontal;
    }

    public function getInfoUpdate()
    {
        return $this->infoUpdate;
    }

    public function getNavMenu()
    {
        $layananPublik = [
            'title' => 'Layanan Publik',
            'contents' => [
                [
                    'href' => 'https://semaik.lomboktengahkab.go.id/',
                    'cardTitle' => 'Dukcapil (Semaik)',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Melalui Aplikasi Layanan Online, masyarakat dapat mengajukan berbagai layanan Dukcapil tanpa perlu datang ke kantor.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Daftar RSUD',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Daftar layanan kesehatan yang tersedia di RSUD Praya untuk memenuhi kebutuhan masyarakat dengan cepat dan mudah.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Pajak & Retribusi',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Pajak dan Retribusi adalah sumber pendapatan daerah yang dibayarkan masyarakat untuk mendukung pembangunan dan pelayanan publik.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'PPDB',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'PPDB adalah proses penerimaan peserta didik baru yang dilakukan secara transparan, objektif, dan online.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Perizinan UMKM/OSS',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Melalui sistem OSS, pelaku UMKM dapat mengurus perizinan usaha secara mudah, cepat, dan online.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Bantuan Sosial',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Bantuan Sosial adalah dukungan pemerintah bagi masyarakat yang membutuhkan.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Pengaduan SP4N',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Layanan pengaduan masyarakat terintegrasi melalui SP4N LAPOR.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Pariwisata & Event',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Informasi seputar destinasi wisata dan agenda event menarik di Lombok Tengah.',
                ],
            ],
        ];

        $PembayaranTransaksi = [
            'title' => 'Pembayaran & Transaksi',
            'contents' => [
                [
                    'href' => '#',
                    'cardTitle' => 'Bayar Pajak',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Bayar pajak mudah dan cepat secara online.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'E-Retribusi',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'e-Retribusi adalah sistem pembayaran retribusi daerah secara digital dan transparan.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'E-Ticketing Event',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Sistem pemesanan dan pengelolaan tiket event secara digital.',
                ],
                [
                    'href' => '#',
                    'cardTitle' => 'Jadwal Samsat Keliling',
                    'bootstrapIcon' => 'bi-gear-wide-connected',
                    'desc' => 'Jadwal layanan Samsat Keliling untuk memudahkan pembayaran pajak kendaraan.',
                ],
            ],
        ];

        $DataInformasiPublik =
            [
                'title' => 'Data & Informasi Publik',
                'contents' => [
                    [
                        'href' => '#',
                        'cardTitle' => 'APBD & Realisasi',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Perbandingan antara anggaran (APBD) dan realisasi pelaksanaannya.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Pengadaan (LPSE)',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Layanan pengadaan barang dan jasa pemerintah secara online melalui LPSE.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Kinerja PD (SAKIP)',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Kinerja PD menggambarkan capaian hasil pelaksanaan program dan kegiatan sesuai tujuan serta sasaran daerah.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Nilai SPBE',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Realisasi Pendapatan Asli Daerah (PAD) Kabupaten Lombok Tengah',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Statistik Daerah',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Statistik Penduduk menyajikan data dan informasi Jumlah Penduduk wilayah secara lengkap dan akurat',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Open Data',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Portal yang menyediakan data pemerintah yang terbuka dan mudah diakses publik.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Survei Kepuasan',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Survey Kepuasan digunakan untuk menilai kualitas layanan dari masyarakat.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Kinerja Pengadaan B/J',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Realiasi Pengadaan Barang/Jasa Pemerintah Kabupaten Lombok Tengah secara lengkap dan akurat.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Peta Layanan Daerah',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Peta Layanan Daerah menggambarkan cakupan layanan Pemerintah Kab. Lombok Tengah.',
                    ],
                ],
            ];

        $ProfilDaerahPemerintahan =
            [
                'title' => 'Profil Daerah & Pemerintahan',
                'contents' => [
                    [
                        'href' => '#',
                        'cardTitle' => 'Profil Kepala Daerah',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Profil singkat Bupati dan Wakil Bupati Lombok Tengah.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Profil Daerah',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Profil Daerah yang menggambarkan kondisi Wilayah Kabupaten Lombok Tengah.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Program Prioritas',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Program unggulan yang menjadi fokus pembangunan daerah.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Kontak Layanan',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Kontak Layanan menyediakan informasi dan bantuan terkait layanan digital Pemkab Lombok Tengah.',
                    ],
                    [
                        'href' => '#',
                        'cardTitle' => 'Agenda Kepala Daerah',
                        'bootstrapIcon' => 'bi-gear-wide-connected',
                        'desc' => 'Agenda ini berisi agenda Kepala Daerah dan Berita Bupati/Wakil Bupati Lombok Tengah.',
                    ],
                ],
            ];

        return [$layananPublik, $PembayaranTransaksi, $DataInformasiPublik, $ProfilDaerahPemerintahan];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.default', [
            'infoUpdate' => $this->getInfoUpdate(),
            'logo' => $this->getLogo(),
            'navMenu' => $this->getNavMenu(),
        ]);
    }
}
