<div class="writers index">
	<h2><?php echo __('Cac Tac gia'); ?></h2>
	<h4><?php echo $this->Paginator->sort('id', 'Xep theo thu tu nguoc lai');?><br></h4>
	<?php foreach ($writers as $writer):;?>
	<?php echo $writer['Writer']['name']?><br>
	<?php endforeach;?>
	<br>
	<?php echo $this->element('pagination', array('object'=>'Tác giả'));?>
</div>
