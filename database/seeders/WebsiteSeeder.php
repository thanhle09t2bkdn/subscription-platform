<?php


namespace Database\Seeders;


use App\Models\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $websites = [
      'https://www.nytimes.com',
      'https://www.huffpost.com',
      'https://www.latimes.com',
      'https://abcnews.go.com',
      'https://www.bloomberg.com',
      'https://www.dailymail.co.uk',
      'https://www.thesun.co.uk',
      'https://www.telegraph.co.uk',
      'https://www.thestar.com',
      'https://www.news.com.au',
      'https://www.cnbc.com',
      'https://www.chron.com',
    ];
    public function run()
    {
        foreach ($this->websites as $website) {
            Website::factory()->create([
                'url' => $website
            ]);
        }
        /*Website::factory()
        ->count(10)
        ->create();*/
    }
}
