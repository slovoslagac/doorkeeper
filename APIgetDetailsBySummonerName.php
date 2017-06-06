<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 6.6.2017
 * Time: 20:30
 */
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));
$summonername = 'ClintEstwood';
$server = "eun1";

$fullData = file_get_contents("https://$server.api.riotgames.com/lol/summoner/v3/summoners/by-name/$summonername?api_key=d3695a41-c367-41e6-9abf-cf6a90ea8d6d");
$playerDecoded = json_decode($fullData);


$newsummoner = new summoners($playerDecoded->id, $playerDecoded->accountId, $playerDecoded->name, $playerDecoded->profileIconId, $playerDecoded->revisionDate, $playerDecoded->summonerLevel);
if ($newsummoner->checkIfSummonerExists() == '') {
    $newsummoner->addNewSummoner();
} else {
    echo "vec je unet user";
}

var_dump($newsummoner);