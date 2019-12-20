<?php echo $this->element('header')?>

<h3>Add Post</h3>
<?php
echo $this->Form->create('Post', array('type' => 'file'));
<<<<<<< HEAD
echo $this->Form->input('Image.0.photo', array('type' => 'file', 'label' => 'Image', 'between' => ' : ',));
echo $this->Form->input('Image.0.photo_dir', array('type' => 'hidden', 'value' => 'Post')); ?><p></p>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', array('between' => ' : ',)); ?><p></p>

<?php
echo $this->Form->input('category_id', array('between' => ' : ')); ?><p></p>

<?php
echo $this->Form->input('Tag.tag', array('between' => ' : ',));
echo $this->Form->input('Tag.id'); ?><p></p>

<?php
echo $this->Form->input('body', array('rows' => '3', 'between' => ' : ',));
echo $this->Form->end('Save Post');
?>

=======
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
>>>>>>> origin/master
</body>
