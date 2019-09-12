<?php

function callApi(){

  $url = 'https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100';
  $header = array(
    'API-Key: 7d64ca3869544c469c3e7a586921ba37',
    'Content-Type: application/json',
  );

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);

  if($response === false){

     exit("Connection Failure");

  }

  curl_close($ch);

  $result = json_decode($response);
  $data = $result->data;

  return $data;

}
