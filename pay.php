<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://tobd.qzz.io/api/create-charge",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'full_name' => 'Demo',
    'email_mobile' => 'demo@gmail.com',
    'amount' => '75',
    'metadata' => [
        'invoiceid' => '4588378383'
    ],
    'redirect_url' => 'https://piprapay.com',
    'return_type' => 'GET',
    'cancel_url' => 'https://piprapay.com',
    'webhook_url' => 'https://piprapay.com',
    'currency' => 'BDT'
  ]),
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "content-type: application/json",
    "mh-piprapay-api-key: 5909154496938995a0df2945745965820807020946938995a0df2b862864153"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}