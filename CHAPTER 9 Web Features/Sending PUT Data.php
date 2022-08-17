<?php
$data = ["fan" => "Ron"];
$curlResource = curl_init();
$options = [
    CURLOPT_URL => 'https://eoorn7txxy4x58n.m.pipedream.net',
    CURLOPT_CUSTOMREQUEST => 'PUT',
    CURLOPT_POSTFIELDS => $data
];
curl_setopt_array($curlResource, $options);
$response = curl_exec($curlResource);