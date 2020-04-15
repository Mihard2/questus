<?php
    $title=$arResult["NAME"];
    $url='https://growwithexo.com/'.$APPLICATION->GetCurUri();
    $summary=urlencode(TruncateText($arResult["PREVIEW_TEXT"], 255));
    $image=$arResult["PREVIEW_PICTURE"]["SRC"];
?>