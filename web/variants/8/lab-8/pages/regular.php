<?php
$word = 'роф';
var_dump($word);
preg_match("/^[а-яА-ЯёЁa-zA-Z]*$/", $word);