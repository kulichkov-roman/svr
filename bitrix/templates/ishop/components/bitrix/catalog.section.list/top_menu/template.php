<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?
	$hideGroups = false;
	if (!strlen($arParams["MAX_CATALOG_GROUPS_COUNT"])) { $maxCount = 5; }
	elseif ($arParams["MAX_CATALOG_GROUPS_COUNT"]==0) { $hideGroups = false; }
	else { $maxCount =  $arParams["MAX_CATALOG_GROUPS_COUNT"]; }	
?>
<div class="child cat_menu">
	<?foreach( $arResult["SECTIONS"] as $arItems ){?>
		<ul>
			<li class="menu_title"><a href="<?=$arItems["SECTION_PAGE_URL"]?>"><?=$arItems["NAME"]?></a></li>
			<?$i = 1;?>
			<?foreach( $arItems["SECTIONS"] as $arItem ){?>
				<li  <?=(($i > $maxCount && $hideGroups) ? 'class="d menu_item" style="display: none;"' : 'class="menu_item"');?>><a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
				<?$i++;?>
			<?}?>
			<!--noindex-->
				<?if( count( $arItems["SECTIONS"] ) > $maxCount  && $hideGroups){?>
					<li class="see_more">
						<a rel="nofollow" href="#" onclick="if( $(this).hasClass('open') ){ $(this).text('<?=GetMessage('CATALOG_VIEW_MORE')?>').removeClass('open').parent().parent().find('li.d').hide(); }else{ $(this).text('<?=GetMessage('CATALOG_VIEW_LESS')?>').addClass('open').parent().parent().find('li.d').show(); } return false;"><?=GetMessage('CATALOG_VIEW_MORE')?></a>
					</li>
				<?}?>
			<!--/noindex-->
		</ul>
	<?}?>
</div>
