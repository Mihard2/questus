<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
define('SITE_KEY', '6LeNDuQUAAAAAKeLBd8hPvtjhxCaD8HICUaGX8YB');
define('SEKRET_KEY', '6LeNDuQUAAAAAKJ_NXXi-dwavAsfAwAODu84nDJ0');

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

// /*ОБРАБОТКА ЗАПРОСА*/
// if($_POST){
//     /*СОЗДАЕМ ФУНКЦИЮ КОТОРАЯ ДЕЛАЕТ ЗАПРОС НА GOOGLE СЕРВИС*/
//     function getCaptcha($SecretKey) {
//         $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
//         $Return = json_decode($Response);
//         return $Return;
//     }
    
//     /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
//     $Return = getCaptcha($_POST['g-recaptcha-response']);
//     /*ВЫВОДИМ НА ЭКРАН ПОЛУЧЕННЫЙ ОТВЕТ*/
//     var_dump($Return);
    
//     /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
//     if($Return->success == true && $Return->score > 0.5){
//         echo "<script>alert(\"Your comment has been sent and will soon be published on the site.\");</script>"; 
//     }
//     else {
//         echo "<script>alert(\"Sorry! Your didn't pass the recapcha. Reboot the page and try again.\");</script>"; 
//     }
// }

?>

<form class="col-12 row feedbackForm" method="POST" action="<?=$APPLICATION->GetCurDir()?>">
    <input type="hidden" name="form_id" value="1">
    <div class="row col-12 feedbackForm_wrapp">
        <div class="col-sm-6 col-12 ">
            <input type="text" placeholder="Your name*" name="name" required />
        </div>
        <div class="col-sm-6 col-12 ">
            <input type="email" placeholder="E-mail*" name="email" required />
        </div>
        <div class="col-12">
            <textarea name="message" placeholder="Your message*" required><?=htmlspecialcharsbx($_REQUEST['message'])?></textarea>
        </div>

        <div class="form-valid col-12">
            <div class="row">
            </div>
        </div>
        <div class="col-12 formButton">
            <!-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/>
            <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY?>"></script>
            <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function(token) {
                        console.log(token);
                        document.getElementById('g-recaptcha-response').value=token;
                    });
                });
            </script> -->
            <button class="btn" type="submit">Send a message</button>
        </div>
    </div>
</form>
