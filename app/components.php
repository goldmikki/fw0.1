<?php 
use Kernel\Components;
// Components::create('componentName', ['path to view' => [
// 	'controller@action',
// 	'controller2@action2'
// ]]);

Components::create('test', ['default-layouts/head' => [
	'IndexController@qwerty'
]]);