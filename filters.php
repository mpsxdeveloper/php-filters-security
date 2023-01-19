<?php

$email = 'teste@mail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "O e-mail foi validado <br />";
}
else {
    echo "O e-mail não foi validado <br />";
}

$numero = 20;
if(filter_var($numero, FILTER_VALIDATE_INT)) {
    echo "É um número inteiro <br />";
}
else {
    echo "Não é um número inteiro <br />";
}

$html = "Este é o <strong>texto html</strong><br />";
$html = strip_tags($html);
$texto = filter_var($html, FILTER_SANITIZE_SPECIAL_CHARS);
echo $texto;

$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
echo $email;

$prioridade = filter_input(INPUT_POST, 'prioridade', FILTER_VALIDATE_INT, array(
    'options'=>array(
        'min_range'=>1,
        'max_range'=>4,
        'default'=>1
    )
));

echo "PRIORIDADE: ".$prioridade . "<br />";

?>

<hr />
<form method="post">
    <select name="prioridade">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select>
    <input type="submit" value="Enviar" />
</form>