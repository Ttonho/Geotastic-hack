<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://maps.googleapis.com/maps/api/js/GeoPhotoService.GetMetadata?pb=!1m5!1sapiv3!5sUS!11m2!1m1!1b0!2m2!1sen!2sUS!3m3!1m2!1e2!2srR8Lepq-F2ufToMlYiOnsg!4m6!1e1!1e2!1e3!1e4!1e8!1e6&callback=_xdc_._l45k5b',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = json_encode(curl_exec($curl));

curl_close($curl);

$explode = explode(",", $response);

// echo '<pre>';
// print_r($explode);
// echo '<pre>';

echo $explode[39] . ' ';

$explode2 = explode("]", $explode[40]);

echo $explode2[0];