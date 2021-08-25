<?php

include('Services/Api.php');


$curl = curl_init();
//passando apenas um parametro pro vez
//curl_setopt($curl, CURLOPT_URL, 'http://192.168.1.75:3000/countrys');
//curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

// passando um array de paramentros
curl_setopt_array($curl,[
    CURLOPT_URL=>1,
    CURLOPT_URL=>'http://192.168.1.75:3000/countrys'
]);

$api = new Api();
$api->callApi();


$result = curl_exec($curl);


if($result)
{
    var_dump($result);
}
else
{
    print('error');
}

curl_close($curl);