<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CUtil::InitJSCore();
CJSCore::Init(array("fx"));
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
	<meta name="yandex-verification" content="df67ffd6f6c2e00f" />

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.8.3.min.js");?>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<?$APPLICATION->ShowHead();?>

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/script.js");?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/ios-orientationchange-fix.js');?>
	
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/jquery.ui/jquery-ui-1.10.4.custom.css');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/jquery.ui/jquery-ui-1.10.4.custom.min.js');?>

	<!--jCarousel-->
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/jcarousel/jcarousel.css');?>	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/jcarousel/jquery.jcarousel.min.js');?>
	
	<script type="text/javascript">
		var tplUrl = '<?=SITE_TEMPLATE_PATH?>';
		var storesTitle = '<?=GetMessage('STORES_TITLE')?>';
		if(document.documentElement){document.documentElement.id="js"}
	</script>
	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.cookie.js');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/forms.css');?>
	
	<!-- Nivoslider -->
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/nivoslider/nivo-slider.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/nivoslider/default/default.css');?>
	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/nivoslider/jquery.nivo.slider.js');?>

	<!--[if lt IE 9]>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/ie8.css" />
	<![endif]-->
	
	<!--Fancybox-->
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.css');?>	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.pack.js');?>
	
	<link href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css" media="screen" rel="stylesheet" type="text/css"/>

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.placeholder.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scripts.js');?>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/developers.css');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/developers.js');?>

	<script type="text/javascript">
		var cartURL = "<?=SITE_DIR;?>personal/cart/";
	</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37147875 = new Ya.Metrika({
                    id:37147875,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37147875" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>

<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<?$theme = $APPLICATION->IncludeComponent(
	"ms.shop:theme",
	"",
	array(
	),
false
);?>

<div id="content-bg"></div>

<div id="container">
<div id="fix_panel" class="fp_light">
	<div class="maxwidth">
		<div id="fix_panel_in" class="clearfix">
			<div class="fp_item fp_feedback feedback-link">
				<i></i>
				<a class="dotted" href="<?=SITE_DIR?>feedback.php"><?=GetMessage("PANEL_FEEDBACK")?></a>
			</div>
			<div class="fp_item fp_search">
				<a href="<?=SITE_DIR?>catalog/?q=&s="></a>
			</div>
			
			<div class="fp_item">
				<div class="fp_cart">
				<?$APPLICATION->IncludeComponent(
					"bitrix:sale.basket.basket.line", 
					"ms_line_fp", 
					array(
						"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
						"PATH_TO_PERSONAL" => SITE_DIR."personal/",
						"SHOW_PERSONAL_LINK" => "N",
						"BUY_URL_SIGN" => "action=ADD2BASKET",
						"SHOW_NUM_PRODUCTS" => "Y",
						"SHOW_TOTAL_PRICE" => "Y",
						"SHOW_EMPTY_VALUES" => "Y",
						"SHOW_AUTHOR" => "N",
						"PATH_TO_REGISTER" => SITE_DIR."login/",
						"PATH_TO_PROFILE" => SITE_DIR."personal/",
						"SHOW_PRODUCTS" => "N",
						"SHOW_DELAY" => "N",
						"SHOW_NOTAVAIL" => "N",
						"SHOW_SUBSCRIBE" => "N",
						"SHOW_IMAGE" => "Y",
						"SHOW_PRICE" => "Y",
						"SHOW_SUMMARY" => "Y",
						"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
						"POSITION_FIXED" => "N",
						"POSITION_HORIZONTAL" => "right",
						"POSITION_VERTICAL" => "bottom"
					),
					false
				);?>
				</div>
			</div>
			
			<div class="fp_item">
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/compare.php",
					"AREA_FILE_RECURSIVE" => "N",
					"EDIT_MODE" => "html",
				),
				false,
				Array('HIDE_ICONS' => 'Y')
				);?>
			</div>
			
			<div class="fp_item">
				<div class="fp_auth">
					<i></i>
					<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "ms_auth_v3_fp", Array(
						"REGISTER_URL" => SITE_DIR."login/",	// �������� �����������
						"PROFILE_URL" => SITE_DIR."personal/",	// �������� �������
						"SHOW_ERRORS" => "N",	// ���������� ������
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);?>
				</div>
			</div>
			
		</div>
	</div>
</div>


	<?if($theme["TEMPLATE_TYPE"] == "type1"):?>
	<div id="top-panel">
		<div class="maxwidth no-marker clearfix">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "ms_top_menu", Array(
				"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
					"MENU_CACHE_TYPE" => "Y",	// ��� �����������
					"MENU_CACHE_TIME" => "36000000",	// ����� ����������� (���.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
					"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
					"MAX_LEVEL" => "1",	// ������� ����������� ����
					"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
					"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
					"DELAY" => "N",	// ����������� ���������� ������� ����
					"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
				),
				false
			);?>
			
			<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "ms_auth_v3", Array(
				"REGISTER_URL" => SITE_DIR."login/",	// �������� �����������
				"PROFILE_URL" => SITE_DIR."personal/",	// �������� �������
				"SHOW_ERRORS" => "N",	// ���������� ������
				),
				false
			);?>
			
			<? // ����� �����������
			if (!$USER->IsAuthorized()):?>
			<?$APPLICATION->IncludeComponent("bitrix:system.auth.authorize", "popup", array(),false);?>
			<?endif?>
		</div>
	</div>
	<?endif?>

	<div id="container-in" class="maxwidth">
		<header id="site_header">
			<div class="h_item h_logo">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/header_logo.php"), false);?>			
			</div>
			
			<div class="h_item h_search">
				<?$APPLICATION->IncludeComponent("bitrix:search.title", "ms_search", Array(
					"NUM_CATEGORIES" => "1",	// ���������� ��������� ������
					"TOP_COUNT" => "5",	// ���������� ����������� � ������ ���������
					"CHECK_DATES" => "N",	// ������ ������ � �������� �� ���� ����������
					"SHOW_OTHERS" => "N",	// ���������� ��������� "������"
					"PAGE" => SITE_DIR."catalog/",	// �������� ������ ����������� ������ (�������� ������ #SITE_DIR#)
					"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),	// �������� ���������
					"CATEGORY_0" => array(	// ����������� ������� ������
						0 => "iblock_catalog",
					),
					"CATEGORY_0_iblock_catalog" => array(	// ������ � �������������� ������ ���� "iblock_catalog"
						0 => "all",
					),
					"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
					"SHOW_INPUT" => "Y",	// ���������� ����� ����� ���������� �������
					"INPUT_ID" => "title-search-input",	// ID ������ ����� ���������� �������
					"CONTAINER_ID" => "search",	// ID ����������, �� ������ �������� ����� ���������� ����������
					"PRICE_CODE" => array(	// ��� ����
						0 => "BASE",
					),
					"SHOW_PREVIEW" => "Y",	// �������� ��������
					"PREVIEW_WIDTH" => "75",	// ������ ��������
					"PREVIEW_HEIGHT" => "75",	// ������ ��������
					"CONVERT_CURRENCY" => "Y",	// ���������� ���� � ����� ������
					),
					false
				);?>
			</div>
			
			<div id="header-contacts" class="h_item">
				<div id="header-contacts-in">
					<div class="phone">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?>
					</div>
					<div class="worktime">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/schedule.php"), false);?>
					</div>
				</div>
			</div>
			
			<div class="h_item top_cart">
				<div id="top-cart">
					<?$APPLICATION->IncludeComponent(
						"bitrix:sale.basket.basket.line", 
						"ms_line_old", 
						array(
							"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
							"PATH_TO_PERSONAL" => SITE_DIR."personal/",
							"SHOW_PERSONAL_LINK" => "N",
							"BUY_URL_SIGN" => "action=ADD2BASKET",
							"SHOW_NUM_PRODUCTS" => "Y",
							"SHOW_TOTAL_PRICE" => "Y",
							"SHOW_EMPTY_VALUES" => "Y",
							"SHOW_AUTHOR" => "N",
							"PATH_TO_REGISTER" => SITE_DIR."login/",
							"PATH_TO_PROFILE" => SITE_DIR."personal/",
							"SHOW_PRODUCTS" => "N",
							"SHOW_DELAY" => "N",
							"SHOW_NOTAVAIL" => "N",
							"SHOW_SUBSCRIBE" => "N",
							"SHOW_IMAGE" => "Y",
							"SHOW_PRICE" => "Y",
							"SHOW_SUMMARY" => "Y",
							"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
							"POSITION_FIXED" => "N",
							"POSITION_HORIZONTAL" => "right",
							"POSITION_VERTICAL" => "bottom"
						),
						false
					);?>
				</div>
			</div>
		</header>
		
		<div id="top-nav">
			<?if($theme["TEMPLATE_TYPE"] == "type1"):?>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "bt_multilevel_top_menu", Array(
				"ROOT_MENU_TYPE" => "catalog",	// ��� ���� ��� ������� ������
				"MENU_THEME" => "site",	// ���� ����
				"MENU_CACHE_TYPE" => "A",	// ��� �����������
				"MENU_CACHE_TIME" => "36000000",	// ����� ����������� (���.)
				"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
				"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
				"MAX_LEVEL" => "4",	// ������� ����������� ����
				"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
				"USE_EXT" => "Y",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
				"DELAY" => "N",	// ����������� ���������� ������� ����
				"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
				),
				false
				);?>
			<?elseif($theme["TEMPLATE_TYPE"] == "type2"):?>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "bt_multilevel_top_menu", Array(
				"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
				"MENU_THEME" => "site",	// ���� ����
				"MENU_CACHE_TYPE" => "A",	// ��� �����������
				"MENU_CACHE_TIME" => "36000000",	// ����� ����������� (���.)
				"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
				"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
				"MAX_LEVEL" => "4",	// ������� ����������� ����
				"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
				"USE_EXT" => "Y",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
				"DELAY" => "N",	// ����������� ���������� ������� ����
				"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
				),
				false
				);?>			
			<?endif?>
		</div>
		
		<section class="clearfix">

		<?if($theme["TEMPLATE_TYPE"] == "type1"):?>
			<?if ($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>	
				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/index_slider.php",
					Array(),
					Array("MODE"=>"php")
				);
				?>
			<?endif?>
		<?endif?>

<?$APPLICATION->ShowViewContent("sidebar_filter_empty")?>
		
<?if (!strpos($APPLICATION->GetCurPage(true),"personal") && !strpos($APPLICATION->GetCurPage(true),"cart")):?>
			<?if($APPLICATION->GetCurPage(true) == SITE_DIR."index.php" || !strpos($APPLICATION->GetCurPage(true),"catalog")):?>
			<aside id="column-l">
				<?$APPLICATION->ShowViewContent("sidebar_filter")?>

				<?if($theme["TEMPLATE_TYPE"] == "type2"):?>
				<?endif?>

				<?if($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "bt_catalog_sidebar", Array(
						"ROOT_MENU_TYPE" => "catalog",	// ��� ���� ��� ������� ������
						"MENU_THEME" => "site",	// ���� ����
						"MENU_CACHE_TYPE" => "A",	// ��� �����������
						"MENU_CACHE_TIME" => "36000000",	// ����� ����������� (���.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
						"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
						"MAX_LEVEL" => "4",	// ������� ����������� ����
						"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
						"USE_EXT" => "Y",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
						"DELAY" => "N",	// ����������� ���������� ������� ����
						"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
						),
						false
					);?>          
				<?endif?>

				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/left_adv.php",
					Array(),
					Array("MODE"=>"php")
				);
				?>

				<?if (!strpos($APPLICATION->GetCurPage(true),"catalog") || $APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
				
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."include/news.php",
							"AREA_FILE_RECURSIVE" => "N",
							"EDIT_MODE" => "html",
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);?>			
				<?endif?>
				
			</aside>
			<?endif?>
<?endif?>

<?if ($APPLICATION->GetCurPage(true) == SITE_DIR."index.php" || !strpos($APPLICATION->GetCurPage(true),"catalog")):?>			
<div class="content">
<?endif?>
		
			<div class="content full-w">
<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "ms_small_basket", Array(),false,Array('HIDE_ICONS' => 'Y'));?>

<?if (!strpos($APPLICATION->GetCurPage(true),"catalog") && $APPLICATION->GetCurPage(true) !== SITE_DIR."index.php"):?>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "ms_breadcrumb", Array(
	"START_FROM" => "0",	// ����� ������, ������� � �������� ����� ��������� ������������� �������
	"PATH" => "",	// ����, ��� �������� ����� ��������� ������������� ������� (�� ���������, ������� ����)
	"SITE_ID" => "-",	// C��� (��������������� � ������ ������������� ������, ����� DOCUMENT_ROOT � ������ ������)
	),
	false,
	array(
	"HIDE_ICONS" => "Y"
	)
);?>
<?endif?>

<?if($theme["TEMPLATE_TYPE"] == "type2"):?>
	<?if ($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
		<?
		$APPLICATION->IncludeFile(
			SITE_DIR."include/index_slider.php",
			Array(),
			Array("MODE"=>"php")
		);
		?>
	<?endif?>
<?endif?>
