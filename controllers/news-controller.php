<?php
$fluxRSS = 'https://www.oscars.org/feed/latest-academy-news';

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
