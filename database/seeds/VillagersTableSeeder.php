<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VillagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomGender() {
        $positions = ['人妖','男','女','男男女女','特殊性別：'.$this->generateRandomString(rand(0, 13))];
        return $positions[rand(0, count($positions)-1)];

    }

    public function generateRandomPlus() {
        $positions = ['無改造', '小幅度', '一般', '大幅度','特殊改造：'.$this->generateRandomString(rand(0, 13))];
        return $positions[rand(0, count($positions)-1)];

    }
    public function run()
    {
        for ($i=0; $i<500; $i++)
        {
            $name = $this->generateRandomName();
            $gender = $this->generateRandomGender();
            $plus = $this->generateRandomPlus();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('Villagers')->insert([
                'name' => $name,
                'cid' => rand(1, 14),
                'gender' => $gender,
                'press' => rand(1,100),
                'plus' => $plus,
                'monster' => rand(1, 100),
                'Lead' => rand(1, 100),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
