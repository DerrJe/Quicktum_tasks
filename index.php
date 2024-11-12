<?php
require 'SyntaxChecker.php';

$syntax = new SyntaxChecker('{{lajkdhf{adfa}{}adfasdfadf{}}}');
echo $syntax->isCorrect() ? 'Корректный код' : 'Некорректный код';
?>