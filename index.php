<?php
require_once __DIR__."/models/movie.php";

$kungfupanda = new Movie("Kung Fu Panda", "cartoon","5/5");
echo $kungfupanda->printMovie();

$thewitcher = new Movie("The Witcher", "Fantasy"," 4/5");
echo $thewitcher->printMovie();