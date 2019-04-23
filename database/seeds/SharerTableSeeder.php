<?php

use Illuminate\Database\Seeder;
use App\Share; 


class SharerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Share::create([
            'share_name' => "Share1",
            'share_price' => 5,
             "share_qty" => 3
        ]); 
 
 
    }
}
