<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");
if($_SERVER["REQUEST_METHOD"] == "POST"){
//добавление комента постом.
  $arCommentData = array(
    "MODIFIED_BY"    => 1,
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID"      => 11,
    "ACTIVE"         => "N",
    "NAME"           => "Comment to post #". $arParams["POST_ID"],
    "PREVIEW_TEXT" => $_POST["comment"],
    "PROPERTY_VALUES"=> array(
      "EMAIL"=>$_POST["email"],
      "NAME"=>$_POST["name"],
      "POST_LINK"=>$arParams["POST_ID"],
  ),

  );

  $el = new CIBlockElement;
  if( $el->Add($arCommentData)){
    $_SESSION["ADDOK"] = True;
    LocalRedirect($_SERVER["REQUEST_URI"]);
  }
}


//получаем списко коментариев.
$res = CIBlockElement::GetList(
  Array("ACTIVE_FROM"=>"DESC"),
  Array("=PROPERTY_POST_LINK" => $arParams["POST_ID"],"IBLOCK_ID"=> 11,"=ACTIVE" => "Y"),
  array("ACTIVE","CREATED","PORPERTY_POST_LINK","PROPERTY_EMAIL","PROPERTY_NAME","PREVIEW_TEXT"),
  false,
  Array()
);
$arResult["ITEMS"] = array();
  while($result = $res->GetNext() ) {
  $arResult["ITEMS"][] = array(
    "ACTIVE"=>$result["ACTIVE"],
    "CREATED"=>$result["CREATED"],
    "PREVIEW_TEXT"=>$result["PREVIEW_TEXT"],
    "EMAIL"=>$result["PROPERTY_EMAIL_VALUE"],
    "NAME"=>$result["PROPERTY_NAME_VALUE"],
    );
}

if(isset($_SESSION["ADDOK"])){
  unset($_SESSION["ADDOK"]);
  $arResult["ADDOK"] = true;
}
$this->IncludeComponentTemplate();

