<?php

require_once('utils.php');

$communities = [
    'Rust' => [
        'Telegram di Rust Italia' => 'https://t.me/rustlang_it',
        'Slack di Rust Italia' => 'https://rust-italia.slack.com/',
        'Telegram di Rust Torino' => 'https://t.me/torinorust',
        'Meetup di Rust Milano' => 'https://www.meetup.com/rust-language-milano/',
        'Meetup di Rust Roma' => 'https://www.meetup.com/it-IT/Rust-Roma/'
    ]
];

function getCommunitiesContent($communities)
{
    $content = [];
    foreach ($communities as $community => $links) {
        $communityContent = "<h3>$community</h3><ul>";
        foreach ($links as $linkTitle => $link) {
            $communityContent .= "<li><a href='$link'>$linkTitle</a></li>";
        }
        $communityContent .= '</ul>';
        array_push($content, $communityContent);
    }
    return $content;
}

$contents = getCommunitiesContent($communities);
array_unshift($contents, 'Qui potrete trovare tutte le informazioni relative alle comunità partecipanti al MERGE-it 2021.');

page([
    'title' => 'Collegamenti alle comunità',
    'details' => '',
    'contents' => $contents
]);
