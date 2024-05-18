<?php

declare(strict_types=1);



function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "Mañana se estrena",
        $days < 7   => "Esta semana se estrena",
        $days < 30 => "Este mes se esterna",
        default    => "$days días hasta el estreno",
    };
}
