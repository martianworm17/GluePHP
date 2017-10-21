<?php

require_once 'base.php';

use Andaniel05\GluePHP\Tests\Integration\Entities\Components\TextInput;

$button1->on('click', function ($event) {

    $input = new TextInput('input');
    $input->setText('secret');

    $app = $event->getApp();
    $app->appendComponent('body', $input);
});

return $app;