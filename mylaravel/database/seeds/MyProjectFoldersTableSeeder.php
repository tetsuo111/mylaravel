<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MyProjectFoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ["サイコパス3","サイコパス4","サイコパス5"];
        foreach($titles as $title){
            DB::table("myProjectsFolders")->insert([
                "title" => $title,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
