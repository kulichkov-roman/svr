<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?/*foreach($arResult["ITEMS"] as $arItem):
		if(array_key_exists("HIDDEN", $arItem)):
			echo $arItem["INPUT"];
		endif;
endforeach;*/?>

		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?if(!array_key_exists("HIDDEN", $arItem)):?>
	<div class="bx_filter_parameters_box">
<div  class="bx_filter_parameters_box_title"><?=$arItem["NAME"]?>:</div>
					<div class="bx_filter_input_container"><?=$arItem["INPUT"]?></div>
	</div>
			<?endif?>
		<?endforeach;?>
			<div class="clb"></div>
			<div class="bx_filter_button_box active">
				<div class="bx_filter_block">
					<div class="bx_filter_parameters_box_container">
						<input class="bx_filter_search_button bt3" type="submit" id="set_filter" name="set_filter" value="Показать" />
						<input class="bx_filter_search_reset bt2" type="submit" id="del_filter" name="del_filter" value="Сбросить" />
					</div>
				</div>
			</div>
		</form>
		<div style="clear: both;"></div>
	</div>
</div>
<a class="detail_picture fancybox" href="/upload/medialibrary/b08/%D1%81%D0%BA%D0%B0%D0%BD%20%D0%BD%D0%BE%D0%B2%D1%8B%D0%B9.jpg">
	<img border="0" src="/upload/medialibrary/b08/%D1%81%D0%BA%D0%B0%D0%BD%20%D0%BD%D0%BE%D0%B2%D1%8B%D0%B9.jpg" width="231" >
</a>