<?php

use Illuminate\Database\Seeder;
use App\Models\Membership;
class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Membership::class, 3)->create();
    }
}
