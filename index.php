<?php
class Movies
{
    public $titolo;
    public $genere;
    public $anno;

    public function __construct($titolo, $genere, $anno)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno = $anno;
    }

    public function getFullMovie()
    {
        return "$this->titolo <br> $this->genere <br> $this->anno";
    }
}

$film1 = new Movies("Bullet train", "Azione/Thriller", 2022);
$film2 = new Movies("Iron man", "Azione", 2008);


var_dump($film1);
var_dump($film2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
    <h1>Movie 1</h1>
    <p><?php echo $film1->getFullMovie(); ?></p>


    <h1>Movie 2</h1>
    <p><?php echo $film2->getFullMovie(); ?></p>

</body>

</html>