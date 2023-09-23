<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Integration;

class IntegrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $integrations_list = [
            [
                'title' => 'BossOfToys',
                'url' => 'http://bossoftoys.pl/images/products/xml/c974842b-3189-4b01-8479-5e5586a7d804.xml',
                'type' => 'xml',
                'status' => 'active',
            ]
        ];

        foreach($integrations_list as $key => $value) {
            Integration::firstOrCreate(
                [
                    'title' => $value['title']
                ],
                $value
            );
        }
    }
}
