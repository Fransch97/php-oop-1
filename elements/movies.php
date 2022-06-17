<?php

    require_once __DIR__ . '/../class/movie.php';
    
    $titolo1 = 'Giustizia privata';
    $genre1 = ['Thriller'];
    $release_date1 = '12009/10/16';
    $studio1 = 'Moviemax';

    
    $titolo2 = 'Vendetta privata';
    $genre2 = ['Science fiction', 'Drama'];
    $release_date2 = '2015/07/30';
    $studio2 = 'Universal Pictures';



    $film = new Movie($titolo1 , $genre1, $release_date1, $studio1);
    $movie = new Movie($titolo2, $genre2, $release_date2, $studio2);

    $films = [$film, $movie];