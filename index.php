<?php

require 'init.php';

$app = new App();

$columns = $app->add('Columns');

$left = $columns->addColumn();
$right = $columns->addColumn();

$right->add(['Message', 'Welcome to the party !','info'])->text->addParagraph('Our party is using "Bring your Own" policy , so be sure to grab a beer or a limonade');

$left->add('Form')->setModel(new Guest($app->db));