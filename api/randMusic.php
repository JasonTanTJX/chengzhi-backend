<?php
$url = 'https://api.uomg.com/api/rand.music?sort=热歌榜&format=json';
$result = file_get_contents($url);
echo($result);
?>