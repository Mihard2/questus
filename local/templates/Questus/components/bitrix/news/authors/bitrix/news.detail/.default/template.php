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
				skills
			</div>
			<div class="Team-person_text">
				<ul>
					<li>
						skill 1 skill 1 skill 1skill 1 skill 1 skill 1
					</li>
					<li>
						skill 1 skill 1 skill 1skill 1 skill 1 skill 1
					</li>
					<li>
						skill 1 skill 1 skill 1skill 1 skill 1 skill 1
					</li>
					<li>
						skill 1 skill 1 skill 1skill 1 skill 1 skill 1
					</li>
					<li>
						skill 1 skill 1 skill 1skill 1 skill 1 skill 1
					</li>
				</ul>
			</div>

			<div class="Team-person_title">
				contact
			</div>
			<div class="Team-person_contacts">

				<a href="<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["IN_URL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["IN_URL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>
				</a>

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



<!-- 
<div class="Team-person col-12">
	<div class="row">
		<div class="col-12">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h3 class="title"><?=$arResult["NAME"]?></h3>
			<?endif;?>
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["PREVIEW_PICTURE"])):?>
				<img
					class="detail_picture"
					src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
					alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			<?endif?>
			<div class="specialty"><?=$arResult["PROPERTIES"]["SPEC"]["VALUE"]?></div>
		</div>

		<div class="col-6 Team-person_info">
			<div class="Team-person_info-block">
				<span>Education:</span>
				<?=$arResult["PROPERTIES"]["EDU"]["~VALUE"]["TEXT"]?>
			</div>
			<div class="Team-person_info-block">
				<span>Work:</span>
				<?=$arResult["PROPERTIES"]["WORK"]["~VALUE"]["TEXT"]?>
			</div>

			<div class="Team-person_info-contacts">
				<span>Contacts:</span>
				
				<a href="<?=$arResult["PROPERTIES"]["IN_URL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["IN_URL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["CAST_URL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["BLOG_URL"]["VALUEБ"]?>">
					<?=$arResult["PROPERTIES"]["BLOG_URL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["TEL"]["VALUE"]?>
				</a>
				<a href="<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>">
					<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>
				</a>
			</div>
		</div>

		<div class="col-6 Team-person_info">
			<div class="description"><?=$arResult["PREVIEW_TEXT"]?></div>
		</div>
	</div>
</div>
 -->

<!-- <pre>
	<?print_r($arResult)?>
<pre> -->
<!-- <pre>
	<?print_r($arParams)?>
<pre> -->


<!-- 
	
<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?> -->