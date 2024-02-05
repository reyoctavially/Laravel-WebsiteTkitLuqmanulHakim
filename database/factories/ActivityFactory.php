<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Pendaftaran Tahun Pelajaran 2022-2023',
            'slug' => 'pendaftaran-tahun-pelajaran-2022-2023',
            'image' => 'registration-images/P157otaPRqi6ekdTuTRGf2HzvKB8ygp01KP3GZ5j.jpg',
            'excerpt' => 'KOBER &amp; TKIT Luqmanul HakimIntegrated Islamic SchoolOpen for Registration!&nbsp;&nbsp;Dibuka pendaftaran Tahun Pelajaran 2022-2023:🏫 Kelompok Bermain:Kelas Alif: Usia 2-3 thnKelas Ba: Usia 3-4 thn...',
            'body' => '<div>KOBER &amp; TKIT Luqmanul Hakim</div><div>Integrated Islamic School</div><div>Open for Registration!&nbsp;</div><div>&nbsp;</div><div>Dibuka pendaftaran Tahun Pelajaran 2022-2023:</div><div>🏫 Kelompok Bermain:</div><div>Kelas Alif: Usia 2-3 thn</div><div>Kelas Ba: Usia 3-4 thn</div><div>&nbsp;</div><div>🏫 Taman Kanak-kanak:</div><div>TK A: Usia 4-5 thn</div><div>TK B: Usia 5-6 thn</div><div>&nbsp;</div><div>Kami mengajak Ayah dan Bunda untuk bersama memberikan pendidikan terbaik untuk si kecil. Pendidikan yang menyenangkan, tidak lepas dari nilai-nilai Islam dan tentunya sesuai dengan tahapan perkembangannya.</div><div>&nbsp;</div><div>Yuk segera daftarkan putra/i tercinta!&nbsp;</div><div>&nbsp;</div><div>Dapatkan GRATIS uang pendaftaran dan DISKON pangkal untuk registrasi di bulan November s/d Januari 2022.&nbsp;</div>'
        ];
    }
}
