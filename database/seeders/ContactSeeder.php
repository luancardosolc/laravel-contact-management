<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        // Create 1000 random contacts using the factory
        Contact::factory(1000)->create();
    }
}
