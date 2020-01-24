<div class="container py-4">
	<div>
		<!-- <?php phpinfo(); ?> -->
		<h3>CSVファイルのアップロード</h3>
		<?php echo $this->Form->create('Csv', array(
			'type'    => 'file'));?>

		<div class="form-group">
				<div class='d-flex align-items-center'>
				<?php
					echo $this->Form->input('file',array(
						'type'     => 'file'));?>
				</div>
		</div>
		<?php echo $this->Form->submit('アップロード')?>
	</div>
</div>


