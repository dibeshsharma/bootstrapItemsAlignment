<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.meraki.com/api/v1/organizations/561694/networks',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Cisco-Meraki-API-Key: 8d78b0219b1b565594a5c75bf1e34b982640106d',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

$data = json_decode($response, TRUE);
var_dump($data);