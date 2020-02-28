<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="menu-main menu-main_mobile">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>

		<li <?if($arItem["SELECTED"]):
			?> class="active"<?endif
			?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

<?endforeach?>

</ul>
<a href="javascript:void(0)" class="menu-link">
		<span></span>
</a>

<?endif?>
