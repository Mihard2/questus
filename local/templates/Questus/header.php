<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    
    <meta name="yandex-verification" content="0d708ea873e9624a" />
    
    <?\Bitrix\Main\Page\Asset::getInstance()->addJs('//www.google.com/recaptcha/api.js');?> 

    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle("Growwithexo")?></title>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/static/css/style.css');?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="mainWrapper">
        <div class="mainContent">

  <?$APPLICATION->ShowPanel();?>
    <header class="mainHeader">
        <div class="container">
            <div class="row mainHeader-block">
                <?if ($APPLICATION->GetCurPage(false) === '/'):?>
                  <span class="col-md-3 col-6 logo"></span>
               <?else:?>
                  <a href="/" class="col-md-3 col-6 logo"></a>
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

                </div>
                
                <div class="col-xl-3 offset-xl-0 offset-md-3 col-md-6 contacts">
                    <a href="mailto:info@growwithexo.com" class="contacts-mail col-12">
                         <i class="icon-mail-1"></i>
                         info@growwithexo.com
                    </a>   
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:main.include",
                    	"",
                    	Array(
                    		"AREA_FILE_SHOW" => "file",
                    		"AREA_FILE_SUFFIX" => "inc",
                    		"EDIT_TEMPLATE" => "",
                    		"PATH" => "/include/headSocNet.php"
                    	)
                    );?>
                    <a href="javascript:void(0)" class="col-3 searchLink">
                       <i class="icon-search"></i>
				        <form action="/search/" method="GET">
				        		<input type="search" name="q" id="" placeholder="Enter keyword search...">
				        		<button type="submit"><i class='icon-search'></i></button>
				        </form>
                    </a>
                </div>
            </div>
        </div>
    </header>
