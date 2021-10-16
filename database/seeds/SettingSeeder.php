<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'Website_name',
            'email' => 'websitename@original.com',
            'phone' => '00966502371248',
            'address' => '198 West 21th Street, Suite 721 New York NY 10016',
            'description' => 'موقع لشرح احترافي للكورسات في مختلف المجالات مع مدربين ذوو مقدرات عالية',
            'logo' => 'logo.jpg',
            'twitter_link' => 'https://twitter.com/login',
            'facebook_link' => 'https://web.facebook.com/?_rdc=1&_rdr',
            'website_video_link' => 'https://www.youtube.com/watch?v=qBNmY7S0BG8',
            'linkedin_link' => 'https://www.linkedin.com/',
        ]);
    }
}
