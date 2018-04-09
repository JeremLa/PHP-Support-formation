<?php
echo '<a href="../index.php">&larr; Accueil</a><br><br>';


class foo {
    private $a = 'a';
    private $b = 'b';
    private $c = 'c';

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function __toString()
    {
        return $this->a.' '.$this->b.' '.$this->c;
    }

    public function setA($value) {
        $this->a = $value;
    }

}

$foo1 = new foo('a', 'b', 'c');
$foo2 = $foo1;
echo $foo1;
echo '<br><br>';
echo $foo2;
echo '<br><br>';
$foo1->setA('Z');
echo $foo2;
echo '<br><br>';
$a = 1;
$b = $a;
$a++;
echo $a;
echo '<br>';
echo $b;
echo '<br><br>';