<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Org'); ?></dt>
		<dd>
			<?php echo h($user['User']['org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['Role']['name']); ?>		<!-- TODO ACL, check, My Profile not edit role_id. -->
			&nbsp;
		</dd>
		<dt><?php echo __('Autoalert'); ?></dt>
		<dd>
			<?php echo h(0 == ($user['User']['autoalert'])) ? 'No' : 'Yes'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contactalert'); ?></dt>
		<dd>
			<?php echo h(0 == ($user['User']['contactalert'])) ? 'No' : 'Yes'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authkey'); ?></dt>
		<dd>
			<?php echo h($user['User']['authkey']); ?>
			(<?php echo $this->Html->link('reset', array('controller' => 'users', 'action' => 'resetauthkey', $user['User']['id']));?>)
			&nbsp;
		</dd>
		<dt><?php echo __('NIDS Start SID'); ?></dt>
		<dd>
			<?php echo h($user['User']['nids_sid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Termsaccepted'); ?></dt>
		<dd>
			<?php echo h((0 == $user['User']['termsaccepted'])? 'No' : 'Yes'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GPG Key'); ?></dt>
		<dd>
		<?php
if (h($user['User']['gpgkey']) != 0) {
	echo "<code>" + nl2br(h($user['User']['gpgkey'])) + "</code>";
} else {
	echo "N/A";
}
		?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul class="nav nav-list">
		<?php
			if ($me['id'] == $user['User']['id']) {
		?>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?></li>
		<li class="divider"></li>
		<?php
			}
		?>
		<li><a href="/users/news">News</a></li>
		<li><a href="/users/view/me">My Profile</a></li>
		<li><a href="/users/memberslist">Members List</a></li>
		<li><a href="/pages/display/doc/general">User Guide</a></li>
		<li><a href="/users/terms">Terms & Conditions</a></li>
	</ul>
</div>

