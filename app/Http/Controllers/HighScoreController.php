<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Highscore;

class HighScoreController extends Controller
{
    public function updateHighscores(Request $request)
    {
        $game_name = $request->game_name;
        $device_id = $request->device_id;
        $player_name = $request->player_name;
        $score = $request->score;

        $player = $this->updatePlayerInfo([
            'device_id' => $device_id,
            'player_name' => $player_name
        ]);

        $now = \Carbon\Carbon::now();
        $period = $now->format('M-Y');

        // if we want to track highscore by week
        // $period = $now->weekOfYear . ' week of ' . $now->format('Y');

        $highscore = Highscore::firstOrCreate([
            'period' => $period,
            'game' => $game_name,
            'player_id' => $player->id
        ]);

        if ($highscore->score < $score) {
            $highscore->score = $score;
            $highscore->save();
        }

        $top = Highscore::where([
            'period' => $period,
            'game' => $game_name,
        ])
        ->with('player');

        $top = $this->applyOrderBy($top);
        
        $top = $top->limit(10)
        ->get();

        $highscore_data = [];

        foreach ($top as $index => $h) {
            $highscore_data[] = [
                'rank' => $index + 1,
                'player_name' => $h->player->name,
                'score' => $h->score,
                'is_current_player' => $h->player->id == $player->id
            ];
        }

        $current_player_rank = Highscore::where([
            'period' => $period,
            'game' => $game_name,
        ])
        ->where('score', '>=', $highscore->score)
        ->count();

        if ($current_player_rank > count($highscore_data)) {
            $highscore_data[] = [
                'rank' => $current_player_rank,
                'player_name' => $player->name,
                'score' => $highscore->score,
                'is_current_player' => true
            ];
        }

        return $highscore_data;
    }

    private function applyOrderBy($query)
    {
        $query = $query->orderBy('score', 'desc')
            ->orderBy('updated_at', 'asc');
        return $query;
    }

    private function updatePlayerInfo($data)
    {
        $player = Player::firstOrCreate([
            'device_id' => $data['device_id'],
        ]);

        $player->name = $data['player_name'];
        $player->save();
        return $player;
    }
}
