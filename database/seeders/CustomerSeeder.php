<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->times(3)->create();

        Customer::factory()->create([
            'email' => 'john.doe@example.com',
        ]);
    }
}
