<?IncludeTemplateLangFile(__FILE__);?>
				<?if($isCatalog && $_REQUEST["mode"] == "ajax"){
				die();
			}?>
			<?if($isAdv):?>
					</div> <!-- end inner_left -->
				</div> <!-- end container -->
			<?endif;?>
			<?if($isCatalog):?>
				</div>
			<?endif;?>
			<div class="clearboth"></div>
		</div><div class="clearboth"></div>
	</div>
	<div class="footer_wr">
		<div class="footer_inner">
			<div class="left_col">
				<div class="copy">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("COPY")));?>
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
			</div>
			<div class="center_col">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
					"ROOT_MENU_TYPE" => "bottom",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "2",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					), false
				);?>
			</div>
			<div class="right_col">
				<div class="phone_feedback">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/phone_feedback.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?>
				</div>
				<div class="payment">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/payment.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PAYMENT")));?>
				</div>
				<div id="bx-composite-banner"></div>
			</div>
			<div class="adapt_switcher">
				<?global $ADAPTIVE; if ($ADAPTIVE):?><a href="<?=$APPLICATION->GetCurPageParam('adaptive=false', array('adaptive'))?>"><?=GetMessage("ISHOP_GO_TO_FULL_VERSION");?></a>
				<?else:?><a href="<?=$APPLICATION->GetCurPageParam('adaptive=true',	array('adaptive'))?>"><?=GetMessage("ISHOP_GO_TO_ADAPTIVE_VERSION");?></a><?endif;?>
			</div>
		</div>
		<?$APPLICATION->IncludeFile(SITE_DIR."include/bottom_include1.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("ARBITRARY_2"))); ?>
		<?$APPLICATION->IncludeFile(SITE_DIR."include/bottom_include2.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("ARBITRARY_2"))); ?>
	</div>
	<div class="found_cheaper_frame popup"></div>
	<div class="staff_send_frame popup"></div>
	<div class="resume_send_frame popup"></div>
	<div class="compare_frame popup"></div>
	<div class="add_item_frame popup"></div>
	<div class="one_click_buy_frame popup"></div>
	<div class="offers_stores_frame popup"></div>
</body>
</html>