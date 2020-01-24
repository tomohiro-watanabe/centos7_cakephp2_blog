
<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post', array('type' => 'file'));
echo $this->Form->input('Image.0.photo', array('type' => 'file', 'label' => 'Image'));
echo $this->Form->input('Image.0.photo_dir', array('type' => 'hidden', 'value' => 'Post')); 
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('category_id');
echo $this->Form->input('Tag.tag');
echo $this->Form->input('Tag.id');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>


