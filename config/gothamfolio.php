<?php

return [
    'banner' => env('GF_BANNER', 'on'),
    'features' => env('GF_FEATURES', 'on'),
    'resume' => env('GF_RESUME', 'on'),
    'competences' => env('GF_COMPETENCES', 'on'),
    'portfolio' => env('GF_PORTFOLIO', 'on'),
    'galleries' => env('GF_GALLERIES', 'on'),
    'blog' => env('GF_BLOG', 'on'),
    'contacts' => env('GF_CONTACTS', 'on'),
    'login' => env('GF_LOGIN', 'on'),
    'register' => env('GF_REGISTER', 'on'),
    'comments' => [
        'allow_comments' => true,
        'anonymous_comments' => true,
    ],
    'admin_password' => env('ADMIN_PASSWORD', 'password'),
];
