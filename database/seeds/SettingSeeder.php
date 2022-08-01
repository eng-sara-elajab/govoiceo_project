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
            'description' => 'The School of Continuing Studies online courses are instructor-led and delivered primarily through an online course site using one or more collaborative, communication and/or social technologies. If the course you are  interested in is offered in multiple formats (in-class, online or hybrid) be assured that these formats use the same learning materials and will allow you to achieve the same learning outcomes.

Three days before the course start date, you will receive an email with detailed  instructions on how to access your online course site. If you register less than five days before the course start, you will receive the access information three days after registration. The email may be filtered to your junk mail, so please check there as well. If you do not  receive the access information, please submit a help request, speak to us through our LiveHelp, or give us a call.',
            'logo' => 'logo.jpg',
            'twitter_link' => 'https://twitter.com/login',
            'facebook_link' => 'https://web.facebook.com/?_rdc=1&_rdr',
            'website_video_link' => 'https://www.youtube.com/watch?v=qBNmY7S0BG8',
            'linkedin_link' => 'https://www.linkedin.com/',
        ]);
    }
}
