<div class="rniDetails form">

	<?php echo $this->AlaxosForm->create('RniDetail', array('enctype' => 'multipart/form-data'));?>
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
 	<h2><?php ___('client copy rni detail'); ?></h2>
	    </span>
	<span class="h2-right"></span></div>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'back_to_view_id' => $rniDetail['RniDetail']['id']));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
        <tr class="display_none">
		<td>
			<?php ___('Membership Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('membership_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Rni Number') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('rni_number', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('File Rni Document') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input_file('file_rni_document', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
 		<td></td>
 		<td></td>
 		<td>
			<?php echo $this->AlaxosForm->end(___d('alaxos', 'copy', true)); ?> 		</td>
 	</tr>
	</table>

</div>
