<?php
include_once("class/Gamer.class.php");

// Create two players
$newPlayerOne = new Gamer("Player", "One");
$newPlayerTwo = new Gamer("Player", "Two");

// Update player's one score
$newPlayerOne->updatePlayersScore(32);
$newPlayerOne->updatePlayersScore(-31);

// Update player's two score
$newPlayerTwo->updatePlayersScore(1020);
$newPlayerTwo->updatePlayersScore(-1212);
$newPlayerTwo->updatePlayersScore(23);
$newPlayerTwo->updatePlayersScore(-11001);

// Remove player one and show information
$output = $newPlayerOne->__destruct();
unset($newPlayerOne);
echo $output;

echo "<br>";

// Remove player two and show information
$output = $newPlayerTwo->__destruct();
unset($newPlayerTwo);
echo $output;

