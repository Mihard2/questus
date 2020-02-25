<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

	<!-- <pre>
		<?print_r($arResult['ITEMS']);?>
    </pre> -->


<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
<div class="row">
 <div class="col-md-4 desc-info">
	<img 	src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
		alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
		title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
		<div class="links">
				<a href="" class="btn">cases</a>
				<a href="" class="btn">blog</a>
		</div>
		<div class="education">
				<span>Education</span>
				<?=$arItem['PROPERTIES']['EDU']['VALUE']['TEXT']?>
		</div>
		<div class="work-eperience">
				<span>Work Experience</span>
				<?=$arItem['PROPERTIES']['WORK']['VALUE']['TEXT']?>
		</div>
 </div>

 <div class="col-md-8 main-info">
 		<div class="name"><?=$arItem["NAME"];?></div>
 		<div class="position"><?=$arItem['PROPERTIES']['SPEC']['VALUE']?></div>
 		<div class="main-desc">
 			<p><?=$arItem["PREVIEW_TEXT"];?></p>
 		</div>
 </div>
</div>
<button title="Close (Esc)" type="button" class="mfp-close">×</button>
<?}?>
