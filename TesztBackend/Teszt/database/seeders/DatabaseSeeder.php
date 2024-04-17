<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\kategoria::factory()->create([
            'kategorianev' => 'Természetvédelem',
        ]);
        \App\Models\kategoria::factory()->create([
            'kategorianev' => 'Informatika',
        ]);
        \App\Models\kategoria::factory()->create([
            'kategorianev' => 'Biológia',
        ]);

        \App\Models\teszt::factory()->create([
            'kerdes' => 'A papírt milyen színű szelektív kukába gyűtjűk?',
            'v1' => 'kék',
            'v2' => 'piros',
            'v3' => 'szürke',
            'v4' => 'sárga',
            'kategoriaId' => '1'
        ]);
        \App\Models\teszt::factory()->create([
            'kerdes' => 'Melyek komposztálhatóak?',
            'v1' => 'zöldség - gyümölcs maradék - tojáshéj',
            'v2' => 'nagy ágak, fatörzsek, diófaelvél',
            'v3' => 'fém, műanyag, vegyszeres dolgok',
            'v4' => 'ruhanemű, törlőruha, egyéb textil',
            'kategoriaId' => '1'
        ]);
        \App\Models\teszt::factory()->create([
            'kerdes' => 'Fogmosásnál...',
            'v1' => 'elzárom a csapot',
            'v2' => 'biztoshogynem',
            'v3' => 'nem is mosok',
            'v4' => 'répa',
            'kategoriaId' => '1'
        ]);
        \App\Models\teszt::factory()->create([
            'kerdes' => 'Órára mindig...',
            'v1' => 'Bejárok',
            'v2' => 'Nem tanulok',
            'v3' => 'Eszek',
            'v4' => 'Iszok',
            'kategoriaId' => '1'
        ]);
        \App\Models\teszt::factory()->create([
            'kerdes' => 'A papírt milyen színű szelektív kukába gyűtjűk?',
            'v1' => 'kék',
            'v2' => 'piros',
            'v3' => 'szürke',
            'v4' => 'sárga',
            'kategoriaId' => '1'
        ]);
        \App\Models\teszt::factory()->create([
            'kerdes' => 'A papírt milyen színű szelektív kukába gyűtjűk?',
            'v1' => 'kék',
            'v2' => 'piros',
            'v3' => 'szürke',
            'v4' => 'sárga',
            'kategoriaId' => '1'
        ]);
    }
}
