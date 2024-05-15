<?php

$jsonTweet = file_get_contents("tweets.json"); //Leemos tweets de fichero tweets.json
$jsonArray = json_decode($jsonTweet, true); //convertimos datos del fichero en array
if(!empty($_POST["tweetText"])){ //verificamos si el campo tweetText que cogemos del formulario, no esta vacia y si que existe
    $newTweet = [ //creamos array que se imprimar al twittear cuando verifique que tweet existe
        'texto'=>$_POST['tweetText'],
    'autor'=> 'John Dow',
    'username'=> 'John_Dow'
    ];

    $jsonArray["tweets"][] = $newTweet;
};


$tweetsJson = json_encode($jsonArray);
    file_put_contents("tweets.json", $tweetsJson);


require_once "index.html";
