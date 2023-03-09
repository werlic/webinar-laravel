<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Testimony;
use App\Models\Webinar;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            'category' => 'UX Design'
        ]);
        Category::create([
            'category' => 'UX Writing'
        ]);
        Category::create([
            'category' => 'Product Design'
        ]);

        Webinar::create([
            'title' => 'Tips Meningkatkan UX Design',
            'description' => 'Lorem ipsum dolor sit am',
            'speaker' => 'Jhon Keter',
            'moderator' => 'Dani',
            'quota' => 100,
            'registration_date' => now()->format('Y-m-d H:i:s'),
            'end_registration_date' => now()->addDays(10)->format('Y-m-d H:i:s'),
            'start_date' => now()->addDays(11)->format('Y-m-d H:i:s'),
            'category_id' => 1
        ]);

        Webinar::create([
            'title' => 'Mempercepat Performa UX',
            'description' => 'Lorem ipsum dolor sit am',
            'speaker' => 'Roni Shaker',
            'moderator' => 'Dani',
            'quota' => 100,
            'registration_date' => now()->format('Y-m-d H:i:s'),
            'end_registration_date' => now()->addDays(10)->format('Y-m-d H:i:s'),
            'start_date' => now()->addDays(11)->format('Y-m-d H:i:s'),
            'category_id' => 1
        ]);

        Webinar::create([
            'title' => 'Tips UX Writing yang Optimal',
            'description' => 'Lorem ipsum dolor sit am',
            'speaker' => 'Jhon Kuver',
            'moderator' => 'Dani',
            'quota' => 100,
            'registration_date' => now()->format('Y-m-d H:i:s'),
            'end_registration_date' => now()->addDays(10)->format('Y-m-d H:i:s'),
            'start_date' => now()->addDays(11)->format('Y-m-d H:i:s'),
            'category_id' => 2
        ]);

        Webinar::create([
            'title' => 'Meningkatkan User Experience melalui UX Writing',
            'description' => 'Lorem ipsum dolor sit am',
            'speaker' => 'Dadan Kelly',
            'moderator' => 'Dani',
            'quota' => 200,
            'registration_date' => now()->format('Y-m-d H:i:s'),
            'end_registration_date' => now()->addDays(10)->format('Y-m-d H:i:s'),
            'start_date' => now()->addDays(11)->format('Y-m-d H:i:s'),
            'category_id' => 2
        ]);

        Testimony::create([
            'tester_name' => 'Ming Gewe',
            'tester_jobs' => 'Software Developer',
            'testimony' => 'Saya sangat senang telah mengikuti webinar yang diadakan baru-baru ini. Acara ini benar-benar menginspirasi dan memberikan banyak wawasan baru bagi saya. Para pembicara di webinar ini sangat ahli dalam bidangnya dan memberikan presentasi yang sangat informatif dan interaktif.'
        ]);

        Testimony::create([
            'tester_name' => 'Ando Suatad',
            'tester_jobs' => 'UX Researcher',
            'testimony' => 'Saya sangat menghargai cara para pembicara menyampaikan materi dengan sangat jelas dan terstruktur dengan baik, sehingga mudah untuk diikuti dan dipahami. Selain itu, saya juga sangat menghargai adanya sesi tanya jawab yang memungkinkan para peserta untuk berinteraksi langsung dengan para pembicara dan mendapatkan jawaban atas pertanyaan-pertanyaan yang mungkin sulit dijawab.'
        ]);

        Testimony::create([
            'tester_name' => 'Rocky Jarva',
            'tester_jobs' => 'UX Design',
            'testimony' => 'Saya baru saja mengikuti webinar tentang UX design dan saya sangat terkesan dengan kualitas acaranya. Para pembicara sangat berpengetahuan dan ahli dalam bidang UX design, dan mereka memberikan banyak wawasan yang berguna dan praktis untuk meningkatkan pengalaman pengguna pada produk atau layanan yang kita buat.<br>Sesi tanya jawab juga sangat interaktif dan membantu saya memahami topik dengan lebih baik. Saya juga sangat menghargai cara presentasi para pembicara yang sangat jelas dan mudah dipahami.'
        ]);

        Testimony::create([
            'tester_name' => 'Jack Kata',
            'tester_jobs' => 'UX Researcher',
            'testimony' => 'Secara keseluruhan, saya merasa sangat terinspirasi dan terberkati telah mengikuti webinar ini. Saya berharap ada lebih banyak acara serupa di masa depan, karena saya yakin banyak orang lain juga akan mendapatkan manfaat dari webinar seperti ini. Terima kasih kepada semua orang yang terlibat dalam acara ini!'
        ]);
    }
}
