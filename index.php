<?php
$url = "https://ucdn.starhubgo.com/bpk-tv/HubSports5HD/output/manifest.mpd";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
if (!curl_errno($ch)) {
    header("Content-Type: application/dash+xml");
    echo $response;
}
curl_close($ch);
?>
