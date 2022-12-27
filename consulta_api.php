<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://www.getpostman.com/collections/c35023e017d2576968b5",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: unogsng.p.rapidapi.com",
		"X-RapidAPI-Key: c63c259e0cmsh0908966109bd2e9p198dafjsn1df98aceadaf"
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
?>