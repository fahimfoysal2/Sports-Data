<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class WelcomeController extends Controller
{
    public function list()
    {
        $request =
            Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5M2I3YTViMC00Mzc0LTQwOTItOWQwYy1jYjUxNmE5OTUxODIiLCJqdGkiOiJhNzJlMTA3YTA2Y2Q4YzFkMzY3MjdmMTBkMWRjNTI0NTYxZWEzOWY1MjA3MGMxNzFhYjViYTEwOWJhMDZkMzY0ZWU1MDgzMjQ4YmI3M2RiMCIsImlhdCI6MTYyNjAxODUwOSwibmJmIjoxNjI2MDE4NTA5LCJleHAiOjE2MjYxMDQ5MDksInN1YiI6IjMiLCJzY29wZXMiOltdfQ.srKMaXdL051sdPoDTWBPziWCjRVJwUsRcli9a0y377iDoWI-LbMQxJGlvtX8E66goVvThju7045d9xCwa_oVONfpHtCVadSPMi0fk0RPrZ10zrZaesbmcCrdkjo-W5THBamJqM0_qhg8rYmQA1RTDEQilrDhT9vJiu5ZNKiAIOwUlpzQmW33KnVgUKyorf4NDa6o3Iuo8zgpqtxEDk7hda8THjJBilBYZXyN1rcPTeKDTXbk36tcqi0tVotZm6zNE-gImQskiPs4aWUD4hB7XU6FzFVrQMrI-KXB_1Gw4PdxEvA6sFTA__AhXHaOarw9U-RZ-4jJlYwqRAcl8oeXvcEaCmhMjQSvDxefBsT5A4Bpf7s2-M9T7FBaf9Zmi4vXuHxxs08p6LLQoXqGtS0LvyPK2S2ktd0yTiCy-CMVYaLO8QNfbNYNv8w2ZfXsVVe3k7hufk-lx3E-7L5Cvtkx6h5D-ILuA5hc385qDbLuhM8_W966hml6oibFZrmuoeQqoEkqjI-uauGBWDIERkgbwV14ghnt7P-7_xGovPOTc-bwv44nWi15gMkJ68E79NMBnf3sQVjxDCsCvDW5n_P-nDitEHfr8FpEy8tww2_shHX66ZIU1i_1Xw2WX2BoIkboran0R5G03dM-e9pgXTbLKy03oIcVvTTlCICsq1HqaQo')
                ->acceptJson()
                ->get('http://35.175.135.183/api/sportsdata/sports');

        $datas = json_decode($request->getBody(), true);
        return view('welcome', array("datas" => $datas));
    }
}
