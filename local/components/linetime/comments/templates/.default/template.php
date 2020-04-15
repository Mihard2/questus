<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
define('SITE_KEY', '6LeNDuQUAAAAAKeLBd8hPvtjhxCaD8HICUaGX8YB');
define('SEKRET_KEY', '6LeNDuQUAAAAAKJ_NXXi-dwavAsfAwAODu84nDJ0');

/*ОБРАБОТКА ЗАПРОСА*/
if($_POST){
    /*СОЗДАЕМ ФУНКЦИЮ КОТОРАЯ ДЕЛАЕТ ЗАПРОС НА GOOGLE СЕРВИС*/
    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    
    /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    /*ВЫВОДИМ НА ЭКРАН ПОЛУЧЕННЫЙ ОТВЕТ*/
    // var_dump($Return);
    
    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success == true && $Return->score > 0.5){
        echo "<script>alert(\"Your comment has been sent and will soon be published on the site.\");</script>"; 
        }
    else {
        echo "<script>alert(\"Sorry! Your didn't pass the recapcha. Reboot the page and try again.\");</script>"; 
    }
}

?>

<div class="row comments-block">
    <div class="live-reply col-sm-8">
        <form action="<?=$_SERVER["REQUEST_URL"]?>" method="POST">
            <fieldset>
                <legend>live a reply</legend>
                <label>Your email address will not be published. Required fields are marked *</label>
                <div class="input-wrap">
                    <input type="text" name="name" id="text" placeholder="your name*" required>
                    <input type="email" name="email" id="email" placeholder="email*" required>
                </div>
                <textarea name="comment" id="text" placeholder="Message*" rows="6" minlength="15" maxlength="500" required></textarea>
            </fieldset>
            <footer>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/>
                <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY?>"></script>
                <script>
                    grecaptcha.ready(function() {
                        grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function(token) {
                            document.getElementById('g-recaptcha-response').value=token;
                        });
                    });
                </script>
                <button type="submit" class="btn">submit comment</button>
            </footer>  
        </form>
    </div>
    <div class="old-comments col-12">
        <div class="col-sm-8 old-comments_title">comments</div>
           <?foreach($arResult["ITEMS"] as $comment){?>
            <div class="row col-12">
                <div class="name-comment col-sm-2">
                    <span><?=$comment["NAME"]?></span>
                </div>
                <div class="text-comment col-sm-8"><?=$comment["PREVIEW_TEXT"]?></div>
                <div class="date-comment col-sm-2"><?=$comment["CREATED"]?></div>
            </div>
        <?}?>       
    </div>        
</div>
