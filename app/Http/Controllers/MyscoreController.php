<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MyscoreController extends Controller
{
    //
    public function list()
    {
        $response = Http::post('http://35.175.135.183/oauth/token', [
            'username'      => 'sdodds@sportsdata.com',
            'password'      => 'sdodds2021',
            'grant_type'    => 'password',
            'client_id'     => '93b7a5b0-4374-4092-9d0c-cb516a995182',
            'client_secret' => 'V4s2EA64ZTvlcVnP1HZNZGE7Hwq6B6VNsdQwLMBZ'
        ]);
        $response = $response->Json();
        $request  = Http::withToken($response["access_token"])
            ->acceptJson()
            ->get('http://35.175.135.183/api/sportsdata/scores');
        $requests = Http::withToken($response["access_token"])
            ->acceptJson()
            ->get('http://35.175.135.183/api/sportsdata/leagues');

        $leagues = json_decode($requests->getBody(), true);
        //dd($leagues);
        $datas = json_decode($request->getBody(), true);
        return view('myscore', array("datas" => $datas), array("leagues" => $leagues));
    }
}
