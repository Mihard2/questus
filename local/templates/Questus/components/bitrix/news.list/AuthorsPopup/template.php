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
	<?print_r($arResult)?>
</pre> -->

<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
<div class="row">
 	<div class="col-md-4 desc-info">
		<img 	src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
			alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
			title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">

			<div class="telephone personalInfo">
					<span>Telephone</span>
					<a href="tel:<?=$arItem['PROPERTIES']['TEL']['VALUE']?>"><?=$arItem['PROPERTIES']['TEL']['VALUE']?></a>
			</div>
			<div class="email personalInfo">
					<span>Email</span>
					<a href="tel:"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></a>
			</div>

			<div class="links">
				<a href="/catalog/?<?=$_SERVER["QUERY_STRING"]?>&author=<?=$arItem['ID']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="btn">materials</a>
			</div>
			<div class="education personalInfo">
					<span>Education</span>
					<?=$arItem['PROPERTIES']['EDU']['VALUE']['TEXT']?>
			</div>
			<div class="work-eperience personalInfo">
					<span>Work Experience</span>
					<?=$arItem['PROPERTIES']['WORK']['VALUE']['TEXT']?>
			</div>
 	</div>

 	<div class="col-md-8 main-info">
		 <div class="row">
		 	<div class="col-md-10">
			 	<div class="name"><?=$arItem["NAME"];?></div>
			 	<div class="position"><?=$arItem['PROPERTIES']['SPEC']['VALUE']?></div>
			</div>
			<a class="col-md-2" href="<?=$arItem['PROPERTIES']['IN_URL']['VALUE']?>" target="_blank">
		 	 	<i class="icon-linkedin"></i>
			 </a>
 			<div class="main-desc col-md-12">
 				<p><?=$arItem["PREVIEW_TEXT"];?></p>
			</div>
		</div>
 	</div>
</div>
<button title="Close (Esc)" type="button" class="mfp-close">×</button>
<?}?>
