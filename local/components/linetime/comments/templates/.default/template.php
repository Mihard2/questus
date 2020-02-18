<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//  var_dump($arResult);
?>


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