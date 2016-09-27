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
<a class="detail_picture fancybox" href="/images/sert54.jpg">
	<img border="0" src="/images/sert54.jpg" width="231" >
</a>
