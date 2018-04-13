<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';

echo '<i>';
echo "
    La déclaration d'une function se fait avec le schema suivant :<br>
    <br>
    function <b>nom de la fonction</b> (<b>params1</b>, <b>params2</b>, <b>params3</b>, ...) {<br>
    ".str_repeat('&nbsp;', 4)."<b>...code</b><br>  
    }
";
echo '</i>';
echo '<br><br>';

function sansType($param1) {
    return '';
}

echo '<i>';
echo "
    Il est possible d'imposer un type au paramètre attendu en ajoutant le type devant le nom du paramètre.<br>
    Cette contrainte peut être imposée au retour de la fonction également.
";
echo '</i>';
echo '<br><br>';

function avecType(int $param1, array $param2, bool $param3, string $param4) : object {
    return '';
}

echo '<i>';
echo "
    Encore mieux, il est possible de typer le retour mais qu'il puisse aussi être nul avec un <b>?</b>
";
echo '</i>';
echo '<br><br>';

function multiReturnType($params) : ?float {
    return '';
}

echo '<i>';
echo "
    N'oubliez pas d'enregistrer dans une variable la valeur de retour d'une fonction si vous souhaitez la manipuler.
";
echo '</i>';
echo '<br><br>';

$a = 10;

function double(int $toDouble) : int{
    return $toDouble * 2;
}

double($a);
echo $a;
echo '<br><br>';

$a = double($a);
echo $a;
echo '<br><br>';

echo '<i>';
echo "
    En PHP il est possible de mettre une valeur par défaut à un paramètre.
";
echo '</i>';
echo '<br><br>';

function afficherMessage(string $message = 'Hello World !'){
    echo $message;
}

afficherMessage();
