<?php

return [
    'resume' => env('MENU_RESUME', 'on'),
    'competences' => env('MENU_COMPETENCES', 'on'),
    'portfolio' => env('MENU_PORTFOLIO', 'on'),
    'galleries' => env('MENU_GALLERIES', 'on'),
    'blog' => env('MENU_BLOG', 'on'),
    'login' => env('MENU_LOGIN', 'on'),
    'register' => env('MENU_REGISTER', 'on'),
    'comments' => [
        'allow_comments' => true,
        'anonymous_comments' => true,
    ],
];
