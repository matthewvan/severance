<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_SIMPLE_MESSAGE']) {  $this->_tpl_include('simple_header.html'); } else { $this->_tpl_include('overall_header.html'); } ?>


<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

<div class="bg4" id="message">
	<p style="margin-bottom: 0; padding: 6px;"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></p>
	<?php if ($this->_rootref['SCRIPT_NAME'] == ("search") && ! $this->_rootref['S_BOARD_DISABLED'] && ! $this->_rootref['S_NO_SEARCH'] && $this->_rootref['L_RETURN_TO_SEARCH_ADV']) {  ?><p><a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a></p><?php } ?>

</div>
	<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />

<?php if ($this->_rootref['S_SIMPLE_MESSAGE']) {  $this->_tpl_include('simple_footer.html'); } else { $this->_tpl_include('overall_footer.html'); } ?>