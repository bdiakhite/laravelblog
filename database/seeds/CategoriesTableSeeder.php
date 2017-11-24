<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Disabled Foreign Key');
        Schema::disableForeignKeyConstraints();
        $this->command->info('Truncate Categories Table');
        DB::table('categories')->truncate();
        $this->command->info('Enabled Foreign Key');
        Schema::enableForeignKeyConstraints();

        factory(App\Category::class, 10)->create();
        $this->command->info('Categories seeding completed!');
    }
}
