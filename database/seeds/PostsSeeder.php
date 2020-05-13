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
                   'text' => 'тестовое название',
                   'prew' => 'Тестовое превью',
                   'textarea' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                   'author' => 'Test Testovich',
                   'category' => 'economic',
                   'index' => 'test'

            ];
        }
        DB::table('posts')->insert($data);

        $dat = [];
        for ($y = 5; $y <= 10; ++$y){

            $dat[] = [
                   'id' => $y,
                   'text' => 'тестовое название2',
                   'prew' => 'Тестовое превью2',
                   'textarea' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                   'author' => 'Test Testovich2',
                   'category' => 'politic',
                   'index' => 'test2'

            ];
        }
        
        DB::table('posts')->insert($dat);

        $d = [];
        for ($a = 11; $a <= 15; ++$a){

            $d[] = [
                   'id' => $a,
                   'text' => 'тестовое название3',
                   'prew' => 'Тестовое превью3',
                   'textarea' => 'Самый простой на свете текст, который создан, чтобы быть тестовым, для тестирования работы функционала',
                   'author' => 'Test Testovich3',
                   'category' => 'sport',
                   'index' => 'test3'

            ];
        }
        
        DB::table('posts')->insert($d);
    }
}
