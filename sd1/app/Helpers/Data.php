<?php

function conferences()
{
    return [
        1 => [
            'id' => 1,
            'title' => 'Laravel pagrindai',
            'description' => 'Konferencija apie Laravel karkaso pagrindus.',
            'speakers' => 'Jonas Jonaitis',
            'date' => '2026-03-15',
            'time' => '10:00',
            'address' => 'Vilnius',
        ],

        2 => [
            'id' => 2,
            'title' => 'Web dizaino tendencijos',
            'description' => 'Konferencija apie dizainą.',
            'speakers' => 'Ona Onaitytė',
            'date' => '2026-03-20',
            'time' => '12:00',
            'address' => 'Kaunas',
        ],
    ];
}

function users()
{
    return [
        1 => [
            'id' => 1,
            'name' => 'Lukas',
            'surname' => 'Kazlauskas',
            'email' => 'lukas@example.com',
        ],

        2 => [
            'id' => 2,
            'name' => 'Ieva',
            'surname' => 'Petrauskaitė',
            'email' => 'ieva@example.com',
        ],
    ];
}