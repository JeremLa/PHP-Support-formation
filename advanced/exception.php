<?php
echo '<a href="advanced.php">&larr; Retour</a><br><br>';

echo 'Il est possible de déclencher manuellement l\'affichage d\'une exeption';
echo '<br>';

/**
 * @throws Exception
 */
function testException () {
    throw new Exception('Erreur auto généré !');
}


echo '<br><br>';

echo 'Dans notre code, on peut définir des actions à mener quand une exeption est levé avec le bloc try / catch';
echo '<br>';
echo 'Il est possible de prévoir des actions selon l\'exeption et avoir un catch par erreur.';
echo '<br><br>';

try {
    testException();
}catch (Exception $e) {
    echo $e;
}

echo '<br><br>';

echo 'Il est possible, pour une meilleur lisibilité, de n\'afficher que le message. ($e->getMessage)';
echo '<br><br>';

try {
    testException();
}catch (Exception $e) {
    echo $e->getMessage();
}

echo '<br><br>';
echo 'Oui, une exeption, c\'est un objet.';
echo '<br>';
echo 'Si c\'est un objet, ça veut donc dire que l\'on peut l\'étendre et personnaliser nos exeptions.';
echo '<br><br>';

class MonException extends Exception {
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return $this->message;
    }
}

/**
 * @throws MonException
 */
function testException2 () {
    throw new MonException('Test étendre l\'objet Exception de PHP', 400);
}

/**
 * On catch l'exception que l'on vient de créer
 */

try {
    testException2();
} catch (MonException $e) {
    echo $e;
}

echo 'Bien utiliser les exeptions, c\'est aussi utiliser ce qui existe déjà.';
echo '<br><br>';

/**
 * @param $a
 * @throws HttpInvalidParamException
 */
function invalidParam ($a) {
    if(!is_numeric($a)){
        throw new HttpInvalidParamException();
    }
}

try {
    invalidParam('string');
} catch (HttpInvalidParamException $e) {
    echo $e;
}

echo '<br><br>';

echo 'Dans certain cas, qu\'une exeption soit levé ou pas, on veut que certaine ligne de code soit quand même executé.';
echo '<br>';
echo 'Dans ce cas il existe le mot clé finaly.';
echo '<br><br>';

try {
    invalidParam('string');
} catch (HttpInvalidParamException $e) {
    echo $e;
} finally {
    echo '<br>';
    echo 'Je suis executé exception ou pas';
}

echo '<br><br>';