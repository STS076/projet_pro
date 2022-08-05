<?php
$fluxRSS = 'https://www.parisperfect.com/blog/feed/';

function recupXML($url)
{
    if (!@$rss = simplexml_load_file($url)) {
        throw new Exception('Flux introuvable');
    } else {
        return $rss;
    }
}

try {
    $rss = recupXML($fluxRSS);
    $costumes = $rss->channel->item;
} catch (Exception $e) {
    echo $e->getMessage();
}
