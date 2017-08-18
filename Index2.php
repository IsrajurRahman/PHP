<?php


$word = "man";  // SERCHING WORD
$curl = curl_init(); // 
echo "Bangla meaning of $word is == ";
$url = "http://www.english-bangla.com/dictionary/$word"; // URL TO GRAB THE RESULT

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

preg_match_all("/<span class='format1' style='font-family:TonnyBanglaMJ, SolaimanLipi,  Times, serif'>(.*?)<\/span>/", $result, $matches); // GRABING THE RESULT FROM VIEW SOURCE

$Bword = $matches [0][0];

echo $Bword;

curl_close($curl);


?>