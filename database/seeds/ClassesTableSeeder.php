<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
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
    public function generateRandomName($i) {
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
        return $name[$i];
    }
    public function generateRandomSp($clas) {
        $Sp = [
            '鐵匠'=>'打鐵',
            '木工'=>'鋸木',
            '律師'=>'辯護',
            '圖書管理員'=>'法術',
            '納粹黨衛軍'=>'做肥皂',
            '元素騎士'=>'自殺',
            '主席'=>'發表政件',
            '心理學家'=>'分析心理',
            '網路管理員'=>'買乖乖',
            '學生'=>'嘴砲',
            '表格撰寫者'=>'寫Excel',
            '會計師'=>'處理金錢',
            '警官'=>'掃黑',
            '超商店員'=>'計算該找多少',
            '程式作業員'=>'寫程式',
        ];
        return $Sp[$clas];
    }
    public function generateRandomClas() {
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
        for ($i=0; $i<14; $i++) {
            $name = $this->generateRandomName($i);
            $love = rand(0, 10);
            $sp = $this->generateRandomSp($name);
            $easy = rand(0, 10);
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('Classes')->insert([
                'id'=>$i,
                'name' => $name,
                'easy' => $easy,
                'love' => $love,
                'sp' => $sp,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime,
            ]);
        }
    }
}
