<?php
return [
    'name' => "Salohub Ltd",
    'title' => "Salohub",
    'subtitle' => 'Home of Salary Solutions',
    'description' => 'Home of Salary Solutions',
    'author' => 'Lee Ibrahim',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

