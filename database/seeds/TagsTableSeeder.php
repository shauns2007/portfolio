<?php

use Portfolio\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name'=>'PHP', 'parent'=>'project']);
        Tag::create(['name'=>'JavaScript/Jquery', 'parent'=>'project']);
        Tag::create(['name'=>'MySQL', 'parent'=>'project']);
        Tag::create(['name'=>'Android', 'parent'=>'project']);
        Tag::create(['name'=>'CSS', 'parent'=>'project']);
        Tag::create(['name'=>'HTML', 'parent'=>'project']);
        Tag::create(['name'=>'Bootstrap 4', 'parent'=>'project']);
        Tag::create(['name'=>'Laravel', 'parent'=>'project']);
        Tag::create(['name'=>'CodeIgniter', 'parent'=>'project']);
        Tag::create(['name'=>'Unisa', 'parent'=>'course']);
        Tag::create(['name'=>'Udemy', 'parent'=>'course']);
    }
}
