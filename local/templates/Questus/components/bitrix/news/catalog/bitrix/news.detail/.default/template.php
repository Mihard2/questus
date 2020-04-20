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
$countRes = count($arResult['COMMENTS_COUNT']);

?>

<pre>
	<?print_r($arResult)?>
</pre>



<div class="detailPost">
	<div class="container">
        <section class="row">
			<header class="col-12">
				<h1><?=$arResult["NAME"]?></h1>

				<?if(!empty($arResult["PROPERTIES"]["LINK_YOUTUBE"]['VALUE'])):?>
					<iframe src="https://www.youtube.com/embed/<?=$arResult["PROPERTIES"]["LINK_YOUTUBE"]['VALUE']?>"></iframe>
					<? elseif($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["PREVIEW_PICTURE"])):?>
							<img
							class="detail_picture"
							border="0"
							src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
							width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
							height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
							alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
							/>
				<?endif;?>

				<?if(!empty($arResult["DISPLAY_PROPERTIES"]["AUDIO_UPLOAD"]["FILE_VALUE"]['SRC'])):?>
					<div class="audiojs_bg">
						<audio controls
	       					 src="<?=$arResult["DISPLAY_PROPERTIES"]["AUDIO_UPLOAD"]["FILE_VALUE"]['SRC']?>">
	    		    	    Your browser does not support the
	    		    	    <code>audio</code> element.
	    				</audio>
					</div>
				<?endif;?>

				<?if(!empty($arResult["PROPERTIES"]["SIDE_RES"]['VALUE'])):?>
					<a href="<?=$arResult["PROPERTIES"]["SIDE_RES"]['VALUE']?>">
						Ссылка на внешний источник
					</a>
				<?endif;?>

				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["PREVIEW_TEXT"]):?>
					<div class="shortDesc"><?=$arResult["PREVIEW_TEXT"];unset($arResult["PREVIEW_TEXT"]);?></div>
				<?endif;?>

			</header>
			<article class="col-12">
				<?$APPLICATION->IncludeComponent(
				    "sprint.editor:blocks",
				    ".default",
				    Array(
				        "ELEMENT_ID" => $arResult["ID"],
				        "IBLOCK_ID" => $arResult["IBLOCK_ID"],
				        "PROPERTY_CODE" => "EDITOR1",
				    ),
				    $component,
				    Array(
				        "HIDE_ICONS" => "Y"
				    )
				);?>
				<!-- <?if($arResult["NAV_RESULT"]):?>
					<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
					<?echo $arResult["NAV_TEXT"];?>
					<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
				<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
					<?echo $arResult["DETAIL_TEXT"];?>
				<?else:?>
					<?echo $arResult["PREVIEW_TEXT"];?>
				<?endif?> -->
			</article>
			<footer class="col-12">
					<div class="row">
						<div class="col-7 tags">
							Tags:
							<span class="tag"><?=$arResult["TAGS"]?></span>
						</div>
						<div class="offset-2 col-3 comments">
							<span>
								<b><? echo $countRes?></b>
							</span>
							comments
						</div>
					</div>
			</footer>
		</section>
	</div>
</div>



<div class="infoPost container">
        <div class="share row">
            <a href="javascript:void(0)" class="col-sm-2 switch-prev">
                <div class="left switch">
                    <i class="icon-left"></i>
                    Previous
                </div>
                Lorem ipsum dolor sit amet, consectetur adipiscing
            </a>
            <div class="col-sm-8 share-block">
                <div class="share-title">share</div>
                <div class="share-links">
					<script type="text/javascript">(function() {
					  if (window.pluso)if (typeof window.pluso.start == "function") return;
					  if (window.ifpluso==undefined) { window.ifpluso = 1;
					    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
					    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
					    var h=d[g]('body')[0];
					    h.appendChild(s);
					  }})();</script>
					<div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=04" data-services="facebook,linkedin,email"></div>
                </div>
            </div>
            <a href="javascript:void(0)" class="col-sm-2 switch-next">
                <div class="right switch">
                    Next
                    <i class="icon-right"></i>
                </div>
                Quis ipsum suspendisse ultrices gravida
            </a>
	</div>
	<?
		$APPLICATION->IncludeComponent("linetime:comments", "",
		 array(
			"POST_ID" => $arResult["ID"],
		));
	?>
</div>




<!-- <div class="news-detail-share">
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
</div> -->







<!-- <div class="news-detail">
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
	?>
</div> -->
