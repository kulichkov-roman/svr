<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if (count($arResult["ITEMS"]) < 1)
	return;
?>
<div class="side-block side-news">
	<div class="title"><a href="<?=SITE_DIR?>news/"><?=GetMessage("NEWS_TITLE")?></a></div>
	<div class="side-block-in no-marker">
		<div class="jcarousel">
			<ul>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<li>
					<p class="sn_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
					<div class="sn_text"><?=(strlen($arItem["NAME"])> 0 ? $arItem["NAME"] : $arItem["PREVIEW_TEXT"])?></div>
					<a class="sn_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage('NEWS_DETAIL');?></a>
				</li>
			<?endforeach;?>
			</ul>
		</div>
		<a href="#" class="jcc jcarousel-control-prev"><span></span></a>
		<a href="#" class="jcc jcarousel-control-next"><span></span></a>
	</div>
</div>

<a class="detail_picture fancybox" href="/upload/medialibrary/b08/%D1%81%D0%BA%D0%B0%D0%BD%20%D0%BD%D0%BE%D0%B2%D1%8B%D0%B9.jpg">
	<img border="0" src="/upload/medialibrary/b08/%D1%81%D0%BA%D0%B0%D0%BD%20%D0%BD%D0%BE%D0%B2%D1%8B%D0%B9.jpg" width="231" >
</a>