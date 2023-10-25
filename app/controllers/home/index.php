<?php
$title = 'My PHP Router';
$heading = 'Welcome to SafeTrans';
$content = 'This is proof the router works.';
view('home/index', [
    'title' => $title,
    'heading' => $heading,
    'content' => $content
]);