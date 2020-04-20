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
<pre> -->

<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>

<section class="Team-person col-12">
	<header class="row">
		<div class="col-md-5 photo">
			<img
				class="detail_picture"
				src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
			/>
		</div>
		<div class="col-md-7 personName">
			<h3 class="title"><?=$arItem["NAME"]?></h3>
			<div class="specialty"><?=$arItem["PROPERTIES"]["SPEC"]["VALUE"]?></div>
		</div>
	</header>
	<main class="row">
		<div class="col-md-5">
			<div class="Team-person_title">
				personal profile
			</div>
			<div class="Team-person_text">

				<div class="description"><?=$arItem["PREVIEW_TEXT"]?></div>

			</div>

			<div class="Team-person_title">
				specialty
			</div>
			<div class="Team-person_text">
				<?=$arItem["PROPERTIES"]["SKILLS"]["~VALUE"]["TEXT"]?>
			</div>

			<div class="Team-person_title">
				contact
			</div>
			<div class="Team-person_contacts">

				<a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>">
					<i class="icon-mail"></i>
					<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>
				</a>
				<a href="tel:<?=$arItem["PROPERTIES"]["TEL"]["VALUE"]?>" >
					<i class="icon-phone"></i>
					<?=$arItem["PROPERTIES"]["TEL"]["VALUE"]?>
				</a>
				<a href="<?=$arItem["PROPERTIES"]["IN_URL"]["VALUE"]?>" target="_blank">
					<i class="icon-linkedin"></i>
					<?=mb_strimwidth($arItem["PROPERTIES"]["IN_URL"]["VALUE"], 28, 30)?>
				</a>
				<!-- <a href="<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>
				</a> -->

			</div>
		</div>
		<div class="offset-md-1 col-md-6">
			<div class="Team-person_title">
				work expirience
			</div>
			<div class="Team-person_text">

				<?=$arItem["PROPERTIES"]["WORK"]["~VALUE"]["TEXT"]?>

			</div>

			<div class="Team-person_title">
				education
			</div>	
			<div class="Team-person_text">
			
			<?=$arItem["PROPERTIES"]["EDU"]["~VALUE"]["TEXT"]?>

			</div>
		</div>

	</main>

</section>

<button title="Close (Esc)" type="button" class="mfp-close">×</button>
<?}?>




<!-- 
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
					<a href="mailto:<?=$arItem['PROPERTIES']['EMAIL']['VALUE']?>"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></a>
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
<?}?> -->
