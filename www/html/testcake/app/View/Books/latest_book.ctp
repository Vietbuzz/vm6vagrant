<div class="books index">
	<h2><?php echo __('sach'); ?></h2>
	<p>
	<?php echo $this->Paginator->sort('title', 'Sap xep theo ten')?>
	</p>
		<?php //pr($books);?>
	<?php echo $this->Html->link('xem thêm', '/sach-moi');?><br>
	<?php foreach($books as $book):;?>
	Ten sach: <?php echo $book['Book']['title'];?><br>
	Anh: <?php echo $this->Html->image($book['Book']['image']);?><br>
	Gia ban: <?php echo $this->Number->currency($book['Book']['sale_price'], ' VND', 
			array('places'=>0, 'wholePosition'=>'after'));?><br>
	Loai: <br>
	Tac gia: 
	<?php foreach ($book['Writer'] as $writer):;?>
	<?php echo $writer['name'];?>
	<?php endforeach;?><br><hr>
	<?php endforeach;?>
	<?php echo $this->element('pagination', array('object'=> 'quyển'));?>
</div>
