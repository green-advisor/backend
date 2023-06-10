<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plants =
            [
                [
                    'nama_tanaman' => 'Teh',
                    'deskripsi' => 'Teh (Camellia sinensis) termasuk ke dalam jenis tanaman perdu dari famili Theaceae. Tanaman ini dapat tumbuh di daerah dengan iklim tropis, khususnya pada zona iklim
                    sedang pada ketinggian 700 sampai dengan 1500 meter di atas permukaan air laut. Ciri fisik tanaman teh yaitu memiliki batang yang berkayu, tegak, bercabang, serta memiliki
                    rambut halus pada ujung ranting dan daun mudanya. Pucuk muda daun teh biasanya dimanfaatkan sebagai bahan utama untuk membuat tanaman teh. Dengann khasiat dan
                    kenikmatannya, teh menjadi minuman yang paling populer di dunia sejak ribuan tahun yang lalu.',
                    'cara_perawatan' => '1. Faktor Iklim Dalam membudidayakan tanaman teh, terdapat beberapa faktor iklim yang harus diperhatikan, diantaranya adalah kelembapan relatif pada siang hari yang harus lebih dari 70%, temperatur udara pada rentang 13
                    sampai dengan 25 derajat celcius, serta curah hujan tahunan minimal 2000 mm. 2. Penyiangan Gulma di sekitar tanaman teh harus dikendalikan. Pengendalian gulma ini dapat dilakukan baik dengan teknik mekanis maupun kimiawi. Untuk perkebunan teh muda, pengendalian gulma dapat dilakukan dengan teknik mekanis. Disamping itu, pengendalian gulma dengan teknik kimiawi lebih umum digunakan di perkebunan teh dengan menggunakan herbisida. 3. Pemupukan
                    Jenis pupuk yang dapat digunakan yaitu Urea/Za dengan dosis 250-350 kg/ha/th (3-4 kali setahun), TSP dengan dosis 60-120 kg/ha/th (1-2 kali setahun) untuk perkebunan teh dengan tanah regosol atau andosol
                    serta 15-40 kg/ha/th (1-2 kali setahun) untuk tanah podsolik atau latsol, ZK dengan dosis 60-180 kg/ha/th (2-3
                    kali setahun), Kieserit dengan dosis 30-75 kg/ha/th (2-3 kali setahun), serta seng sulfat dengan dosis 5-10
                    kg/ha/th (7-10 kali setahun). 3. Pengendalian Hama Hama yang paling umum menyerang tanaman teh yaitu wereng pucuk teh atau Empoasca sp. Hama ini menghisap daun teh dan menyebabkan bagian tepi daun teh menjadi layu dan keriting. Cara mengendalikan hama ini yaitu dengan menanam benih yang sehat, peningkatan kualitas sanitasi kebun, penanaman
                    intercrop, pemupukan dengan KCL sebanyak 150 kg/ha/th, serta menggunakan insektisida dan pestisida nabati dengan bahan aktif azadirachtin. 4. Panen Panen pucuk teh dapat dilakukan selama periode vegetasi tanaman baru. Proses panen teh membutuhkan
                    tenaga kerja yang memiliki keahlian khusus dan memakan banyak energi, waktu, dan kerja keras.
                    ',
                    'referensi' => '- https://www.researchgate.net/publication/357027441_Budidaya_Tanaman_Teh
                    - https://krcibodas.brin.go.id/tanaman-teh-camellia-sinensis/
                    - https://blog.agromaret.com/2018/07/budidaya-pertanian-berdasarkan-ketinggian-tempat
                    - http://cybex.pertanian.go.id/mobile/artikel/92990/Pemupukan-pada-Tanaman-Teh/
                    - https://ditjenbun.pertanian.go.id/wereng-pucuk-teh-serangga-kecil-yang-membuat-petani-teh-frustasi/',
                ], [
                    'nama_tanaman' => 'Jagung',
                    'deskripsi' => 'Jagung (Zea mays) merupakan jenis tanaman dari famili Graminaceae. Selain itu, jagung termasuk ke dalam jenis
                    rumput-rumputan dengan biji tunggal atau monokotil. Jagung dapat tumbuh di daerah dengan iklim tropis pada zona iklim panas dengan ketinggian pada rentang 0-700 meter di atas permukaan air laut. Masyarakat Indonesia biasanya membudidayakan jagung hibrida dengan kualitas unggul. Selain itu, waktu penanaman jagung termasuk pendek, di mana jagung dapat dipanen dengan usia kurang lebih 3 bulan',
                    'cara_perawatan' => '1. Faktor Iklim
                    Jagung dapat tumbuh dengan baik jika terdapat penyinaran matahari minimal 8 jam setiap hari dengan
                    temperatur udara berkisar antara 20-33 derajat celcius. Selain itu, jagung dapat tumbuh dengan curah hujan
                    sedang dan ph tanah berkisar antara 5,5 -7. 2. Penyiangan Pengendalian gulma di sekitar tanaman jagung harus dilakukan, seperti rumput-rumputan, keladi, serta gulma
                    lainnya. 3. Pemupukan Pupuk yang dapat diberikan untuk tanaman jagung yaitu Urea dengan dosis 350 kg/ha, KCl sebanyak 100
                    kg/ha, serta SP-36 dengan dosis 200 kg/ha. 4. Pengendalian Hama Hama yang biasa menyerang jagung adalah lalat bibit dan penggerek tongkol. Lalat bibit menyebabkan daun menjadi kuning dengan ciri terdapat gigitan di sekitar daun. Hama ini dapat dikendalikan dengan memberikan
                    insektisida seperti Marshal 25 ST. Sementara itu, penggerek tongkol dapat menyebabkan jagung menjadi
                    layu, tidak berkembang, dan mati. Hama ini dapat dikendalikan dengan memberikan insektisida cair atau butiran pada pucuk saat jagung berusia 4 minggu. 5. Panen
                    Jagung dapat dipanen ketika daun klobotnya sudah mulai mengering dan berwarna coklat.
                    ',
                    'referensi' => '- http://cybex.pertanian.go.id/mobile/artikel/82006/BUDIDAYA-TANAMAN-JAGUNG/
                    - http://repository.poltekkes-denpasar.ac.id/570/3/BAB%20II.pdf
                    - http://cybex.pertanian.go.id/mobile/artikel/89931/MEMUPUK-TANAMAN-JAGUNG-YANG-BAIK-DAN-BENAR/
                    - http://cybex.pertanian.go.id/mobile/artikel/85141/Pengendalian-Hama-dan-Penyakit-pada-Tanaman-Jagung/#:~:
                    text=Pengendalian%3A%20(1)%20penerapan%20pergiliran,saat%20tanaman%20berumur%204%20minggu.
                    ',
                ], [
                    'nama_tanaman' => 'Kopi',
                    'deskripsi' => 'Kopi (Coffea sp.) adalah jenis tanaman yang berasal dari
                    famili Rubiaceae. Kopi termasuk komoditas yang umum diperdagangkan di Indonesia dan menjadi sumber pendapatan bagi 1,84 juta penduduk di pedesaan. Spesies
                    kopi yang umum dibudidayakan yaitu Kopi Robusta (Coffea
                    canephora), Kopi Arabika (Coffea arabica), serta Kopi Liberika (Coffea liberica). Tanaman ini dapat tumbuh dengan baik di daerah dengan iklim tropis pada zona iklim sedang, dengan ketinggian 700-1500 mdpl. Kopi dapat melakukan penyerbukan sendiri atau self fertile, dan biasanya terjadi
                    setelah musim hujan. Selain itu, keberhasilan budidaya kopi
                    sangat dipengaruhi oleh faktor iklim.
                    ',
                    'cara_perawatan' => '1. Faktor Iklim
                    Kopi tumbuh dengan baik di zona iklim topis sedang dengan temperatur udara berkisar antara 15-25 derajat
                    celcius. Selain itu, tingkat curah hujan pada lahan budidaya kopi berkisar antara 1250 sampai dengan 2500 mm/tahun. 2. Penyiangan Saat tanaman kopi masih berusia muda, tanaman kopi harus sellau bersih dari berbagai jenis gulma. Penyiangan dapat dilakukan setiap dua minggu. Namun, jika tanaman kopi sudah berusia dewasa, penyiangan dapat dilakukan hanya jika diperlukan. 3. Pemupukan Pupuk yang dapat diberikan pada tanaman kopi yaitu urea, KCl, SP-36, serta kieserit. 4. Pengendalian Hama Hama yang paling umum menyerang tanaman kopi yaitu hama penggerek buah kopi. Hama ini menyebabakan gugurnya daun, perkembangan buah yang tidak normal, serta terjadinya pembusukan pada buah. Hama ini dapat dikendalikan dengan meningkatkan kualitas sanitasi kebun, panen buah yang terserang hama, dan penyemprotan bahan kimia. 5. Panen Buah kopi dapat dipanen dari pohonnya saat berusia 2,5 sampai dengan 3 tahun. Buah kopi dapat dipanen dengan cara dipetik. Buah yang matang ditandai dengan warnanya, jika berwarna kuning artinya buah sudah
                    setengah masak, merah berarti sudah masak, dan kehitaman berarti masa panen yang terlewat.',
                    'referensi' => '- https://wanaswara.com/tanaman-kopi-pengertian-jenis-budidaya/
                    - http://cybex.pertanian.go.id/mobile/artikel/89827/Budidaya-Tanaman-Kopi/
                    - http://cybex.pertanian.go.id/mobile/artikel/90787/PANEN-DAN-PASCAPANEN-KOPI/',
                ], [
                    'nama_tanaman' => 'Pisang',
                    'deskripsi' => 'Nama: Pisang Nama ilmiah: Musa acuminata Keluarga: Musaceae Asal: Asia Tenggara Deskripsi: Pisang adalah buah yang memanjang dan dapat dimakan yang tumbuh bergerombol di pohon pisang. Buahnya bervariasi dalam ukuran, warna, dan
                    kekencangannya, tetapi biasanya memanjang dan melengkung, dengan daging buah yang lembut dan kaya akan pati yang dilapisi kulit buah, yang bisa berwarna hijau,
                    kuning, merah, ungu, atau coklat saat matang. Buahnya
                    tumbuh ke atas dalam kelompok di dekat bagian atas
                    tanaman. Hampir semua pisang tanpa biji (partenokarp) modern yang dapat dimakan berasal dari dua spesies liar - Musa acuminata dan Musa balbisiana. Budidaya: Pisang adalah tanaman tropis yang membutuhkan kondisi hangat dan lembab untuk tumbuh. Pisang dapat ditanam dari biji atau dari anakan, yaitu tunas
                    yang muncul dari rimpang tanaman. Pisang biasanya ditanam pada musim semi atau musim gugur, dan membutuhkan waktu sekitar 9 bulan untuk matang. Nilai gizi: Pisang merupakan sumber potasium, vitamin C, dan vitamin B6 yang baik. Mereka juga merupakan sumber
                    serat makanan yang baik. Manfaat kesehatan: Pisang adalah buah yang sehat dan
                    serbaguna yang dapat dinikmati dengan berbagai cara. Mereka adalah sumber potasium yang baik, yang penting untuk kesehatan jantung. Pisang juga merupakan sumber
                    vitamin C yang baik, yang merupakan antioksidan yang dapat membantu meningkatkan sistem kekebalan tubuh. Pisang juga merupakan sumber serat makanan yang baik,
                    yang dapat membantu meningkatkan kesehatan pencernaan. Kegunaan: Pisang dapat dimakan segar, dimasak, atau dipanggang. Mereka juga dapat digunakan untuk membuat
                    smoothie, jus, dan makanan penutup. Hama dan penyakit: Pisang rentan terhadap sejumlah hama dan penyakit, termasuk kutu daun pisang, virus pisang bergerombol, dan bercak daun pisang. Penyimpanan: Pisang dapat disimpan pada suhu kamar
                    selama beberapa hari. Mereka juga dapat disimpan di lemari es hingga seminggu.',
                    'cara_perawatan' => '1. Kondisi Tumbuh
                    Tanaman pisang tumbuh subur di iklim yang hangat dan lembab. Mereka membutuhkan sinar matahari penuh, setidaknya 6 jam per hari. Tanah yang ideal memiliki drainase yang baik dan kaya akan bahan organik. Tanaman pisang rentan terhadap kerusakan akibat cuaca dingin, sehingga sebaiknya ditanam di daerah yang
                    tidak mengalami musim dingin.
                    2. Pengairan
                    Tanaman pisang membutuhkan penyiraman secara teratur, terutama selama musim tanam. Tanah harus dijaga agar tetap lembab tetapi tidak basah. Pada musim dingin, tanaman pisang membutuhkan lebih sedikit air.
                    3. Pupuk
                    Tanaman pisang harus dipupuk secara teratur, terutama selama musim tanam. Gunakan pupuk yang seimbang, seperti pupuk 10-10-10. Lakukan pemupukan setiap 2-4 minggu.
                    4. Hama dan Penyakit
                    Tanaman pisang rentan terhadap berbagai hama dan penyakit. Beberapa hama yang umum termasuk serangga sisik, kutu putih, dan kutu daun. Beberapa penyakit yang umum terjadi adalah bercak daun pisang, karat pisang, dan layu pisang.
                    Jika Anda melihat adanya hama atau penyakit, segera obati untuk mencegah penyebarannya.
                    5. Pemangkasan
                    Tanaman pisang tidak perlu dipangkas secara teratur. Namun, Anda mungkin ingin membuang daun-daun yang mati atau rusak. Anda juga dapat membuang tanaman pengisap yang tumbuh dari pangkal tanaman.
                    6. Pemanenan
                    Tanaman pisang siap dipanen ketika buahnya sudah berwarna kuning dan montok. Potong tandan pisang dari tanaman dengan pisau tajam. Pisang akan terus matang pada suhu ruangan.
                    7. Tips
                    Mulsa di sekitar pangkal tanaman untuk membantu menjaga kelembapan dan menekan gulma. Lindungi tanaman dari angin kencang dan suhu dingin. Siram tanaman dalam-dalam dan jarang untuk menghindari pembusukan akar. Pupuk tanaman secara teratur selama musim tanam. Pantau tanaman dari hama dan penyakit dan segera obati jika perlu. Panenlah pisang ketika sudah matang.',
                    'referensi' => '',
                ], [
                    'nama_tanaman' => 'Mangga',
                    'deskripsi' => 'Nama: Mangga Nama ilmiah: Mangifera indica Keluarga: Anacardiaceae Asal: India Deskripsi: Mangga adalah buah besar dan berdaging yang
                    tumbuh di pohon cemara. Buahnya lonjong atau berbentuk ginjal, dengan kulit yang halus, berwarna kuning kehijauan atau merah. Daging buahnya berwarna oranye atau kuning, dan berair serta manis. Mangga merupakan sumber vitamin A dan C yang baik, dan juga mengandung serat. Budidaya: Pohon mangga dapat tumbuh setinggi 100 kaki, dan dapat hidup selama ratusan tahun. Mereka berasal dari daerah tropis dan subtropis, tetapi mereka juga dapat
                    tumbuh di daerah beriklim hangat. Pohon mangga membutuhkan sinar matahari penuh dan tanah yang dikeringkan dengan baik. Mereka rentan terhadap sejumlah hama dan penyakit, jadi penting untuk menanamnya di lokasi
                    yang terlindungi. Nilai gizi: Mangga adalah sumber vitamin A dan C yang baik, dan juga mengandung serat. Vitamin A penting untuk penglihatan, dan vitamin C merupakan antioksidan yang dapat membantu meningkatkan sistem kekebalan tubuh. Serat penting untuk kesehatan pencernaan. Manfaat kesehatan: Mangga adalah buah yang sehat dan
                    serbaguna yang dapat dinikmati dengan berbagai cara. Mereka adalah sumber vitamin A dan C yang baik, yang penting untuk kesehatan secara keseluruhan. Mangga juga merupakan sumber serat yang baik, yang dapat membantu meningkatkan kesehatan pencernaan. Mangga juga dapat membantu meningkatkan kesehatan jantung, meningkatkan
                    sistem kekebalan tubuh, dan melindungi dari kanker. Penggunaan: Mangga dapat dimakan segar, dimasak, atau dipanggang. Mereka juga dapat digunakan untuk membuat
                    smoothie, jus, dan makanan penutup. Mangga adalah bahan
                    yang populer dalam masakan India, dan juga digunakan untuk membuat chutney dan acar. Hama dan penyakit: Pohon mangga rentan terhadap
                    sejumlah hama dan penyakit, termasuk kutu daun, kutu putih, serangga sisik, dan tungau laba-laba. Mereka juga
                    rentan terhadap sejumlah penyakit, termasuk bercak daun mangga, antraknosa mangga, dan malformasi mangga. Penyimpanan: Mangga dapat disimpan pada suhu ruangan
                    selama beberapa hari. Mereka juga dapat disimpan di lemari es hingga seminggu.',
                    'cara_perawatan' => '1. Kondisi Tumbuh
                    Pohon mangga tumbuh subur di iklim yang hangat dan lembab. Mereka membutuhkan sinar matahari penuh,
                    setidaknya 6 jam per hari. Tanah yang ideal memiliki drainase yang baik dan kaya akan bahan organik. Pohon mangga rentan terhadap kerusakan akibat cuaca dingin, jadi sebaiknya ditanam di daerah yang tidak mengalami musim dingin.
                    2. Pengairan
                    Pohon mangga membutuhkan penyiraman secara teratur, terutama selama musim tanam. Tanah harus dijaga agar tetap lembab tapi tidak basah. Pada musim dingin, pohon mangga membutuhkan lebih sedikit air.
                    3. Pemupukan
                    Pohon mangga harus dipupuk secara teratur, terutama selama musim tanam. Gunakan pupuk yang
                    seimbang, seperti pupuk 10-10-10. Lakukan pemupukan setiap 2-4 minggu.
                    4. Hama dan Penyakit
                    Pohon mangga rentan terhadap berbagai hama dan penyakit. Beberapa hama yang umum termasuk
                    serangga sisik, kutu putih, dan kutu daun. Beberapa penyakit yang umum termasuk bercak daun mangga,
                    karat mangga, dan layu mangga. Jika Anda melihat adanya hama atau penyakit, segera obati untuk mencegah penyebarannya.
                    5. Pemangkasan
                    Pohon mangga tidak perlu dipangkas secara teratur. Namun, Anda mungkin ingin membuang daun-daun
                    yang mati atau rusak. Anda juga dapat membuang tanaman pengisap yang tumbuh dari pangkal tanaman.
                    6. Pemanenan
                    Pohon mangga siap dipanen ketika buahnya berwarna kuning dan montok. Potong mangga dari pohonnya dengan pisau yang tajam. Mangga akan terus matang pada suhu ruangan.
                    7. Tips
                    Mulsa di sekitar pangkal pohon untuk membantu menjaga kelembapan dan menekan gulma. Lindungi pohon dari angin kencang dan suhu dingin. Siram pohon dengan dalam dan jarang untuk menghindari pembusukan akar. Beri pupuk secara teratur selama musim tanam. Pantau pohon dari hama dan penyakit dan segera obati
                    jika perlu. Panenlah mangga ketika sudah matang.',
                    'referensi' => '',
                ], [
                    'nama_tanaman' => 'Padi',
                    'deskripsi' => 'Nama: Padi Nama ilmiah: Oryza sativa Keluarga: Poaceae Asal: Asia Deskripsi: Padi adalah jenis padi yang ditanam di air. Tanaman ini adalah rumput yang tumbuh setinggi sekitar 1 meter. Daunnya panjang dan sempit, dan bunganya kecil dan berwarna putih. Bijinya, atau gabah, terbungkus sekam. Budidaya: Padi adalah tanaman tropis yang membutuhkan
                    kondisi hangat dan lembab untuk tumbuh. Biasanya ditanam pada musim semi atau musim gugur, dan membutuhkan waktu sekitar 3-4 bulan untuk menjadi matang. Padi ditanam di ladang yang tergenang air, dan air membantu menjaga
                    tanah tetap lembab dan gulma terkendali. Nilai gizi: Padi merupakan sumber karbohidrat, protein, dan
                    serat yang baik. Padi juga merupakan sumber vitamin dan mineral yang baik, termasuk thiamin, riboflavin, niasin,
                    vitamin B6, folat, zat besi, magnesium, dan seng. Manfaat kesehatan: Padi adalah makanan sehat dan
                    serbaguna yang dapat dinikmati dengan berbagai cara. Padi merupakan sumber energi yang baik, dan dapat membantu meningkatkan kesehatan pencernaan. Padi juga dapat membantu menurunkan tekanan darah dan kadar kolesterol. Penggunaan: Padi dapat dimakan segar, dimasak, atau diolah menjadi tepung. Padi merupakan makanan pokok di berbagai belahan dunia, dan digunakan untuk membuat berbagai macam hidangan, termasuk kue beras, bubur beras, dan bihun. Hama dan penyakit: Padi rentan terhadap sejumlah hama dan penyakit, termasuk serangga, jamur, dan bakteri. Beberapa hama yang paling umum menyerang padi adalah penggerek batang, wereng, dan kutu beras. Beberapa penyakit yang paling umum menyerang padi adalah penyakit blas, hawar daun padi, dan virus tungro. Penyimpanan: Padi dapat disimpan selama beberapa bulan pada suhu ruangan. Penting untuk menyimpan padi di
                    tempat yang sejuk dan kering agar tidak berjamur.
                    ',
                    'cara_perawatan' => '1. Kondisi Tumbuh
                    Padi adalah tanaman tropis yang membutuhkan suhu hangat dan banyak sinar matahari. Tanaman ini juga
                    rentan terhadap cuaca dingin, jadi penting untuk menanamnya di daerah yang beriklim hangat. Suhu ideal untuk menanam padi adalah antara 20 dan 30 derajat Celcius. Padi juga membutuhkan banyak air. Tanah harus dijaga agar tetap lembab setiap saat, dan padi harus digenangi air setidaknya selama sebagian dari siklus pertumbuhannya. Padi tumbuh paling baik di tanah lempung atau tanah liat. Tanah-tanah ini mampu menahan kelembapan dengan baik dan memiliki drainase yang baik.
                    2. Persiapan Tanah
                    Tanah harus dipersiapkan sebelum menanam padi. Tanah harus diratakan dan drainasenya harus diperbaiki. Tanah juga harus dipupuk dengan pupuk yang seimbang. Tanah harus digarap hingga kedalaman 6-8 inci. Hal ini akan membantu meningkatkan drainase dan aerasi
                    tanah. Tanah harus diuji untuk mengetahui kadar unsur hara. Tanah harus dipupuk dengan pupuk yang seimbang,
                    seperti pupuk 10-10-10.
                    3. Penanaman
                    Padi ditanam pada musim semi atau musim panas. Padi harus ditanam ketika suhu tanah setidaknya 20 derajat Celcius. Padi harus ditanam dalam barisan dengan jarak 12-18 inci. Benih harus ditanam sedalam 1-2 inci. Padi harus segera disiram setelah ditanam.
                    4. Pemupukan
                    Padi harus dipupuk secara teratur. Padi harus dipupuk setiap 2-4 minggu dengan pupuk yang seimbang.
                    Jumlah pupuk yang dibutuhkan akan tergantung pada kesuburan tanah dan pertumbuhan padi.
                    5. Pengairan
                    Padi membutuhkan banyak air. Tanah harus dijaga agar tetap lembab setiap saat. Padi harus digenangi air
                    setidaknya selama sebagian dari siklus pertumbuhannya. Padi harus disiram dalam-dalam dan jarang disiram. Hal ini akan membantu mencegah akar membusuk.
                    6. Pengendalian Gulma
                    Gulma dapat bersaing dengan padi untuk mendapatkan air dan nutrisi. Penting untuk mengendalikan gulma untuk memastikan bahwa padi memiliki sumber daya yang dibutuhkan untuk tumbuh. Gulma dapat dikendalikan dengan menyiangi dengan tangan, mencangkul, atau menggunakan herbisida.
                    7. Hama dan Penyakit
                    Padi rentan terhadap berbagai hama dan penyakit. Penting untuk memantau hama dan penyakit pada padi dan segera mengobatinya jika ditemukan. Beberapa hama yang umum menyerang padi termasuk serangga seperti penggerek batang, wereng, dan kutu daun. Beberapa penyakit yang umum menyerang padi antara lain penyakit blas, hawar daun padi, dan virus
                    tungro.
                    8. Panen
                    Padi dipanen pada musim gugur atau musim dingin. Padi dipanen ketika bulirnya sudah matang. Padi dipanen dengan cara memotong batang padi dengan sabit atau mesin pemanen padi. Beras kemudian diirik untuk menghilangkan bulir-bulir padi dari tangkainya. Beras kemudian dikeringkan dan disimpan.
                    9. Tips
                    Lindungi beras dari angin kencang dan suhu dingin. Pantau padi dari hama dan penyakit dan segera obati jika ditemukan. Panenlah padi ketika sudah matang',
                    'referensi' => '',
                ], [
                    'nama_tanaman' => 'Tembakau',
                    'deskripsi' => 'Nama: Tembakau Nama ilmiah: Nicotiana tabacum
                    Keluarga: Solanaceae Asal: Amerika Selatan Deskripsi: Tembakau adalah tanaman tahunan yang
                    tumbuh setinggi 1 hingga 3 meter (3 hingga 10 kaki)
                    dan berbulu lengket di semua bagiannya. Batangnya
                    tebal dan tidak terlalu bercabang. Daunnya bisa lebih
                    dari 50 sentimeter (1 kaki 8 inci) panjangnya dengan
                    bilah berbentuk bulat telur hingga elips, atau lonjong,
                    mengarah ke depan dan, di pangkalnya, menjuntai ke
                    bawah batang atau sesil, menutupi batang.
                    Perbungaan beraroma adalah malai bercabang banyak.
                    Tangkai bunganya memiliki panjang 5 hingga 15
                    milimeter (3⁄16 hingga 9⁄16 inci).
                    Penggunaan: Tembakau digunakan untuk membuat
                    rokok, cerutu, pipa, tembakau, dan tembakau kunyah.
                    Tembakau ini juga digunakan dalam beberapa obat
                    tradisional. Budidaya: Tembakau adalah tanaman yang relatif mudah tumbuh. Tembakau membutuhkan sinar matahari penuh dan tanah yang dikeringkan dengan
                    baik. Tembakau dapat ditanam pada musim semi atau
                    awal musim panas. Benih harus ditanam sedalam
                    sekitar 1 inci dan dengan jarak 6 inci. Tembakau perlu disiram secara teratur, terutama selama musim tanam. Hama dan penyakit: Tembakau rentan terhadap
                    berbagai hama dan penyakit, termasuk ulat pucuk
                    tembakau, penggerek daun tembakau, dan virus
                    mosaik tembakau. Penting untuk memeriksa tanaman
                    tembakau Anda secara teratur untuk mengetahui
                    tanda-tanda hama dan penyakit. Jika Anda melihat ada
                    masalah, Anda dapat mengobatinya dengan pestisida
                    atau fungisida. Manfaat: Tembakau tidak memiliki manfaat yang
                    diketahui. Tembakau adalah obat yang sangat adiktif
                    yang dapat menyebabkan berbagai masalah
                    kesehatan, termasuk kanker, penyakit jantung, dan
                    stroke. Risiko: Penggunaan tembakau adalah penyebab
                    utama kematian yang dapat dicegah di Amerika
                    Serikat. Hal ini bertanggung jawab atas lebih dari
                    480.000 kematian setiap tahunnya. Penggunaan
                    tembakau dapat menyebabkan berbagai masalah
                    kesehatan, termasuk kanker, penyakit jantung, stroke,
                    penyakit paru-paru, dan penyakit paru obstruktif kronik
                    (PPOK). Penggunaan tembakau juga dapat
                    meningkatkan risiko terkena masalah kesehatan
                    lainnya, seperti pneumonia, tuberkulosis, dan beberapa
                    jenis kanker.
                    ',
                    'cara_perawatan' => '1. Kondisi Tumbuh
                    Tanaman tembakau tumbuh subur di iklim yang hangat dan lembab. Mereka membutuhkan sinar
                    matahari penuh, setidaknya 6 jam per hari. Tanah yang ideal memiliki drainase yang baik dan kaya
                    akan bahan organik. Tanaman tembakau rentan terhadap kerusakan akibat cuaca dingin, sehingga
                    harus ditanam di daerah yang tidak mengalami embun beku.
                    2. Pengairan
                    Tanaman tembakau membutuhkan penyiraman secara teratur, terutama selama musim tanam.
                    Tanah harus dijaga agar tetap lembab namun tidak basah. Pada musim dingin, tanaman tembakau membutuhkan lebih sedikit air.
                    3. Pemupukan
                    Tanaman tembakau harus dipupuk secara teratur, terutama selama musim tanam. Gunakan pupuk
                    yang seimbang, seperti pupuk 10-10-10. Lakukan pemupukan setiap 2-4 minggu.
                    4. Hama dan Penyakit
                    Tanaman tembakau rentan terhadap berbagai hama dan penyakit. Beberapa hama yang umum
                    termasuk serangga sisik, kutu putih, dan kutu daun. Beberapa penyakit yang umum termasuk
                    bercak daun tembakau, karat tembakau, dan layu tembakau. Jika Anda menemukan hama atau
                    penyakit, segera obati untuk mencegah penyebarannya.
                    5. Pemangkasan
                    Tanaman tembakau tidak perlu dipangkas secara teratur. Namun, Anda mungkin ingin membuang
                    daun yang mati atau rusak. Anda juga dapat membuang tanaman yang tumbuh dari pangkal
                    tanaman.
                    6. Panen
                    Tanaman tembakau siap dipanen ketika daunnya berwarna hijau tua dan tingginya sekitar 3 kaki.
                    Daun harus dipotong dari tanaman dengan pisau tajam. Daunnya dapat diawetkan dan diasapi atau
                    digunakan untuk membuat produk lain.
                    7. Tips
                    Mulsa di sekitar pangkal tanaman untuk membantu mempertahankan kelembapan dan menekan
                    gulma. Lindungi tanaman dari angin kencang dan suhu dingin. Siram tanaman dalam-dalam dan
                    jarang untuk menghindari pembusukan akar. Pupuk tanaman secara teratur selama musim tanam.
                    Pantau tanaman dari hama dan penyakit dan segera obati jika perlu. Panenlah tembakau ketika
                    sudah matang.',
                    'referensi' => '',
                ],
            ];


            foreach ($plants as $plant) {
                Plant::create($plant);
            }
    }
}
