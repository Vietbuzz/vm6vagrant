<p>
	<?php echo $this->Paginator->counter("Trang {:page} của {:pages}, {:current} ".$object." trong {:count} ".$object);?>
	<br>
	<?php echo  $this->Paginator->prev('Prev');?>
	<?php echo  $this->Paginator->numbers(array('saparator'=> ' - '));?>
	<?php echo  $this->Paginator->next('Next');?>
</p>