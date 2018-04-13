<?php
const TOKEN = '528147867:AAGrucTwA7olTmoQ51U2264dHuJE91m0Scs';

$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

$lastupdate = 432423;

$params = [
    'offset' => $lastupdate + 1
];

$url = $url . '?' . http_build_query($params);


$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);


if ($response['ok']) {
    foreach ($response['result'] as $update) {
        echo $text =  $update['message']['text'];
        mail('webistomin@gmail.com', 'Test', $text)
        ?><br><?php
    }
}





//  var_dump($response);

