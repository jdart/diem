<?php

echo
$form->open('action=main/search method=get'),

$form['query']->label(__('Query'))->field('.query')->error(),

$form->submit(__('Search')),

$form->close();