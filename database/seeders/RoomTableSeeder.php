<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'type' => 'Single',
            'name' => 'Room 1',
            'slug' => 'room-1',
            'details' => 'Furnished with a twin size bed, TV,Fridge, telephone, a lounge chair and a bathroom.',
            'price' => 25000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Double',
            'name' => 'Room 2',
            'slug' => 'room-2',
            'details' => 'Have either a King Size Bed or two twin beds, lounge chair, fridge, telephone, TV and a bathroom
            ',
            'price' => 55000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Executive',
            'name' => 'Room 3',
            'slug' => 'room-3',
            'details' => 'have a lounge to relax as well as a small kitchen area. They have 2 TVs , a King size Bed, fridge, telephone and a bathroom
            ',
            'price' => 100000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Executive',
            'name' => 'Room 4',
            'slug' => 'room-4',
            'details' => 'have a lounge to relax as well as a small kitchen area. They have 2 TVs , a King size Bed, fridge, telephone and a bathroom
            ',
            'price' => 130000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Executive',
            'name' => 'Room 5',
            'slug' => 'room-5',
            'details' => 'have a lounge to relax as well as a small kitchen area. They have 2 TVs , a King size Bed, fridge, telephone and a bathroom
            ',
            'price' => 110000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);

        Room::create([
            'type' => 'Double',
            'name' => 'Room 6',
            'slug' => 'room-6',
            'details' => 'Have either a King Size Bed or two twin beds, lounge chair, fridge, telephone, TV and a bathroom
            ',
            'price' => 60000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Double',
            'name' => 'Room 7',
            'slug' => 'room-7',
            'details' => 'Have either a King Size Bed or two twin beds, lounge chair, fridge, telephone, TV and a bathroom
            ',
            'price' => 65000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);

        Room::create([
            'type' => 'Single',
            'name' => 'Room 8',
            'slug' => 'room-8',
            'details' => 'Furnished with a twin size bed, TV,Fridge, telephone, a lounge chair and a bathroom.',
            'price' => 30000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);
        Room::create([
            'type' => 'Single',
            'name' => 'Room 9',
            'slug' => 'room-9',
            'details' => 'Furnished with a twin size bed, TV,Fridge, telephone, a lounge chair and a bathroom.',
            'price' => 35000,
            'description' => 'The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
               eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum."

            '

        ]);

    }
}
