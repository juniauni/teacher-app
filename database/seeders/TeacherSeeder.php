<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teachers')->insert([
            'nip' => '012383',
            'name' => 'Biru',
            'subject' => 'Matematika',
            'email' => 'biru@mail.com'
        ]);

    }
}
