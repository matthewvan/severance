<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo ((isset($this->_rootref['L_FAQ_TITLE'])) ? $this->_rootref['L_FAQ_TITLE'] : ((isset($user->lang['FAQ_TITLE'])) ? $user->lang['FAQ_TITLE'] : '{ FAQ_TITLE }')); echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

<div class="bg4" id="faqlinks">
		<div class="column1">
		<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; if ($_faq_block_val['SWITCH_COLUMN'] || ( $this->_rootref['SWITCH_COLUMN_MANUALLY'] && $_faq_block_val['S_ROW_COUNT'] == (4) )) {  ?>

				</div>

				<div class="column2">
			<?php } ?>


			<dl class="faq">
				<dt><strong><?php echo $_faq_block_val['BLOCK_TITLE']; ?></strong></dt>
				<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

					<dd><a href="#f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><?php echo $_faq_row_val['FAQ_QUESTION']; ?></a></dd>
				<?php }} ?>

			</dl>
		<?php }} ?>

		</div>
</div>
<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />


<div class="clear"></div>

<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo $_faq_block_val['BLOCK_TITLE']; echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

	<div class="bg4">
			<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

				<dl class="faq">
					<dt id="f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><strong><?php echo $_faq_row_val['FAQ_QUESTION']; ?></strong></dt>
					<dd><?php echo $_faq_row_val['FAQ_ANSWER']; ?></dd>
					<dd><a href="#faqlinks" class="top2"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></dd>
				</dl>
				<?php if (! $_faq_row_val['S_LAST_ROW']) {  ?><hr class="dashed" /><?php } }} ?>

	</div>
	<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />
<?php }} $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>