<?php

use Illuminate\Database\Seeder;
use App\Models\Session;
use App\Models\Episode;
use App\Models\User;

class SessionPlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\SessionPlaylist::create(
            [
                'session_id' => Session::first()->id,
                'episode_id' => Episode::first()->id,
                'order' => 1,
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
