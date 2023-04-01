<?php
require_once 'Quadrate.php';
require_once 'FiguresCollection.php';

$figuresCollection = new FiguresCollection;

$figuresCollection -> addFigure(new Quadrate(2));
$figuresCollection -> addFigure(new Quadrate(3));

echo $figuresCollection -> getTotalSquare();