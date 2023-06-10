<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $shops = [

            [
                'foto' => 'belum upload ke bucket',
                'nama_barang' => 'Benih jagung hibrida Bioseed B-54 1 Kg',
                'harga' => 62.999,
                'deskripsi' => 'Benih jagung hibrida Bioseed B-54 termasuk ke dalam benih jagung varietas unggul. Benih jagung ini memiliki hasil panen yang tinggi dan lebih tahan terhadap penyakit bulai pada jagung. Benih jagung Bioseed B-54 dapat ditanam dengan jarak tanam 70 cm x 20 cm. Gunakan satu biji per lubang tanam. Untuk pemupukan, gunakan NPK 250 kg/ha sebagai pupuk dasar (0 HST), NPK 150 kg/ha dan Urea 100 kg/ha sebagai pupuk kedua (20 HST), serta Urea 150 kg/ha sebagai pupuk ketiga (40 HST). Pupuk dapat dimasukkan dengan jarak 5 cm di samping lubang bibit jagung, kemudian tutup kembali dengan tanah.',
                'referensi' => 'https://www.tokopedia.com/agrokimiaasia/bibit-benih-jagung-hibrida-bioseed-b-54-kemasan-1kg-non-repack?extParam=ivf%3Dfalse&src=topads'
            ],
            [
                'foto' => '',
                'nama_barang' => 'Benih jagung manis varietas BARUNA 250 gram',
                'harga' => 26.500,
                'deskripsi' => 'Bibit jagung manis varietas BARUNA adalah varietas jagung unggul lokal. Kelebihan varietas ini yaitu tanaman jagung yang tahan rebah, memiliki hasil panen yang tinggi, serta dapat dipanen dengan jangka waktu yang pendek. Jagung ini dapat dipanen pada usia 60 sampai dengan 65 hari setelah penanaman.',
                'referensi' => 'https://www.tokopedia.com/bogorseeds/isi-1750-biji-bibit-benih-jagung-manis-baruna-250gram?extParam=ivf%3Dfalse&src=topads',
            ],

            [
                'foto' => '',
                'nama_barang' => 'Pupuk Urea 5 Kg Nitrea',
                'harga' => 59.999,
                'deskripsi' => 'Nitrea pupuk urea adalah pupuk urea kujang dengan kemasan 5 kg. Pupuk ini mengandung maksimal 1% kadar biuret dan minimal 46% kadar nitrogen. Pupuk ini berbentuk butiran yang 100% dapat larut dalam air. Pupuk urea diberikan kepada tanaman untuk menunjang kebutuhan unsur nitrogen. Pemberian pupuk urea bersamaan dengan penyiraman tanaman dapat meningkatkan kesegaran daun menjadi lebih hijau, mempercepat pertumbuhan tanaman, serta meningkatkan kandungan protein dalam tanaman.',
                'referensi' => 'https://www.tokopedia.com/agrokimiaasia/nitrea-pupuk-urea-5-kg-pupuk-kujang-pupuk-urea?extParam=ivf%3Dfalse&src=topads',
            ],

            [
                'foto' => '',
                'nama_barang' => 'Pupuk NPK 1 Kg Mutiara 16-16-16',
                'harga' => 20.999,
                'deskripsi' => 'NPK Mutiata 16-16-16 mengandung unsur N, P, dan K yang seimbang untuk mendukung pertumbuhan tanaman dengan harapan hasil tanaman yang maksimal. Pupuk ini mengandung Nitrat-N 6,5%, Amonium-N 9,5%, total P2O5 sebanyak 16%, serta total K2O sebanyak 16%. Pupuk NPK ini rendah debu, mengandung unsur hara yang seimbang, dan mudah untuk diaplikasikan. Gunakan pupuk NPK ini sesuai dengan kebutuhan tanaman Anda. Berat bersih: 1 Kg',
                'referensi' => 'https://www.tokopedia.com/sahabatkarung-1/pupuk-npk-mutiara-16-16-16-original-kemasan-pabrik-1kg?extParam=ivf%3Dfalse%26src%3Dsearch',
            ],

            [
                'foto' => '',
                'nama_barang' => 'Pupuk KCL/MOP Meroke 1 Kg (Repack)',
                'harga' => 15.000,
                'deskripsi' => 'Pupuk KCL MerokeMOP dapat digunakan untuk menunjang kebutuhan unsur Kalium (K) pada tanaman. Tujuan pemberian pupuk ini yaitu untuk meningkatkan kekuatan batang, ketahanan terhadap kekeringan, ketahanan terhadap penyakit, serta mendukung kinerja enzim. Pupuk KCL ini dapat diberikan dengan dosis 75-100 kg/ha untuk padi dan jagung, 300-500 kg/ha untuk cabai dan tomat, dan 300-600 kg/ha untuk tanaman buah-buahan dan perkebunan. Meskipun demikian, frekuensi dan dosis pemakaian pupuk ini dapat disesuaikan dengan kondisi dan kesuburan tanah serta tanaman.

                Berat bersih: 1 Kg (Repack)',
                'referensi' => 'https://www.tokopedia.com/sahabatkarung-1/pupuk-kcl-mop-meroke-repack-1-kg?extParam=ivf%3Dfalse%26src%3Dsearch',
            ],

            [
                'foto' => '',
                'nama_barang' => 'Seeder atau alat penanam jagung',
                'harga' => 217.000,
                'deskripsi' => 'Prince Gejik seeder merupakan alat yang dapat digunakan untuk menanam jagung. Meskipun demikian, alat ini juga dapat digunakan untuk menanam tanaman biji-bijian. Alat ini mudah dioperasikan, fleksibel, dan efisien dengan ukurannya yang kecil. Penggunaan alat dalam satu kali dapat menanam tanaman seluas 0,3 sampai dengan 0,5 per hari.

                Spesifikasi alat:
                - Dimensi 80 x 14 x 20 cm
                - Kedalaman penanaman 3-7 cm
                - Berat 2,5 kg
                - Kapasitas benih 2,5 kg',
                'referensi' => 'https://www.tokopedia.com/mitrakawan/alat-tanam-jagung-seeder?extParam=ivf%3Dfalse%26src%3Dsearch',
            ],
            [
                'foto' => '',
                'nama_barang' => 'Pupuk TSP Meroke 500 gr (Repack)',
                'harga' => 31.500,
                'deskripsi' => '	Pupuk TSP Meroke adalah pupuk dengan kandungan unsur Phosphate 46%. Pupuk ini berupa granular warna hitam atau abu-abu. Supaya produksi tanaman berjalan optimal, pupuk TSP dapat digunakan untuk memenuhi kebutuhan unsur P (Phosphate) pada tanaman. Pupuk ini dapat diberikan dengan dosis 50-100 kg/ha pada padi dan jagung, 150-300 kg/ha pada cabai dan tomat, dan 150-500 kg/ha untuk tanaman buah-buahan dan perkebunan. Frekuensi dan dosis ini dapat disesuaikan dengan mempertimbangkan tingkat kesuburan dan kondisi tanah serta tanaman.

                Berat bersih: 500 gram (Repack)',
                'referensi' => 'https://www.tokopedia.com/indahb/pupuk-tsp-46-meroke-tsp-500gr-repack?extParam=ivf%3Dfalse&src=topads',
            ], [
                'foto' => '',
                'nama_barang' => 'Kantong Tanaman Stroberi',
                'harga' => 113.800,
                'deskripsi' => 'Dibuat dengan plastik dan teknik menjahit tertentu untuk memastikan awet digunakan. Mencegah pembentukan akar yang berputar-putar, udara memangkas akar tanaman dan memungkinkan kelebihan air untuk mengalirkan struktur. Mudah dilipat untuk penyimpanan. Dapat dicuci dan mudah dibersihkan untuk penggunaan kembali Tahunan. Pegangannya mudah untuk Anda pindahkan. Desain multi-mulut dapat membuat tanaman yang berbeda tumbuh di tas yang sama. Cocok untuk penggunaan dalam dan luar ruangan.

                Berat bersih: 534 gram
                
                Spesifikasi alat:
                - Warna hijau, oranye, kuning
                - Bahan plastik
                - Ukuran 3 galon (dengan 10 mulut)',
                'referensi' => 'https://www.tokopedia.com/jayabintangabadi/perlengkapan-taman-anggun-kantong-tanaman-stroberi-banyak-mulut?',
            ], [
                'foto' => '',
                'nama_barang' => 'Sarung Tangan Bercocok Tanam Berkebun',
                'harga' => 19.000,
                'deskripsi' => 'Bahan karet spandek antislip pada sarung tangan ini juga dapat digunakan untuk bekerja, seperti salah satunya pekerjaan kebun. Sarung tangan ini juga akan membuat tangan Anda tetap kering dan bersih ketika berkebun. Anda juga bisa mengaduk-mengaduk tanah dengan aman. Sarung tangan sepeda yang didesain khusus agar tangan tidak tergelincir ketika Anda memegang benda-benda yang licin dan berlembab, seperti tanaman, tanah, dan sebagainya. Penggunaaan material spandex dan polyester membuat sarung tangan ini mampu melindungi tangan Anda dari material-material tajam seperti duri, kerikil ketika berkebun. Sarung tangan ini juga akan membuat tangan Anda tetap kering dan bersih.

                Berat bersih: 250 gram',
                'referensi' => 'https://www.tokopedia.com/bestinme-1/sarung-tangan-bercocok-tanam-berkebun-ladang-kebun-gali-tanah-tanaman?extParam=ivf%3Dfalse%26src%3Dsearch',
            ], [
                'foto' => '',
                'nama_barang' => 'Kantong Penumbuh Tanaman Strawberry / Bunga / Sayuran Anti Korosi',
                'harga' => 128.500,
                'deskripsi' => '100% Baru dan berkualitas tinggi! Cocok untuk menanam stroberi segar, tomat, bunga, dll. Dapat dipajang di semua jenis dinding: teras, pergola, beranda, tiang, por atau balkon. Tahan korosi, bernapas, dan dapat menyerap sendiri. Tidak mudah berubah bentuk, kuat dan tahan lama. Dapat terurai, hemat air dan tahan kekeringan.

                Berat bersih: 680 gram
                
                Spesifikasi alat:
                - Bahan non-anyaman
                - Warna Hijau, Hitam
                - Ukuran Sekitar 38cm x 22cm',
                'referensi' => 'https://www.tokopedia.com/aazshoppjakarta/kantong-penumbuh-tanaman-strawberry-bunga-sayuran-anti-korosi?',
            ], [
                'foto' => '',
                'nama_barang' => 'Set Alat Perlengkapan Perawatan Tanaman Taman, Kebun',
                'harga' => 155.000,
                'deskripsi' => 'Set peralatan berkebun ini terdiri dari 10 buah jenis perlengkapan yang dapat digunakan untuk merawat tanaman Anda. Anda akan mendapat peralatan seperti sekop dengan beberapa ukuran dan jenis kepala, pengeruk tanah, gunting ranting, gunting daun dan botol spray.

                Berat bersih: 2000 gram
                
                Spesifikasi alat:
                - Material Iron
                - Dimensi Kemasan 37 x 27 x 7 cm',
                'referensi' => 'https://www.tokopedia.com/milanshoping/set-alat-perlengkapan-perawatan-tanaman-taman-kebun-garden-10pcs?',
            ], [
                'foto' => '',
                'nama_barang' => 'Granule Bio Organik GDM SAME Pupuk Padat Tanaman 1kg',
                'harga' => 17.500,
                'deskripsi' => '	Pupuk Granule Bio Organik GDM SAME terbuat dari bahan 100% organik berkualitas tinggi dan memiliki kandungan hara lengkap serta bakteri premium, dengan manfaat: Memiliki kandungan bakteri premium yang menguntungkan bagi tanah maupun tanaman, berfungsi sebagai perekat, agar nutrisi terserap lebih optimal, mempercepat pertumbuhan akar dan meningkatkan imunitas tanaman, mempercepat pertumbuhan tunas dan memperbanyak anakan tanaman, memastikan kebutuhan bahan organik di dalam tanah selalu tercukupi, meningkatkan produktifitas bakteri apatogen untuk menghasilkan zat dan enzim yang dibutuhkan oleh tanaman, melancarkan sirkulasi udara tanah.

                Berat bersih: 1000 gram',
                'referensi' => 'https://www.tokopedia.com/gdmofficialstore/granule-bio-organik-gdm-same-pupuk-padat-tanaman-1kg?',
            ], [
                'foto' => '',
                'nama_barang' => 'Richgrow Beat-a-bug Organik Pestisida Insektisida Pembasmi Hama 500ml',
                'harga' => 38.000,
                'deskripsi' => 'Pestisida Organik sangat aman buat rumah tangga, pet friendly dan terbuat dari bahan alami.
                Insektisida Organik tidak langsung membunuh hama, akan tetapi membunuh/mengusir secara perlahan. Tidak seperti Insektisida Kimia yang reaksinya cepat.
                
                Cara Pakai:
                - Langsung semprot ke tanaman ke daerah yang di serang hama
                - Waktu paling bagus buat semprot = Pagi dan Sore
                
                Berat bersih: 500 gram',
                'referensi' => 'https://www.tokopedia.com/microfoodindonesia/richgrow-beat-a-bug-organik-pestisida-insektisida-pembasmi-hama-500ml?',
            ], [
                'foto' => '',
                'nama_barang' => 'Sprayer Farmguard Elektrik 16 L Baterai Knapsack Pembasmi Hama',
                'harga' => 410.000,
                'deskripsi' => 'Farmguard electric knapsack sprayer hadir dengan design yang elegan. Cocok digunakan untuk menyemprot pupuk dan pestisida dengan kapasitas mencapai 16 liter serta dilengkapi berbagai tipe nozzle sesuai kegunaannya. Konstruksi polypropilene yang ringan dan kuat sehingga nyaman digunakan dan tidak mudah pecah. Perbedaan dengan spraer tipe 2 atau tipe sebelumnya untuk sprayer ini dilegkapi lubang tambahan sebagai tempat menaruh nozzle. Pompa elektrik menjamin kekuatan semprotan dan baterai yang dapat diisi kembali (rechargeable) setelah 8 jam pemakaian. Memudahkan pekerjaan para petani, karena tidak lagi capek memompa. Karena tangki sprayer ini sudah ada pompanya menggunakan aki.Keadaan barang baru biasanya 1 x charger penuh bisa untuk sekitar 15 sampai 18 tangki.

                Berat bersih: 5600 gram',
                'referensi' => 'https://www.tokopedia.com/kingsprayer/sprayer-farmguard-elektrik-16-l-baterai-knapsack-pembasmi-hama',
            ], [
                'foto' => '',
                'nama_barang' => 'Daiso Watering Can with Scale - White',
                'harga' => 31.100,
                'deskripsi' => 'Penyiram tanaman yang dibuat dari material plastik. Dilengkapi dengan ukuran (ukuran hanya perkiraan )

                Berat Bersih: 928 gram
                
                Spesifikasi alat:
                - Bahan Polypropylene
                - Ukuran 27.5cm × 10.9cm × 15cm',
                'referensi' => 'https://www.tokopedia.com/daiso-japan/daiso-watering-can-with-scale-white?extParam=ivf%3Dfalse%26src%3Dsearch%26whid%3D14467525',
            ], [
                'foto' => '',
                'nama_barang' => 'Pupuk Organik Cair Hayati | 500ml Richgrow | Penyubur Tanaman NPK ZPT',
                'harga' => 38.000,
                'deskripsi' => 'Bisa untuk Tanaman Hias, Monstera, Succulents, Cactus, semua jenis Bunga, Sayuran, Buah2an dan buat pertumbuhan Ikan juga bisa. Daun yang kuning dan layu wajib di coba! Tidak usah hawatir buat dosis pupuk cair ini pokoknya aman, lebih banyak lebih okeh lebih sering di semprot lebih happy tanamannya!

                Cara Penggunaan :
                1. Kocok Botol Sebelum Digunakan
                2. Putar tombol kunci di semprotan
                3. Langsung disemprotkan ke area media pohon dan daun
                4. Penyemprotan dilakukan setiap hari
                5. 4-5 kali semprotan per tanaman, lebih juga okay!
                
                Berat Bersih: 550 gram',
                'referensi' => 'https://www.tokopedia.com/microfoodindonesia/pupuk-organik-cair-hayati-500ml-richgrow-penyubur-tanaman-npk-zpt?',
            ], [
                'foto' => '',
                'nama_barang' => 'Pupuk Meroke NPK Grower Kemasan Repack 1Kg',
                'harga' => 20.000,
                'deskripsi' => 'NPK Mutiara GROWER 15-09-20 sendiri adalah salah satu produk unggulan PT Meroke Tetap Jaya, yang pada setiap butiran prill pupuk ini mengandung 15% Nitrogen (N), 9% Fosfor (P), 20% Kalium (K), dan TE (Trace Element). Sehingga, menjamin keseragaman penyebaran semua hara agar pertumbuhan dan hasil tanaman yang maksimal. Keunggulan NPK Mutiara GROWER 15-09-20+TE dari produk-produk lainnya, adanya TE atau Trace Element. Yaitu, unsur-unsur hara yang dibutuhkan tanaman dalam jumlah sedikit. Pada NPK Mutiara GROWER 15-09-20+TE, unsur hara TE-nya sebagai berikut: 0,015 % Boron Oksida (B2O3); 0,020 % Zinc (Zn); dan 0,020 % Mangan (Mn).

                Berat Bersih: 1100 gram',
                'referensi' => 'https://www.tokopedia.com/sahabatkarung-1/pupuk-meroke-npk-grower-15-09-20-kemasan-repack-1kg?extParam=whid%3D8945742',
            ], [
                'foto' => '',
                'nama_barang' => 'Pupuk Meroke MAG-S 25Kg Original Kemasan Pabrik',
                'harga' => 210.000,
                'deskripsi' => 'MerokeMAG-S merupakan pupuk larut air yang mengandung Magnesium (Mg) dan Sulfur (S), menjadi pilihan yang sesuai untuk tanaman hortikultura secara luas. Kelarutannya di air sangat cepat. MerokeMAG-S dengan kandungan rasio Magnesium dan Sulfur yang seimbang dapat meningkatkan fungsi enzim, sintesa protein dan pembentukan umbi sehingga hasil panen dan kualitas meningkat serta memperkaya rasa dan warna. MerokeMAG-S Sesuai diaplikasikan pada semua sistem fertigasi seperti hidroponik, sistem drip/tetes, sprinkel, sistem pivot, atau pun dengan penyemprotan sebagai foliar. MerokeMAG-S berperan sebagai suplemen jika diaplikasikan pada tanah untuk mencegah defisiensi Mg pada tanaman.

                Kandungan MerokeMAG-S:
                - Magnesium Oksida (MgO) 16,0 %
                - Sulfur Trioksida (SO3) 32,5 %
                
                Berat Bersih: 25000 gram',
                'referensi' => 'https://www.tokopedia.com/sahabatkarung-1/pupuk-meroke-mag-s-25-kg-original-kemasan-pabrik?extParam=whid%3D8945742',
            ], [
                'foto' => '',
                'nama_barang' => 'Pupuk Meroke Calnit 25Kg Original Kemasan Pabrik',
                'harga' => 390.000,
                'deskripsi' => 'Nitrogen yang dikandung dalam pupuk MerokeCALNIT ini dalam bentuk Nitrat (N-NO3), mampu memberikan respon pertumbuhan tanaman yang lebih cepat karena dalam bentuk yang lebih tersedia dibandingkan dengan N-Amonium (N-NH4). Unsur hara Kalsium (Ca) yang dikandung dalam MerokeCALNIT adalah Kalsium yang larut air. Sehingga Kalsium dalam bentuk yang tersedia dan dapat diambil oleh akar tanaman mengikuti ‘tarikan transpirasi’ daun tanaman. Unsur hara Kalsium (Ca), sangat penting untuk titik-titik tumbuh tanaman seperti pucuk baru dan ujung-ujung akar.

                Manfaat:
                - Tanaman tumbuh dengan sehat dan memaksimalkan produktivitas jangka panjang.
                - Hasil produksi meningkat dengan meningkatnya jumlah dan juga ukuran buah atau umbi.
                - Meningkatkan kualitas, rasa, warna, kesegaran dan daya simpan buah atau umbi.
                
                Berat Bersih: 25000 gram',
                'referensi' => 'https://www.tokopedia.com/sahabatkarung-1/pupuk-meroke-calnit-25-kg-original-kemasan-pabrik?extParam=whid%3D8945742',
            ], [
                'foto' => '',
                'nama_barang' => 'Garpu Kebun Kecil Gagang Besi / Garden Fork',
                'harga' => 39.000,
                'deskripsi' => 'Garpu Kebun Kecil atau Garden Fork biasa digunakan untuk keperluan perkebunan mengurai pupuk kandang dan memindahkan hasil panen kebun. Alat ini bisa juga untuk keperluan yang lain seperti menguraikan sampah dan membersihkan gorong-gorong.

                Spesifikasi alat:
                - Bahan baja
                - Ukuran 12 cm x 11 cm x 8 mm
                - Gagang Pipa Besi Panjang 70 cm Diameter 3/4 inch Tebal 1,8 mm
                
                Berat Bersih: 650 gram',
                'referensi' => 'https://www.tokopedia.com/alatpertanianku/garpu-kebun-kecil-gagang-besi-garden-fork?extParam=ivf%3Dfalse%26src%3Dsearch',
            ], [
                'foto' => '',
                'nama_barang' => 'Sekop Gland: Trowel Plastic Handle',
                'harga' => 34.000,
                'deskripsi' => 'Terbuat dari plastik kuat berkualitas. Bentuk gagang sesuai lekukan jari sehingga nyaman dipakai. Sekop Tidak Mudah Lepas. Sekop Besar Dapat Untuk Mengambil Dan Mengaduk Tanah. Gagang Sekop Berlubang Untuk Mempermudah Penyimpanan. Bantalan Gagang Nyaman Dipegang Sehingga Tidak Perlu Menggunakan Sarung Tangan. Modelnya Sekop Kecil. Tahan Air. Sekop Gabung Dengan Gagangnya Sehingga Tidak Akan lepas. Bahannya Terbuat Dari Serat Nilon Sehingga Lembut Ditangan

                Berat Bersih: 106 gram',
                'referensi' => 'https://www.tokopedia.com/adeliahnl/sekop-gland-05-001-trowel-plastic-handle',
            ],
            [
                'foto' => '',
                'nama_barang' => 'Pupuk Organik Cair Hayati Bioaktivator Bio7 Kentang Horti',
                'harga' => 86.500,
                'deskripsi' => 'MerokeMAG-S merupakan pupuk larut air yang mengandung Magnesium (Mg) dan Sulfur (S), menjadi pilihan yang sesuai untuk tanaman hortikultura secara luas. Kelarutannya di air sangat cepat. MerokeMAG-S dengan kandungan rasio Magnesium dan Sulfur yang seimbang dapat meningkatkan fungsi enzim, sintesa protein dan pembentukan umbi sehingga hasil panen dan kualitas meningkat serta memperkaya rasa dan warna. MerokeMAG-S Sesuai diaplikasikan pada semua sistem fertigasi seperti hidroponik, sistem drip/tetes, sprinkel, sistem pivot, atau pun dengan penyemprotan sebagai foliar. MerokeMAG-S berperan sebagai suplemen jika diaplikasikan pada tanah untuk mencegah defisiensi Mg pada tanaman.

                Kandungan MerokeMAG-S:
                - Magnesium Oksida (MgO) 16,0 %
                - Sulfur Trioksida (SO3) 32,5 %
                
                Berat Bersih: 25000 gram',
                'referensi' => 'https://www.tokopedia.com/hilastrendy/restock-pupuk-organik-cair-hayati-bioaktivator-bio7-kentang-horti-1?extParam=ivf%3Dfalse%26src%3Dsearch&refined=true'
            ],
            [
                'foto' => '',
                'nama_barang' => 'Pupuk Pemacu Buah Jambu Berbuah diluar Musim Paclobutrazol Plus',
                'harga' => 35.000,
                'deskripsi' => 'Kami Sediakan Pupuk Nutrisi Paclo Plus
                Khusus untuk pembuahan & Pembungaan diluar Musim
                Cocok untuk segala tanaman Buah
                Durian, Mangga, Jambu, Sawo, Jeruk Dll..
                
                Spesifikasi :
                1. Kemasan : 50 ml
                2. Aplikasi : 1 tutup botol untuk 5 Liter air,
                disemprotkan ke daun & disiramkan ke Akar
                3. Waktu Aplikasi : 2 Minggu sekali, Ulangi sampai 4 kali Aplikasi
                4. Mengandung Mikroba PGPR untuk mempercepat penyerapan nutrisi melalui Perakaran
                5. Paclobutrazol Plus 50%, Membuat Tanaman berbuah di luar Musim
                
                Berat Bersih: 100 gram',
                'referensi' => 'https://www.tokopedia.com/herbalterapi/pupuk-pemacu-buah-durian-jambu-berbuah-diluar-musim-paclobutrazol-plus?extParam=ivf%3Dfalse%26src%3Dsearch'
            ]

        ];


        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
