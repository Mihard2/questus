<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/catalog/([a-zA-Z0-9\\-]+)/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/podcast/([a-zA-Z0-9\\-]+)/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/podcast/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/video/([a-zA-Z0-9\\-]+)/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/video/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/mater/([a-zA-Z0-9\\-]+)/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/mater/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/blog/([a-zA-Z0-9\\-]+)/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/products/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/team/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/team/index.php',
    'SORT' => 100,
  ),
);
