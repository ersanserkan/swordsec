<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'view first']);
        Permission::create(['name' => 'view second']);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@swordsec.test'
        ]);

        $user->syncPermissions(['view first', 'view second']);

        $user = \App\Models\User::factory()->create([
            'name' => 'User #1',
            'email' => 'user1@swordsec.test'
        ]);

        $user->givePermissionTo('view first');

        $user = \App\Models\User::factory()->create([
            'name' => 'User #2',
            'email' => 'user2@swordsec.test'
        ]);

        $user->givePermissionTo('view second');

        $user = \App\Models\User::factory()->create([
            'name' => 'User #3',
            'email' => 'user3@swordsec.test'
        ]);

        Website::factory(100)->create();
    }
}
