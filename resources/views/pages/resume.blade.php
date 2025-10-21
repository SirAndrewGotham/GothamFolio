<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

$locale = App::getLocale();
$resumePath = resource_path("views/pages/resume/{$locale}.html");

if (file_exists($resumePath)) {
    return Response::file($resumePath, [
        'Content-Type' => 'text/html; charset=utf-8',
    ]);
}

abort(404, 'Resume not available in this language');
