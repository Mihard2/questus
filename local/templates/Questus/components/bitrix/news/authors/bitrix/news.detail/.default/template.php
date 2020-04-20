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

<section class="Team-person col-12">
	<header class="row">
		<div class="col-md-5 photo">
			<img
				class="detail_picture"
				src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
				alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
			/>
		</div>
		<div class="col-md-7 personName">
			<h3 class="title"><?=$arResult["NAME"]?></h3>
			<div class="specialty"><?=$arResult["PROPERTIES"]["SPEC"]["VALUE"]?></div>
		</div>
	</header>
	<main class="row">
		<div class="col-md-5">
			<div class="Team-person_title">
				personal profile
			</div>
			<div class="Team-person_text">

				<div class="description"><?=$arResult["PREVIEW_TEXT"]?></div>

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

				<a href="mailto:<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>">
					<i class="icon-mail"></i>
					<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>
				</a>
				<a href="tel:<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>" >
					<i class="icon-phone"></i>
					<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["IN_URL"]["VALUE"]?>" target="_blank">
					<i class="icon-linkedin"></i>
					<?=mb_strimwidth($arResult["PROPERTIES"]["IN_URL"]["VALUE"], 28, 30)?>
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

				<?=$arResult["PROPERTIES"]["WORK"]["~VALUE"]["TEXT"]?>

			</div>

			<div class="Team-person_title">
				education
			</div>	
			<div class="Team-person_text">
			
			<?=$arResult["PROPERTIES"]["EDU"]["~VALUE"]["TEXT"]?>

			</div>
		</div>

	</main>

</section>
