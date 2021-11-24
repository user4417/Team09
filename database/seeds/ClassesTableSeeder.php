<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
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
        $name = [
            '鐵匠',
            '木工',
            '律師',
            '圖書管理員',
            '納粹黨衛軍',
            '元素騎士',
            '主席',
            '心理學家',
            '網路管理員',
            '學生',
            '表格撰寫者',
            '會計師',
            '警官',
            '超商店員',
            '程式作業員',
        ];
        return $name[rand(0, count($name)-1)];
    }
    public function generateRandomSp() {
        $sp = ['打鐵',
        '鋸木',
        '辯護',
        '法術',
        '做肥皂',
        '自殺',
        '發表政件',
        '分析心理',
        '買乖乖',
        '嘴砲',
        '寫Excel',
        '處理金錢',
        '掃黑',
        '計算該找多少',
        '寫程式',
        ];
        return $Sp[rand(0, count($Sp)-1)];
    }
    public function generateRandomCity() {
        $name = [
            '鐵匠',
            '木工',
            '律師',
            '圖書管理員',
            '納粹黨衛軍',
            '元素騎士',
            '主席',
            '心理學家',
            '網路管理員',
            '學生',
            '表格撰寫者',
            '會計師',
            '警官',
            '超商店員',
            '程式作業員',
        ];
        return $name[rand(0, count($name)-1)];
    }
    public function run()
    {
        for ($i=0; $i<25; $i++) {
            $name = $this->generateRandomName();
            $city = $this->generateRandomCity();
            $sp = $this->generateRandomSp();
            $home = $city . "球場";
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('teams')->insert([
                'name' => $name,
                'zone' => $zone,
                'city' => $city,
                'home' => $home,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}