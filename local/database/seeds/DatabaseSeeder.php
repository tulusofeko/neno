<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->command->info("App NeNo table seeded :)");
        $this->call(UserTableSeeder::class);
		$this->command->info("Import Process App NeNo table seeds completed successfully :)");
    }
}
