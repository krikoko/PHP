<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
       

        for ($i = 1; $i <= 4; ++$i){

            $data[] = [
                'id' => $i,
                'text' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                'head' => 'Тестовое превью',
                'date' => '01.01.1900',
                'author' => 'Test Testovich',
                'category' => 'economic',

            ];
        }
        DB::table('posts')->insert($data);

        $dat = [];
        for ($y = 5; $y <= 10; ++$y){

            $dat[] = [
                   'id' => $y,
                   'text' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                   'head' => 'Тестовое превью2',
                   'date' => '01.01.1900',
                   'author' => 'Test Testovich2',
                   'category' => 'politic',
                   

            ];
        }
        
        DB::table('posts')->insert($dat);

        $d = [];
        for ($a = 11; $a <= 15; ++$a){

            $d[] = [
                'id' => $a,
                'text' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                'head' => 'Тестовое превью3',
                'date' => '01.01.1900',
                'author' => 'Test Testovich3',
                'category' => 'sport',

            ];
        }
        
        DB::table('posts')->insert($d);
    }
}
