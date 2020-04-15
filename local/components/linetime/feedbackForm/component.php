<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule("iblock");
$arResult = array();
$arResult['WAS_SEND'] = false;
$arResult['SEND_RESULT'] = false;
$error = true;
$secret = '6LeNDuQUAAAAAKeLBd8hPvtjhxCaD8HICUaGX8YB';
if (!empty($_POST['g-recaptcha-response'])) {
	$out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
	$out = json_decode($out);
	if ($out->success == true) {
		$error = false;
	} 
}

if( !empty($_REQUEST['FORM_SEND']) && $_REQUEST["form_id"] == 1){
    $arResult['WAS_SEND'] = true;
    $arResult['SEND_RESULT'] = false;
    if(
        !empty($_REQUEST['name']) &&
        !empty($_REQUEST['email']) &&
        !empty($_REQUEST['message'])
    ){

        if($error){
            $arResult['ERROR_TEXT'] = array();
            $arResult['ERROR_TEXT'][] = 'Code word entered incorrectly';
        }
        else{
            $arEventFields = array(
                "NAME" => $_REQUEST['name'],
                "EMAIL" => $_REQUEST['email'],
                "MSG" => $_REQUEST['message']
            );
            $arResult['SEND_RESULT'] = CEvent::Send("WBL_FEEDBACK", SITE_ID, $arEventFields);
            if( $arResult['SEND_RESULT'] ){
                $el = new CIBlockElement;

                $PROP = array();
                $PROP[12] = "Белый";  // свойству с кодом 12 присваиваем значение "Белый"
                $PROP[3] = 38;        // свойству с кодом 3 присваиваем значение 38

                $arLoadProductArray = Array(
                    "IBLOCK_ID" => 13,
                    "NAME" => $_REQUEST['name'].' | '.$_REQUEST['email'],
                    "ACTIVE" => "Y",            // активен
                    "PREVIEW_TEXT" => "Name: ".$_REQUEST['name']."\r\nE-mail: ".$_REQUEST['email']."\r\nMessage: ".$_REQUEST['message'],
                    "PREVIEW_TEXT_TYPE" => "text",
                );
                $el->Add($arLoadProductArray);
            }
        }
    }
    else{
        $arResult['ERROR_TEXT'] = array();
        if( empty($_REQUEST['name']) ) $arResult['ERROR_TEXT'][] = 'Name not filled';
        if( empty($_REQUEST['email']) ) $arResult['ERROR_TEXT'][] = 'E-mail is not full';
        if( empty($_REQUEST['message']) ) $arResult['ERROR_TEXT'][] = 'No message entered';
        // if( empty($_REQUEST['captcha_word']) ) $arResult['ERROR_TEXT'][] = 'No code word entered';
    }
}
if(!empty($_REQUEST['FORM_SEND']) && $_REQUEST["form_id"] == 2)
{
    $arResult['WAS_SEND_SUBSCRIBE'] = true;
    $arResult['SEND_RESULT'] = false;
    if(
        !empty($_REQUEST['email-sub'])
    ){
        $arEventFields = array(
            "EMAIL" => $_REQUEST['email-sub'],
        );
        $arResult['SEND_RESULT'] = CEvent::Send("WBL_FEEDBACK", SITE_ID, $arEventFields);
        if( $arResult['SEND_RESULT'] ){
            $el = new CIBlockElement;
            
            $PROP = array();
            $PROP[12] = "Белый";  // свойству с кодом 12 присваиваем значение "Белый"
            $PROP[3] = 38;        // свойству с кодом 3 присваиваем значение 38
            
            $arLoadProductArray = Array(
                "IBLOCK_ID" => 12,
                "NAME" => $_REQUEST['email-sub'],
                "ACTIVE" => "Y",            // активен
            );
            $el->Add($arLoadProductArray);
        }
    }
    else{
        $arResult['ERROR_TEXT'] = array();
        if( empty($_REQUEST['email-sub']) ) $arResult['ERROR_TEXT'][] = 'E-mail is not full';
    }

}

$this->IncludeComponentTemplate();
