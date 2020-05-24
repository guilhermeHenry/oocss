<?php
ob_start();
session_start();

require 'vendor/autoload.php';
define('SITE_BASE', 'http://localhost/oocss');

// namespace
use Rain\Tpl;

// config
$config = array(
    "base_url"      => SITE_BASE,
    "tpl_dir"       => "pages/",
    "cache_dir"     => "cache/",
    "debug"         => true // set to false to improve the speed
);

Tpl::configure( $config );

$titles = array(
	'home' => 'Página Inicial',
	'buttons' => 'Botões',
	'form' => 'Formulários',
	'form-checkbox' => 'Checkboxs',
	'404' => '404 Nada foi Encontrado',
	'trigger-errors' => 'Tratamento de erros'
);
$url = filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
$path = "pages/{$url}.html";

if (!$path OR !file_exists($path) OR is_dir($path)):
	header('Location: index.php?action=404');
	$path = "pages/404.html";
endif;

// draw
$tpl = new Tpl;
$tpl->assign('title', $titles[$url]);
// if ($url === 'form'):
// 	$tpl->assign('submenu', array(
// 		'Inputs' => 'input',
// 		'Buttons' => 'Botões'
// 	));
// endif;
$tpl->assign('links', $titles);
$tpl->assign('active', $url);
$tpl->assign('maintitle', 'maintitle');
$tpl->assign('url', $url);
$tpl->draw('main');

ob_end_flush();