<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
define('SITE_KEY', '6LeNDuQUAAAAAKeLBd8hPvtjhxCaD8HICUaGX8YB');
define('SEKRET_KEY', '6LeNDuQUAAAAAKJ_NXXi-dwavAsfAwAODu84nDJ0');

?>
<pre>
    <?print_r($arResult)?>
</pre>
<?

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
        echo "<span>Спасибо! Ваш коментарий отправлен на обработку модераторам</span>";
    }
    else {
        echo "<span class='recapMessage'>Простите - Вы не прошли проверку recapcha</span>";
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
                    <input type="text" name="name" id="text" placeholder="yuor name*">
                    <input type="email" name="email" id="email" placeholder="email*">
                </div>
                <textarea name="comment" id="text" placeholder="Message*" rows="6" minlength="15" maxlength="500"></textarea>
            </fieldset>
            <footer>
                <div class="g-recaptcha" data-sitekey="">Recatcha</div>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br/><br/>
                <button type="submit" class="btn">submit comment</button>
            </footer>  
        </form>
    </div>
    <div class="old-comments col-12">
        <div class="col-sm-8 old-comments_title">comments</div>
        <?foreach($arResult["ITEMS"] as $comment){?>
            <div class="row col-12">
                <div class="name-comment col-sm-2">
                    username
                    <span><?=$comment["NAME"]?></span>
                </div>
                <div class="text-comment col-sm-8"><?=$comment["PREVIEW_TEXT"]?></div>
                <div class="name"><?=$comment["CREATED"]?></div>
                <!-- <div class="date-comment col-sm-2" type="email"><?=$comment["EMAIL"]?></div> -->
            </div>
        <?}?>                   
    </div>        
</div>

        <!-- 

        <form action="<?=$_SERVER["REQUEST_URL"]?>" method="POST">
        <input type="hidden">
        <input name="name" type="text">
        <input name="email" type="text">
        <textarea name="comment" ></textarea>
        <input type="submit">
        </form>
        <div class="comments">
        <?foreach($arResult["ITEMS"] as $comment){?>
         <div class="comment-item">
         <div class="name"><?=$comment["NAME"]?></div>
         <div class="name"><?=$comment["EMAIL"]?></div>
         <div class="name"><?=$comment["PREVIEW_TEXT"]?></div>
         <div class="name"><?=$comment["CREATED"]?></div>
         </div>
        <?}?>
        </div>
        <?
        // var_dump($_REQUEST);
        // var_dump($_SERVER);
        ?>
        
    -->