<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image_satu' => 'image satu.png',
            'image_dua' => 'image dua.jpg',
            'image_tiga' => 'image tiga.jpg',
            'profil' => '<p>Sekolah yang mencoba menerapkan pendekatan penyelenggaraan yang memadukan <b>pendidikan umum</b> dan <b>pendidikan agama</b> menjadi satu jalinan kurikulum. Dengan pendekatan ini, semua bidang pengembangan dan semua kegiatan sekolah tidak lepas dari <b>bingkai ajaran dan pesan nilai Islam.</b></p>',
            'sejarah' => '<p><b>Yayasan Luqmanul Hakim</b> merintis penyelenggaraan lembaga pendidikan formal dengan mendirikan Taman Kanak-kanak Islam Terpadu (TKIT) Luqmanul Hakim pada tahun 1995 dengan konsep pembelajaran fullday. Ada 3 orang tokoh muda yang membidani berdirinya <b>TKIT dan SDIT Luqmanul Hakim</b> saat itu, yaitu: <b>Ir. H. Ridho Budiman Utama, Ir. Arief Setiansyah</b> dan <b>Ir. Triska Hendriawan.</b></p>',
            'visi' => '<p>Terbinanya Generasi <b>Qurani, Cerdas, Pembelajar.</b></p>',
            'misi' =>
            '<p>1. Membingkai setiap aktivitas pendidikan dengan <b>nilai-nilai Al-Quran.</b></p>
            <p>2. Menyelenggarakan pendidikan dan pengajaran yang menyenangkan, aktif, dan kreatif dalam  mengembangkan potensi <b>aqliyah, ruhiyah</b> dan <b>jasadiyah dalam suasana Islami.</b></p>
            <p>3. Membangun kerjasama dengan orang tua siswa dalam mengoptimalkan tumbuh kembang anak.</p>
            <p>4. Menciptakan lingkungan sekolah yang mendukung terwujudnya masyarakat pembelajar.</p>',
            'alamat' => '<p><b>Jl. Parakan Arum No. 17 RT. 01 RW 10</b>
            Kelurahan Batununggal Kecamatan Bandung Kidul 
            Kota Bandung</p>',
            'telp' => '022-7501233',
            'email' => 'tkitlh@gmail.com',
            'whatsapp' => '081222259986',
            'link_whatsapp' => 'https://api.whatsapp.com/send?phone=081222259986',
            'link_facebook' => 'https://www.facebook.com/KoberTKITLuqmanulHakim/',
            'link_instagram' => 'https://www.instagram.com/tkitluqmanulhakim/?hl=en',
            'link_youtube' => 'https://www.youtube.com/channel/UC3bGOIst_doFPx5zu-3Bc-Q',
            'link_embed' => 'https://www.youtube.com/embed/Jfrjeg26Cwk'
        ];
    }
}
