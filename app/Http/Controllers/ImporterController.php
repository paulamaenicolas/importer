<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Importer;
use Illuminate\Support\Facades\DB;

class ImporterController extends Controller
{

    /*
     * Fetch Players from endpoint
     * @return json data elements property
     */
    private function fetchPlayers()
    {
        $endpoint = env('DATA_PROVIDER',
            'https://fantasy.premierleague.com/api/bootstrap-static/');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        $header = [
            'Content-Type: application/json'
        ];
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        $output = curl_exec($ch);
        $arrOutput = json_decode($output);

        curl_close($ch);

        return $arrOutput->elements;

    }

    /*
     * Save player data to database
     */
    public function importPlayers()
    {
        $players = $this->fetchPlayers();
        foreach ($players as $index => $player) {
            $playerExists = Importer::where('id', '=', $player->id)->first();
            if ($playerExists === null) {
                $importer = new Importer();
                if ($index <= 99) {
                    foreach($player as $key => $value){
                        $importer->$key = $player->$key;
                    }
                    $importer->save();
                }
            }
        }

        return $players;
    }

    /*
     * Return list of all players
     * @return ID and Full Name
     */
    public function getAllPlayers()
    {
        return Importer::all('id', 'first_name', 'second_name');
    }

    /*
     * Return full data of a single player
     * @return object
     * @param ID
     */
    public function showPlayerById($id)
    {
        return Importer::find($id);
    }


}
