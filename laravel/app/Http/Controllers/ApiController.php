<?php
/**
 * Created by PhpStorm.
 * User: opilane
 * Date: 05.04.2018
 * Time: 17:23
 */

namespace App\Http\Controllers;


use Swagger\Client\Api\DeckApi;

class ApiController extends Controller
{
    public function index()
    {
        $myId= "118178517";
        $json =file_get_contents("https://api.opendota.com/api/players/$myId/heroes");
            $decode=json_decode($json,true);
            var_dump($decode);
//        $nimi = "Aleksandr";

//        $json = file_get_contents("https://itunes.apple.com/search?term=linkin+park&limit=25");
//        $decode = json_decode($json,true);
//
//        $sample = $decode['results'][0]['previewUrl'];
//        $trackName = $decode['results'][0]['trackName'];
//        $artworkUrl100 = $decode['results'][0]['artworkUrl100'];
//
//
//        return view('index', compact('sample', 'trackName', 'artworkUrl100'));

    }

//    public function getList()
//    {
//        $list = ['list1', 'item2', 'item3'];
//        return $list;
//
//    }

 //   public function pokeApi()

  //  {

        // $guzzle = new \GuzzleHttp\Client();
        //$response = $guzzle->get(  "http://pokeapi.co/api/v2/pokemon/1/");
        // $jason =$response->getBody()->getContents();
        // $pokemon = json_decode($jason);
        //var_dump($pokemon);
        //echo "Name";
        //var_dump($pokemon->forms[0]->name);
        // Echo "Height";
        // var_dump($pokemon->height);
        //echo "Base Experiens";
        // var_dump($pokemon->base_experience);

//        $json = file_get_contents("http://pokeapi.co/api/v2/pokemon/1/");
//        $decode = json_decode($json,true);
//
//        $Name = "Name: " . $decode['forms'][0]['name'];
//        $Height = "Height: " . $decode['height'];
//        $bexp = "Base Experiens: " . $decode['base_experience'];
//
//
//        echo $Name . "<br>";
//        echo $Height . "<br>";
//        echo $bexp . "<br>";

 //   }

//    public function iTunsApi()
//    {
//        $json = file_get_contents("https://itunes.apple.com/search?term=linkin+park&limit=25");
//        $decode = json_decode($json,true);
//
//        $sample = $decode['results'][0]['previewUrl'];
//
//        echo $sample;
//
//
//
//
//    }


//    public function dec()
//    {
//        $json = file_get_contents("https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1");
//        $decode = json_decode($json,true);
//        $decId = $decode['deck_id'];
//        echo $decId . "<br>";
//
//
//        $json2 = file_get_contents("https://deckofcardsapi.com/api/deck/" . $decId . "/draw/?count=5");
//        $decode2 = json_decode($json2,true);
//        $counret = 0;
//
//        foreach ($decode2['cards'] as  $decodein )
//        {
//            $cardpng = $decode2['cards'][$counret]['images']['png'];
//            echo $cardpng. "<br>";
//            echo '<img src="' . $cardpng . '" height="90" width="60">'. "<br>";
//
//            $counret++;
//
//        }
//
//
//    }

    public function deck(){
        $client = new DeckApi();
        try{
          $responce =  $client->shuffleTheCards(null,1);
            var_dump($responce->getDeckId());
        }
        catch (\Exception $e){

        }
        var_dump($client);
    }
}