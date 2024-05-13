<?php

$jsonTweet = file_get_contents("tweets.json");
$jsonArray = json_decode($jsonTweet, true);


require_once "index.html";
