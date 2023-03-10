<?php

namespace Database\Seeders;

use App\Models\Manager;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Manager::query()->create([
            'username'=>'Artem',
//            'password'=>bcrypt('qwerty'),
            'password'=>'qwerty',
            'login_date'=>Carbon::createFromFormat('Y-m-d', '2023-03-10')
        ]);
        $manager = Manager::query()->create([
            'username'=>'Polina',
//            'password'=>bcrypt('qwerty'),
            'password'=>'qwerty',
            'login_date'=>Carbon::createFromFormat('Y-m-d', '2023-03-10')
        ]);
    }
}
