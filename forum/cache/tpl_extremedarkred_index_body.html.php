<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<p class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> rightside<?php } ?>"><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  echo (isset($this->_rootref['LAST_VISIT_DATE'])) ? $this->_rootref['LAST_VISIT_DATE'] : ''; } else { echo (isset($this->_rootref['CURRENT_TIME'])) ? $this->_rootref['CURRENT_TIME'] : ''; } ?></p>
<?php if ($this->_rootref['U_MCP']) {  ?><p><?php echo (isset($this->_rootref['CURRENT_TIME'])) ? $this->_rootref['CURRENT_TIME'] : ''; ?> <br />[&nbsp;<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a>&nbsp;]</p><?php } else if ($this->_rootref['S_USER_LOGGED_IN']) {  ?><p><?php echo (isset($this->_rootref['CURRENT_TIME'])) ? $this->_rootref['CURRENT_TIME'] : ''; ?></p><?php } if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

<ul class="linklist">
	<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></a><?php if ($this->_rootref['S_LOAD_UNREADS']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_UNREAD'])) ? $this->_rootref['U_SEARCH_UNREAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNREAD'])) ? $this->_rootref['L_SEARCH_UNREAD'] : ((isset($user->lang['SEARCH_UNREAD'])) ? $user->lang['SEARCH_UNREAD'] : '{ SEARCH_UNREAD }')); ?></a><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></a><?php } ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></a> <?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a><?php } ?></li>
	<?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a></li><?php } ?>

</ul>
<?php } $this->_tpl_include('forumlist_body.html'); if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<br />
		<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>">
		<fieldset class="quick-login">
			<label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label>&nbsp;<input type="text" name="username" id="username" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" />
			<label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label>&nbsp;<input type="password" name="password" id="password" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" />
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

				| <label for="autologin"><?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?> <input type="checkbox" name="autologin" id="autologin" /></label>
			<?php } ?>

			<input type="submit" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button2" />
			<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

		</fieldset>
	</form>
	<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />
<?php } ?>


<br />
    <?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

	<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

	    <div class="forabg">
		    <div class="inner">
			    <ul class="topiclist">
				    <li class="header">
					    <dl class="icon">
						    <dt>&nbsp;</dt>
						</dl>
					</li>
				</ul>
				<ul class="topiclist forums">
				    <li class="row">
					    <dl>
						    <dt title="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" style="width: auto;">
							    <span><?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?>

								    <br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?>

									<br />
									<strong><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></strong><br/>
									<?php if ($this->_rootref['LEGEND']) {  ?><br /><strong><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>:</strong> <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; } ?>

								</span>
							</dt>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />
    <?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

	<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

        <div class="forabg">
		    <div class="inner">
             <ul class="topiclist">
                <li class="header">
                   <dl class="icon">
				        <dt>&nbsp;</dt>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
			    <li class="row">
				    <dl>
					    <dt title="<?php echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>" style="width: auto;">
						    <span class="forumtitle">
							    <?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?>

							</span>
						</dt>
					</dl>
				</li>
			</ul>
		</div>
    </div>
	<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />
    <?php } if ($this->_rootref['NEWEST_USER']) {  ?>

	<?php echo (isset($this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BEGIN_TCORNERS'] : ''; echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); echo (isset($this->_tpldata['DEFINE']['.']['END_TCORNERS'])) ? $this->_tpldata['DEFINE']['.']['END_TCORNERS'] : ''; ?>

	    <div class="forabg">
             <div class="inner">
                <ul class="topiclist">
                    <li class="header">
                        <dl class="icon">
				            <dt>&nbsp;</dt>
					    </dl>
				    </li>
			    </ul>
				<ul class="topiclist forums">
				    <li class="row">
					    <dl>
                            <dt title="<?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?>" style="width: auto;">
							    <span class="forumtitle">
								    <?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?>

									    <br /><?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?>

								</span>
							</dt>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<?php echo (isset($this->_tpldata['DEFINE']['.']['BCORNERS'])) ? $this->_tpldata['DEFINE']['.']['BCORNERS'] : ''; ?>

		<br />
    <?php } ?>


	<br />
	
    <ul class="center">
        <li>
            <img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forum_unread.gif" alt="<?php echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); ?>" />&nbsp;&nbsp;<?php echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); ?>&nbsp;&nbsp;
            &nbsp;&nbsp;<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forum_read.gif" alt="<?php echo ((isset($this->_rootref['L_NO_NEW_POSTS'])) ? $this->_rootref['L_NO_NEW_POSTS'] : ((isset($user->lang['NO_NEW_POSTS'])) ? $user->lang['NO_NEW_POSTS'] : '{ NO_NEW_POSTS }')); ?>" />&nbsp;&nbsp;<?php echo ((isset($this->_rootref['L_NO_NEW_POSTS'])) ? $this->_rootref['L_NO_NEW_POSTS'] : ((isset($user->lang['NO_NEW_POSTS'])) ? $user->lang['NO_NEW_POSTS'] : '{ NO_NEW_POSTS }')); ?>&nbsp;&nbsp;
            &nbsp;&nbsp;<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forum_read_locked.gif" alt="<?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?>" />&nbsp;&nbsp;<?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?>

        </li>
    </ul>

    <br style="clear: both;" />	

<?php $this->_tpl_include('overall_footer.html'); ?>