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

<form id="feedbackForm" class="mfp-hide" method="POST" action="<?=$APPLICATION->GetCurDir()?>">
    <input type="hidden" name="form_id" value="2">
    <h2 class="h1">Обратная связь</h2>
    <div class="row">
        <?if( $arResult['WAS_SEND'] === true ):?>
            <div class="formField col-xs-12">
                <?if( $arResult['SEND_RESULT'] === false ):?>
                    <p style="color: #d12">Ошибка при заполнении формы:<br/><?=implode('<br/>', $arResult['ERROR_TEXT'])?></p>
                <?else:?>
                    <p style="color: #22bb22">Сообщение успешно отправлено!</p>
                <?endif;?>
            </div>
        <?endif;?>
        <?if( $arResult['SEND_RESULT'] === false  ):?>
            <div class="formField col-xs-12">
<input type="text" placeholder="Представьтесь, пожалуйста*" name="name" required /></div>
            <div class="formField col-xs-12 col-sm-6">
 <input type="text" placeholder="Контактный телефон*" name="phone" required/></div>
            <div class="formField col-xs-12 col-sm-6">
<input type="text" placeholder="Электронная почта*" name="email" required /></div>
            <div class="formField col-xs-12">
<textarea name="message" placeholder="Ваше сообщение*" required><?=htmlspecialcharsbx($_REQUEST['message'])?></textarea></div>
            <div class="formField col-xs-12">
	<div class="row">
    <div class="col-xs-7">


                <?$code=$APPLICATION->CaptchaGetCode();?>
                <input type="hidden" name="captcha_sid" value="<?=$code;?>" />
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$code;?>" />
		</div><div class="col-xs-5">&nbsp;<br/>

                <input type="text" name="captcha_word" required />
</div></div>
            </div>

            <div class="col-xs-12 formButton formField">
                <button class="btn" type="submit">Отправить сообщение</button>
            </div>
        <?endif;?>
    </div>
    <input type="hidden" name="FORM_SEND" value="Y" />
</form>
