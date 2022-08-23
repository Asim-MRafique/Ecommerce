<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert(
            // [
            //     "name"=>'SAMSUNG A12',
            //     "price"=>'30000',
            //     "category"=>'mobile',
            //     "gallery"=>'https://www.google.com/search?q=samsung+a12&sxsrf=ALiCzsb_it5VFusOIyzXSEwSDIhF_X2OHQ:1661258935831&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjTr__l_9z5AhVoQ_EDHUdOBdEQ_AUoAXoECAEQAw&biw=1517&bih=694&dpr=0.9#imgrc=njLbPSHJ0tW3EM',
            //     "description"=>'smart phone with 4GB RAM and Quad Core Processor',
            // ],
            // [
            //     "name"=>'HEIGHER REGRIGERATOR',
            //     "price"=>'90000',
            //     "category"=>'REGRIGERATOR',
            //     "gallery"=>'https://www.google.com/search?q=height+refrigerator&sxsrf=ALiCzsZ40HaJvaFZgfNAhJKIxfLKp_l4yg:1661259065035&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi-t82jgN35AhVYXvEDHa8uCa4Q_AUoAXoECAIQAw&biw=1517&bih=694&dpr=0.9#imgrc=2CCpnrLMYpug6M',
            //     "description"=>'Ultra modern with latest technology ',
            // ],
            [
                "name"=>'SAMSUNG 40 INCHES LARGE LED',
                "price"=>'100000',
                "category"=>'TV',
                "gallery"=>'https://www.google.com/search?q=samsung+tv&sxsrf=ALiCzsaDBgTt2M-fWwz9wBfKKvXs-SAKJw:1661259266063&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiWrruDgd35AhUxh_0HHQTEBpMQ_AUoAXoECAEQAw&biw=1517&bih=694&dpr=0.9#imgrc=NB53VxQZp9TxhM',
                "description"=>'Smart TV with NTN technology',
            ]
        );
    }
}
