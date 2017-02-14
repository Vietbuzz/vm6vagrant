<div class="books index">
	<h2><?php echo __('sách mới'); ?></h2>
	<?php echo $this->Html->link('xem thêm', '/sach-moi');?><br>
	<?php //pr($books);?>
	<?php foreach($books as $book):;?>
	Ten sach: <?php echo $book['Book']['title'];?><br>
	Anh: <?php echo $this->Html->image($book['Book']['image']);?><br>
	Gia ban: <?php echo $this->Number->currency($book['Book']['sale_price'], ' VND', 
			array('places'=>0, 'wholePosition'=>'after'));?><br>
	Loai: <?php echo $book['Category']['name'];?><br>
	Tac gia: 
	<?php foreach ($book['Writer'] as $writer):;?>
	<?php echo $writer['name'];?>
	<?php endforeach;?><br><hr>
	<?php endforeach;?>
</div>
