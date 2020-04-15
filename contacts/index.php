<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>
<div class="container contacts-page">
	<h3 class="title">Contact us</h3>
	<div class="row">
		<div class="col-md-6 contacts-block">
			 <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/contactsPage.php"
				)
			);?> 
		</div>
		<div class="col-md-6 form">
			<? $APPLICATION->IncludeComponent(
			"linetime:feedbackForm",
			".default",
			Array(
			),
			false
			);?>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>