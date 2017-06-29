<?php

use Illuminate\Database\Seeder;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nodeChannel = new \App\Repositories\Content\ContentNodeChannel();
        $nodeChannel->name = 'category';
        $nodeChannel->display_name = 'Category';
        $nodeChannel->description = '';
        $nodeChannel->save();
    }
}
