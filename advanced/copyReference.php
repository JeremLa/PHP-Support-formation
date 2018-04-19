<?php
echo '<a href="advanced.php">&larr; Retour</a><br><br>';

echo 'Lorsque l\'on envoie des données à une fonction, il faut avoir conscience qu\'elles sont envoyées par copie ou par référence';
echo '<br>';
echo 'Visualisons bien, la déclaration de variable en PHP s\'apparente à deux tableaux.';
echo '<br>';
echo 'Un tableau détient le nom des variables déclarées';
echo '<br>';
echo 'Un tableau détient les valeurs contenuent dans ces variables, appelées également références';
echo '<br><br>';
echo 'Si j\'envoie une variable de type simple à une fonction, c\'est une copie (int, string, bool, etc...)';
echo '<br><br>';

$a = 10;

function double (int $a) {
    return $a * 2;
}

double($a);

echo 'On appelle la fonction double pour la variable $a qui vaut 10 : '.$a;
echo '<br>';
echo '$a vaut toujours 10 parce qu\'il faut réafecter le retour de notre fonction dans la variable quand on est dans le cas d\'une copie';
echo '<br>';
$a = double($a);
echo 'On appelle la fonction double en affectant le retour de la fonction à la variable $a : '.$a;
echo '<br><br>';
echo 'Pour un tableau, le passage en paramètre est également une copie';
echo '<br><br>';
$array = [1, 2, 3];

function incrementArray (array $array) {
    array_push($array, count($array));
    return $array;
}

echo 'On appelle la fonction incrementArray pour la variable $array : ';
incrementArray($array);
var_dump($array);
echo '<br><br>';
echo 'On appelle la fonction incrementArray en affectant le retour de la fonction à la variable $array : ';
$array = incrementArray($array);
var_dump($array);
echo '<br><br>';

class Foo{
    private $bar = 0;

    /**
     * @return mixed
     */
    public function getBar() : int
    {
        return $this->bar;
    }

    /**
     * @param mixed $bar
     */
    public function setBar(int $bar): void
    {
        $this->bar = $bar;
    }


}

$foo = new Foo;

function changeBar (Foo $foo) {
    $foo->setBar(4);
}

echo 'Pour un objet, c\'est différent, il est passé par référence';
echo '<br>';
changeBar($foo);
var_dump($foo);
echo '<br><br>';
echo 'Un cas un peu particulier, on souhaite apporter des modifications à des données dans un tableau à deux dimentions';
echo '<br><br>';

function plusDeux () {
    $doubleArray = ['paires' => [2, 4, 6], 'impaires' => [1, 2, 3]];

    foreach ($doubleArray as $key=>$array) {
        echo $key.' : ';
        echo '<br><br>';
        foreach ($array as $value) {
            echo 'avant : '.$value;
            echo '<br>';
            $value += 2;
            echo 'après : '.$value;
            echo '<br>';
        }
        echo '<br><br>';
    }

    var_dump($doubleArray);
}

echo '<br><br>';
echo 'Malgré les modifications qui sont affiché, notre tableau n\'a pas changé du tout.';
echo '<br>';
echo 'Dans une boucle foreach aussi on passe une copie.';
echo '<br>';
echo 'Mais PHP prévois, pour une fonction ou tout autre passage en copie, la possibilité de forcer le passage par référence.';
echo '<br>';
echo 'Il suffit de précéder la variable d\'une esperluette (<b>&</b>';
echo '<br><br>';

function plusDeuxReference () {
    $doubleArray = ['paires' => [2, 4, 6], 'impaires' => [1, 2, 3]];

    foreach ($doubleArray as $key=>&$array) {
        echo $key.' : ';
        echo '<br><br>';
        foreach ($array as &$value) {
            echo 'avant : '.$value;
            echo '<br>';
            $value += 2;
            echo 'après : '.$value;
            echo '<br>';
        }
        echo '<br><br>';
    }

    var_dump($doubleArray);
}

echo '<br><br>';