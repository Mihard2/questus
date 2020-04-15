<?

$Iblock_id = 11;

$arSelect = Array("NAME","PROPERTY_POST_LINK");
$arFilter = Array("IBLOCK_ID"=>$Iblock_id,"PROPERTY_POST_LINK"=>$arResult["ID"],"ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$arRes = array();
while($ob = $res->GetNextElement())
{
    $arResult["COMMENTS_COUNT"][] = $ob->GetFields();
   
}
