<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="no-cache"> 
    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/static/css/style.css');?>
</head>
<body>
  <?$APPLICATION->ShowPanel();?>
    <header class="mainHeader">
        <div class="container">
            <div class="row mainHeader-block">
                <?if ($APPLICATION->GetCurPage(false) === '/'):?>
                  <span class="col-xl-3 col-md-6 col-6 logo"></span>
               <?else:?>
                  <a href="/" class="col-xl-3 col-md-6 col-6 2 logo"></a>
               <?endif;?>
                <div class="col-xl-6 col-md-12 col-6 menu">

                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_multi", Array(
                	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"DELAY" => "N",	// Откладывать выполнение шаблона меню
                		"MAX_LEVEL" => "2",	// Уровень вложенности меню
                		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                			0 => "",
                		),
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                	),
                	false
                );?>

                      <!-- <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
                      	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                      		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
                      		"DELAY" => "N",	// Откладывать выполнение шаблона меню
                      		"MAX_LEVEL" => "1",	// Уровень вложенности меню
                      		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                      		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                      		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
                      		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                      		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                      		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                      		"COMPONENT_TEMPLATE" => ".default"
                      	),
                      	false
                      );?> -->
                </div>
                <div class="col-xl-3 col-md-6 contacts">
                    <a href="javascript:void(0)" class="contacts-mail col-12">
                        <i class="icon-mail-1"></i>
                        info@hatfactory.com
                    </a>                    
                    <a class="col-3">
                        <i class="icon-linkedin"></i>
                    </a>
                    <a class="col-3">
                        <i class="icon-facebook"></i>
                    </a>
                    <a class="col-3">
                        <i class="icon-instagram"></i>
                    </a>
                    <a class="col-3">
                        <i class="icon-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
