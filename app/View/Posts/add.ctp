

<h3>Add Post</h3>
<?php
echo $this->Form->create('Post', array('type' => 'file'));
echo $this->Form->input('Image.0.photo', array('type' => 'file', 'label' => 'Image', 'between' => ' : ',));
echo $this->Form->input('Image.0.photo_dir', array('type' => 'hidden', 'value' => 'Post')); ?>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', array('between' => ' : ',)); ?>

<?php
echo $this->Form->input('category_id', array('between' => ' : ')); ?>

<?php
echo $this->Form->input('Tag.tag', array('between' => ' : ',));
echo $this->Form->input('Tag.id'); ?>

<?php
echo $this->Form->input('body', array('rows' => '3', 'between' => ' : '));
echo $this->Form->end('投稿');
?>


