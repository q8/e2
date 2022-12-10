<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'tinyint(1)',
            'player_roll' => 'tinyint(1)',
            'computer_roll' => 'tinyint(1)',
            'won' => 'varchar(8)',
            'timestamp' => 'timestamp'
        ]);

        dump('Migrations complete');
    }

    public function seed()
    {

        $faker = Factory::create();

        for ($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('rounds', [
                'choice' => [6, 8][rand(0, 1)],
                'player_roll' => 6,
                'computer_roll' => 5,
                'won' => 'Player',
                'timestamp' => $faker->dateTimeBetween('-' . $i . ' days', '-' . $i . ' days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds complete');
    }
}