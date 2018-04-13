<?php
  const TOKEN = '528147867:AAGrucTwA7olTmoQ51U2264dHuJE91m0Scs';

  $url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';
  $response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

  if ($response['ok']) {
      
  }
  var_dump($response);

