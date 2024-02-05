<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Registration;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Data guru --------------------------------------------------------------------------------
        User::create([
            'name' => 'Sri Ratna Chodijah, M.Pd.',
            'username' => 'sriratna',
            'image' => '',
            'email' => 'sriratna@gmail.com',
            'position' => 'Pengawas',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Choerunnisa, S.Psi.',
            'username' => 'choerunnisa',
            'image' => '',
            'email' => 'choerunnisa@gmail.com',
            'position' => 'Konselor',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Chandra Wahyuni, S.Pd.',
            'username' => 'chandrawahyuni',
            'image' => 'chandra.jpg',
            'email' => 'chandra@gmail.com',
            'position' => 'Kepala TK',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'Darti, S.Pd.',
            'username' => 'darti',
            'image' => '',
            'email' => 'darti@gmail.com',
            'position' => 'PKS',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Ane Januarti Dewi',
            'username' => 'anejanuarti',
            'image' => 'ane.jpg',
            'email' => 'anejanuarti@gmail.com',
            'position' => 'Bendahara',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Iis Halimah, S.Pd.',
            'username' => 'iishalimah',
            'image' => 'iis.jpg',
            'email' => 'iishalimah@gmail.com',
            'position' => 'Guru Kober',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Ria Komalasari',
            'username' => 'riakomalasari',
            'image' => 'ria.jpg',
            'email' => 'riakomalasari@gmail.com',
            'position' => 'Guru Kober',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Trya Febrianty, S.Pd.',
            'username' => 'tryafebrianty',
            'image' => 'trya.jpg',
            'email' => 'tryafebrianty@gmail.com',
            'position' => 'Guru Kelas A',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'Tita Alita Sadariyah, S.Pd.',
            'username' => 'titaalita',
            'image' => 'tita.jpg',
            'email' => 'titaalita@gmail.com',
            'position' => 'Guru Kelas A',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Fithri Wihdah. H, S.Pd.',
            'username' => 'fithriwihdah',
            'image' => 'fithri.jpg',
            'email' => 'fithriwihdah@gmail.com',
            'position' => 'Guru Kelas B1',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Haryanti',
            'username' => 'haryanti',
            'image' => 'haryanti.jpg',
            'email' => 'haryanti@gmail.com',
            'position' => 'Guru Kelas B1',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Sumiati, S.Pd.I',
            'username' => 'sumiati',
            'image' => 'sumiati.jpg',
            'email' => 'sumiati@gmail.com',
            'position' => 'Guru Kelas B2',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Yuhanah, S.Pd.',
            'username' => 'yuhanah',
            'image' => 'yuhanah.jpg',
            'email' => 'yuhanah@gmail.com',
            'position' => 'Guru Kelas B2',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Pudjianto Usman',
            'username' => 'pudjiantousman',
            'image' => '',
            'email' => 'pudjianto@gmail.com',
            'position' => 'Petugas Keamanan',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Elin Herlina',
            'username' => 'elinherlina',
            'image' => '',
            'email' => 'elinherlina@gmail.com',
            'position' => 'Petugas Catering',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'Mini Maryani',
            'username' => 'minimaryani',
            'image' => 'mini.jpg',
            'email' => 'minimaryani@gmail.com',
            'position' => 'Petugas Kebersihan',
            'password' => bcrypt('password'),
            'is_active' => 1,
            'is_admin' => 0,
        ]);

        // Data kategori ---------------------------------------------------------------------------
        Category::create([
            'name' => 'Kegiatan',
            'slug' => 'kegiatan'
        ]);

        Category::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi'
        ]);

        // Data informasi ---------------------------------------------------------------------------
        Post::create([
            'title' => 'Trial Class',
            'slug' => 'trial-class',
            'image' => 'trial class.jpg',
            'excerpt' => 'Tanggal 4 dan 5 Maret 2022 kemarin kami mengadakan acara trial class lho..ayo siapa yang putra/putrinya ikutan?🤭🥰&nbsp;Trial class tahun ini mengusung tema tentang binatang peliharaan dengan judul "Mi...',
            'body' => '<div>Tanggal 4 dan 5 Maret 2022 kemarin kami mengadakan acara trial class lho..ayo siapa yang putra/putrinya ikutan?🤭🥰<br>&nbsp;<br>Trial class tahun ini mengusung tema tentang binatang peliharaan dengan judul "Misteri makanan Kici".<br>&nbsp;<br>Disini semua peserta trial class diajak berpetualang mengenal lebih jauh tentang kelinci sekaligus mengajak peserta trial class semua untuk peduli dengan lingkungan sekitar terutama hutan sebagai habitat para hewan.<br>waahh ...pokoknya seru deh ayah/bunda. Soalnya rangkaian acara trial class kali ini dilakukan secara online dan offline.&nbsp;</div>',
            'category_id' => '1',
            'user_id' => '1'
        ]);

        Post::create([
            'title' => 'Lomba Antar TK',
            'slug' => 'lomba-antar-tk',
            'image' => 'lomba antar tk.jpg',
            'excerpt' => 'Alhamdulillah pada ajang lomba antar TK se Bandung Raya yang diselenggarakan oleh SD Terpadu Krida Nusantara pada bulan November 2021, siswa siswi TKIT Luqmanul Hakim mendapatkan kesempatan menjadi ju...',
            'body' => '<div>Alhamdulillah pada ajang lomba antar TK se Bandung Raya yang diselenggarakan oleh SD Terpadu Krida Nusantara pada bulan November 2021, siswa siswi TKIT Luqmanul Hakim mendapatkan kesempatan menjadi juara :<br>- Juara 1 lomba tahfizh<br>- Juara 2 lomba tahfizh<br>- Juara harapan 1 lomba tahfizh<br>- Juara harapan 1 lomba adzan<br>&nbsp;<br>Selamat kepada anak2, semoga semakin menambah motivasi dan semangat untuk menambah hafalan, berkarya dan berprestasi&nbsp;</div>',
            'category_id' => '2',
            'user_id' => '2'
        ]);

        Post::create([
            'title' => 'Akreditasi',
            'slug' => 'akreditasi',
            'image' => 'akreditasi.jpg',
            'excerpt' => 'Setelah melewati serangkaian tes seleksi, TKIT Luqmanul Hakim terpilih sebagai Satuan Pendidikan Pelaksana Program Sekolah Penggerak Angkatan II.Kami bersyukur atas kesempatan ini. Semoga melalui prog...',
            'body' => '<div>Setelah melewati serangkaian tes seleksi, TKIT Luqmanul Hakim terpilih sebagai Satuan Pendidikan Pelaksana Program Sekolah Penggerak Angkatan II.<br>Kami bersyukur atas kesempatan ini. Semoga melalui program ini, kami dapat memberikan pendidikan yang lebih baik untuk membantu perkembangan anak-anak didik kami tercinta.</div>',
            'category_id' => '2',
            'user_id' => '3'
        ]);

        Post::create([
            'title' => 'Tamat Ummi',
            'slug' => 'tamat-ummi',
            'image' => 'tamat ummi.jpg',
            'excerpt' => 'Selamat untuk siswa-siswi yang telah menamatkan Ummi jilid 6.Semoga terus istiqamah bersama Al-Quran',
            'body' => '<div>Selamat untuk siswa-siswi yang telah menamatkan Ummi jilid 6.</div><div>Semoga terus istiqamah bersama Al-Quran<br><br></div>',
            'category_id' => '1',
            'user_id' => '1'
        ]);

        // Data aktivitas ---------------------------------------------------------------------------
        Activity::create([
            'title' => 'Ifthar Jamai',
            'slug' => 'ifthar-jama-i',
            'image' => 'ifthar jamai.jpg',
            'excerpt' => 'Menutup rangkaian program Ramadhan 1443 H kemarin, telah dilaksanakan Ifthar Jamai bagi siswa KB dan TKIT Luqmanul Hakim.Acara yang dilaksanakan tgl 21 April 2022 ini dimeriahkan oleh Ka Herman, yang...',
            'body' => '<div>Menutup rangkaian program Ramadhan 1443 H kemarin, telah dilaksanakan Ifthar Jamai bagi siswa KB dan TKIT Luqmanul Hakim.<br>Acara yang dilaksanakan tgl 21 April 2022 ini dimeriahkan oleh Ka Herman, yang menghibur anak-anak melalui dongeng nya sambil menunggu waktu berbuka.&nbsp;</div>'
        ]);

        Activity::create([
            'title' => 'Pengabdian Masyarakat',
            'slug' => 'pengabdian-masyarakat',
            'image' => 'pengabdian masyarakat.jpg',
            'excerpt' => 'Alhamdulillah pada tanggal 22 April 2022, telah tersalurkan kepada warga sekitar sekolah yang berhak sebanyak 52 paket sembako dan 74 paket anak yang terkumpul dari donasi ayah bunda orang tua siswa K...',
            'body' => '<div>Alhamdulillah pada tanggal 22 April 2022, telah tersalurkan kepada warga sekitar sekolah yang berhak sebanyak 52 paket sembako dan 74 paket anak yang terkumpul dari donasi ayah bunda orang tua siswa Kober &amp; TKIT Luqmanul Hakim.<br>&nbsp;<br>Kami mengucapkan terima kasih banyak atas kerjasama dan partisipasi ayah bunda semua, semoga rizki yang diberikan mendapat balasan berlipat dari Allah SWT. Amiin</div>'
        ]);

        Activity::create([
            'title' => 'Field Trip',
            'slug' => 'field-trip',
            'image' => 'field trip.jpg',
            'excerpt' => 'Alhamdulillah akhirnya kita field trip offline lagi..&nbsp;Field trip kali pertama ini ke Bandung zoological Garden. Disini semuanya seru-seruan dengan teman dan ibu guru. Berlari, tertawa dan tentuny...',
            'body' => '<div>Alhamdulillah akhirnya kita field trip offline lagi..<br>&nbsp;<br>Field trip kali pertama ini ke Bandung zoological Garden. Disini semuanya seru-seruan dengan teman dan ibu guru. Berlari, tertawa dan tentunya melihat berbagai satwa ciptaan Allah subhanallah wa taala..<br>&nbsp;<br>Wah..maasyaallah ciptaan Allah sungguh luar biasa.&nbsp;</div>'
        ]);

        // Data program ---------------------------------------------------------------------------
        Program::create([
            'title' => 'TTQ Ummi',
            'slug' => 'ttq-ummi',
            'image' => 'ttq ummi.jpg',
            'excerpt' => 'TTQ ummi merupakan kegiatan rutin yang diadakan di sekolah...',
            'body' => '<div>TTQ ummi merupakan kegiatan rutin yang diadakan di sekolah</div>'
        ]);

        Program::create([
            'title' => 'Sentra',
            'slug' => 'sentra',
            'image' => 'sentra.jpg',
            'excerpt' => 'Sentra Persiapan, Sentra IMTAQ (Iman dan Taqwa), Sentra Balok, Sentra Main Peran...',
            'body' => '<div>1. Sentra Persiapan</div><div>2. Sentra IMTAQ (Iman dan Taqwa)</div><div>3. Sentra Balok</div><div>4. Sentra Main Peran</div><div>5. Sentra Bahan Alam</div><div>6. Sentra MOT (Musik dan Olah Tubuh)</div><div>7. Sentra Seni</div>'
        ]);

        Program::create([
            'title' => 'Inkul (intrakurikuler)',
            'slug' => 'inkul-intrakurikuler',
            'image' => 'inkul.jpg',
            'excerpt' => 'Futsal, Angklung, Perkusi...',
            'body' => '<div>1. Futsal</div><div>2. Angklung</div><div>3. Perkusi</div><div>4. Gerak dan Lagu</div><div>5. Mobis</div>'
        ]);

        // Data testimoni ---------------------------------------------------------------------------
        Testimonial::create([
            'name' => 'Chandra Wahyuni, S.Pd.',
            'status' => 'Kepala TK',
            'image' => 'chandra.jpg',
            'body' => 'Mengajar disini sangat asyik dan seru'
        ]);

        Testimonial::create([
            'name' => 'Ane Januarti Dewi',
            'status' => 'Bendahara',
            'image' => 'ane.jpg',
            'body' => 'Mengajar disini sangat asyik dan seru'
        ]);

        Testimonial::create([
            'name' => 'Trya Febrianty, S.Pd.',
            'status' => 'Guru Kelas A',
            'image' => 'trya.jpg',
            'body' => 'Mengajar disini sangat asyik dan seru'
        ]);

        Testimonial::create([
            'name' => 'Ria Komalasari',
            'status' => 'Guru Kober',
            'image' => 'ria.jpg',
            'body' => 'Mengajar disini sangat asyik dan seru'
        ]);

        Testimonial::create([
            'name' => 'Fithri Wihdah. H, S.Pd.',
            'status' => 'Guru Kelas B1',
            'image' => 'fithri.jpg',
            'body' => 'Mengajar disini sangat asyik dan seru'
        ]);

        Profile::factory(1)->create();
        Registration::factory(1)->create();
        // User::factory(10)->create();
        // Post::factory(20)->create();
        // Activity::factory(5)->create();
        // Program::factory(5)->create();
        // Testimonial::factory(5)->create();
    }
}
