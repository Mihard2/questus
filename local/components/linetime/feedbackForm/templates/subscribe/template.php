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

<form id="formSabscribe" class="formSabscribe" method="POST" action="<?=$APPLICATION->GetCurDir()?>">
    <input type="hidden" name="form_id" value="2">
        <?if( $arResult['WAS_SEND_SUBSCRIBE'] === true ):?>
            <p class="valid-massege">Message sent successfully!</p>
        <?endif;?>
        
        <input type="email" placeholder="Email" name="email-sub" required>
        <button type="submit">subscribe</button>
    <input type="hidden" name="FORM_SEND" value="Y" />
</form>
