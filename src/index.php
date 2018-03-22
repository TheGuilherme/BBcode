<?php

require_once './BBCode.php';

$bbcode = new BBCode;

echo $bbcode->replace('Negrito [b]Teste[/b]') . '<br>';
echo $bbcode->replace('Itálico  [i]Teste[/i]') . '<br>';
echo $bbcode->replace('Sublinhar [u]Teste[/u]') . '<br>';
echo $bbcode->replace('Link [url=www.google.com]Teste[/url]') . '<br>';
echo $bbcode->replace('Image [img]http://www.supportforum.philips.com/br/images/statusicon/forum_new-48.png[/img]') . '<br>';