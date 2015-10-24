<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Model\Menu\ModelName::truncate();
        \Model\Menu\ModelName::create([
            'id'        => 1,
            'parent_id' => null,
            'code'		=> 'main',
            'name'      => 'Башкы Бет',
            'url'		=> 'http://ktrk.dev',
            'order' 	=> 1,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 2,
            'parent_id' => null,
            'code'		=> 'main',
            'name'      => 'КТРК',
            'url'		=> 'http://ktrk.dev',
            'order' 	=> 2,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 3,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'Тарыхы',
            'url'		=> 'http://ktrk.dev/history',
            'order' 	=> 3,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 4,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'Жетекчилер',
            'url'		=> 'http://ktrk.dev/leaders',
            'order' 	=> 4,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 5,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'Стратегия',
            'url'		=> 'http://ktrk.dev/strategy',
            'order' 	=> 5,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 6,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'Нормативдик база',
            'url'		=> 'http://ktrk.dev/normalbase',
            'order' 	=> 6,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 7,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'РРТЦ',
            'url'		=> 'http://ktrk.dev/rrts',
            'order' 	=> 7,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 8,
            'parent_id' => 2,
            'code'		=> 'main',
            'name'      => 'Отчет',
            'url'		=> 'http://ktrk.dev/report',
            'order' 	=> 8,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 9,
            'parent_id' => null,
            'code'		=> 'main',
            'name'      => 'Телепрограмма',
            'url'		=> 'http://ktrk.dev/teleprogram',
            'order' 	=> 9,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 10,
            'parent_id' => null,
            'code'		=> 'main',
            'name'      => 'БАЙКООЧУ КЕҢЕШ',
            'url'		=> 'http://ktrk.dev/kenesh',
            'order' 	=> 10,
        ]);

        \Model\Menu\ModelName::create([
            'id'        => 11,
            'parent_id' => null,
            'code'		=> 'main',
            'name'      => 'РЕДАКЦИЯЛЫК КЕҢЕШЧИ',
            'url'		=> 'http://ktrk.dev/editionkenesh',
            'order' 	=> 11,
        ]);
    }
}