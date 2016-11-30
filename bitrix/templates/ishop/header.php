<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
$fields = CSite::GetByID(SITE_ID)->Fetch();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowMeta("viewport");?>
	<?$APPLICATION->ShowMeta("HandheldFriendly");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
	<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
	<?$APPLICATION->ShowHead();?>
	<?if(CModule::IncludeModule("aspro.ishop")){CIShop::Start(SITE_ID);}?>
	<?$isFrontPage = CSite::InDir(SITE_DIR.'index.php');?>
	<?$isStores = CSite::InDir(SITE_DIR.'stores/');?>
	<?$isCatalog = CSite::InDir(SITE_DIR.'catalog/');?>
	<?$isContacts = CSite::InDir(SITE_DIR.'contacts/');?>
	<?$issale = CSite::InDir(SITE_DIR.'sale/index.php');?>
	<?$isAdv = CSite::InDir(SITE_DIR.'catalog/sale/') || CSite::InDir(SITE_DIR.'catalog/hit/') || CSite::InDir(SITE_DIR.'catalog/recommend/') || CSite::InDir(SITE_DIR.'catalog/new/') || CSite::InDir(SITE_DIR.'company/') || CSite::InDir(SITE_DIR.'info/') || CSite::InDir(SITE_DIR.'personal/index.php') || CSite::InDir(SITE_DIR.'personal/profile/') || CSite::InDir(SITE_DIR.'help/');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/developers.css');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/developers.js');?>
</head>
<body>
	<?CIShop::SetJSOptions();?>
	<?CAjax::Init();?>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="top_bg">
		<div class="top_block">
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.auth.form", "top", Array(
					"REGISTER_URL" => SITE_DIR."auth/",
					"FORGOT_PASSWORD_URL" => SITE_DIR."auth/",
					"PROFILE_URL" => SITE_DIR."personal/",
					"SHOW_ERRORS" => "Y"
				)
			);?>
			<div class="phone_feedback">
				<span> <?$APPLICATION->IncludeFile(SITE_DIR."include/phone_feedback.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?> </span>
			</div>
			<div class="social_link">
				<?$APPLICATION->IncludeComponent("aspro:social.info", ".default", array(
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "3600",
						"CACHE_GROUPS" => "Y",
						"VK" => "https://vk.com/club131506426",
						"FACE" => "",
						"TWIT" => "",
					),
					false
				);?> 
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:search.form", "top", array(
					"PAGE" => SITE_DIR."catalog/",
					"USE_SUGGEST" => "N",
					"USE_SEARCH_TITLE" => "Y"
				),
				false
			);?>
			<div class="clearboth"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("LOGO")));?>
			</div>
			<div class="shop_description">
				<?$APPLICATION->IncludeFile(SITE_DIR."include/description.php", Array(), Array("MODE" => "html","NAME" => GetMessage("DESCRIPTION")));?>
			</div>
			<div id="basket_small" class="basket">
				<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("small-basket-block");?>
				<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "small-basket", array(
						"PATH_TO_BASKET" => SITE_DIR."basket/",
						"PATH_TO_ORDER" => SITE_DIR."order/"
					),
					false
				);?>
				<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("small-basket-block", "");?>
			</div>
			<div class="clearboth"></div>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"IBLOCK_CATALOG_TYPE" => "aspro_ishop_catalog",
		"IBLOCK_CATALOG_ID" => "16",
		"IBLOCK_CATALOG_DIR" => SITE_DIR."catalog/",
		"COMPONENT_TEMPLATE" => "top_menu",
		"MAX_CATALOG_GROUPS_COUNT" => "5"
	),
	false
);?>
		</div>
		<div class="content <?=($isFrontPage ? 'front' : '')?>">
			<?if($isCatalog):?><div id="ajax_catalog"><?endif;?>
			<?if($isAdv):?>
				<div class="container left">
					<div class="inner_left no_right_side">
			<?endif;?>
			<?if(!$isFrontPage && !$isCatalog):?>
				<h1 class="title"><?$APPLICATION->ShowTitle(false)?></h1>
				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "content", Array("START_FROM" => "0", "PATH" => "", "SITE_ID" => ""),	false);?>
				<div class="shadow-item_info"><img border="0" alt="" src="<?=SITE_TEMPLATE_PATH?>/images/shadow-item_info.png"></div>
			<?endif;?>
			<?if(!$isCatalog):?>
				<div class="content_menu_mini">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "inner_menu", array(
							"ROOT_MENU_TYPE" => "left",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "33600",
							"MENU_CACHE_USE_GROUPS" => "N",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				</div>
				<?if(!$isFrontPage && !$issale && !$isStores && !$isContacts):?>
					<div class="left_block">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "inner_menu_vertical", array(
								"ROOT_MENU_TYPE" => "left",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "33600",
								"MENU_CACHE_USE_GROUPS" => "N",
								"MENU_CACHE_GET_VARS" => "",
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							),
							false, array("ACTIVE_COMPONENT" => "Y")
						);?>
						<?if($isAdv):?>
							<?$APPLICATION->IncludeComponent("bitrix:news.list", "advt", array(
	"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "aspro_ishop_content",
		"IBLOCK_ID" => "9",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "2263",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
						<?endif;?>
					</div>
				<?endif;?>
			<?endif;?>
	<?if($isCatalog && $_REQUEST["mode"] == "ajax"){ $APPLICATION->RestartBuffer();}?>
