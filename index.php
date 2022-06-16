<?php
require('./template/header.php');
?>

<form method="POST" action="boas1.php">

    <label>
        Nome:
        <input type="text" name="nome">
    </label>
    <br>
    <br>
    <label>
        Email:
        <input type="text" name="email">
    </label>
    <br>
    <br>
    <label>
        Data de Nacimento:
        <input type="date" name="data">
    </label>
    <br>
    <br>
    <input type="submit" value="Logar">
    <input type="submit" value="É um ADM?">

</form>