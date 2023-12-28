<?php

namespace Database\Seeders;

use AnisAronno\LaravelSettings\Models\SettingsProperty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class LaravelSettingsSeeder extends Seeder
{
    protected $model = SettingsProperty::class;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        SettingsProperty::truncate();
        Schema::enableForeignKeyConstraints();

        setSettings('logo', 'defaults/logo.png');
        setSettings('fav_icon', 'defaults/fav_icon.png');
        setSettings('banner', 'defaults/banner.png');
        setSettings('site_name', 'Portfolio');
        setSettings('site_title', 'My WebSite');
        setSettings('language', env('APP_LANGUAGE', 'en'));
        setSettings('organization_name', 'My Startup');
        setSettings('email', 'anis904692@gmail.com');
        setSettings('phone', '01816366535');
        setSettings('user_default_role', 'user');
        setSettings('site_url', env('APP_URL', 'http://multipurpose-admin-panel-boilerplate.test'));
        setSettings('time_zone', 'Asia/Dhaka');
        setSettings('address', 'Mirpur-DOHS, Dhaka');
        setSettings('any_one_can_register', 'false');
        setSettings('pagination_limit', 10);
        setSettings('user_default_status', 'Active');
        setSettings('map', 'Dhaka');
        setSettings('copyright', "©All right reserved");
        setSettings('facebook_url', 'https://facebook.com');
        setSettings('instagram_url', 'https://instagram.com');
        setSettings('twitter_url', 'https://twitter.com');
        setSettings('youtube_channel_url', 'https://youtube.com');
        setSettings('linkedin_url', 'https://linkedin.com');
        setSettings('github_url', 'https://github.com');
    }
}
