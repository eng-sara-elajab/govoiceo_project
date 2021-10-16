<?php

use App\Requirement;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requirement::create([
            'bank_account' => 'غير محدد',
            'price' => 0
        ]);
    }
}
