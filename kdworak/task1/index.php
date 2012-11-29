<?php
    include 'loader.php';
    $player = new Player('Kamil', 'Dworak');
    $score = $player->GetScore();
    $score->AddPoints(100);
    $score->SubPoints(50);
    $player->UpdateScore(666);