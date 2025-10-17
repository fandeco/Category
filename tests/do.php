<?php

namespace index;

use fandeco\category\Description;

require dirname(__DIR__) . '/vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ERROR);
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 04.10.2022
 * Time: 20:10
 */


$id = 170311;
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://fandeco.ru/rest/products/' . $id,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => [
        'Authorization: Basic PEJhc2ljIEF1dGggVXNlcm5hbWU+OjxCYXNpYyBBdXRoIFBhc3N3b3JkPg==',
        'Cookie: fandeco_redis=87ebf60b84bed6b4424cc46acbaef99e',
    ],
]);

$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, 1)['object'];


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'https://fandeco.ru/rest/categories?limit=10000',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => [
        'Authorization: Basic PEJhc2ljIEF1dGggVXNlcm5hbWU+OjxCYXNpYyBBdXRoIFBhc3N3b3JkPg==',
        'Cookie: fandeco_redis=87ebf60b84bed6b4424cc46acbaef99e',
    ],
]);

$response = curl_exec($curl);
curl_close($curl);

$cat = [
    'cases',
];


$case = [];


$Desc = new Description();

$cat = null;
$categories = json_decode($response, 1);
foreach ($categories['results'] as $category) {
    $cat = $category;
    $Desc->setSingular($cat['pagetitle'], $cat['cases']['case_value_i']);
}

[$result, $raw, $disc] = $Desc->description($data);

echo '<pre>';
print_r($raw);
die;
