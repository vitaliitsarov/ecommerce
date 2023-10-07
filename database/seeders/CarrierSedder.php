<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrier;

class CarrierSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carriers = [
            [
                'name' => 'InPost Paczkomat® 24/7',
                'price' => 17,
                'delivery_text' => '',
                'provider' => 'inpost_paczkomat',
                'logo' => '/uploads/carriers/inpost_paczkomat_logo_kwadr.svg',
            ],
            [
                'name' => 'InPost Kurier',
                'price' => 20,
                'delivery_text' => '',
                'provider' => 'inpost_kurier',
                'logo' => '/uploads/carriers/inpost_kurier.svg',
            ],
        ];

        foreach ($carriers as $key => $value) {
            Carrier::updateOrCreate(
                [
                    'provider' => $value['provider']
                ],
                $value
            );
        }
    }
}
