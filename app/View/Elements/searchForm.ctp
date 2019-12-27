<<<<<<< HEAD
<?php echo $this->Form->create('Post', array('url' => array('action' => 'index')));?>
<fieldset>
=======
<?php echo $this->Form->create('Post', array('url' => array('action' => 'index')));?> 
  
<fieldset>  
>>>>>>> origin/master
  <legend>Search</legend>  
  <dl>
  <dt><label>カテゴリー</label></dt> 
    <dd><?php echo $this->Form->input('category', array(  
      'type' => 'radio', 'div' => false, 'label' => false, 'options' => $categoryRadio, 'legend' => false, 'separator' => "<br />"))?></dd>
  
  <dt><label>タグ</label></dt>
    <dd><?php echo $this->Form->input('tag', array(  
      'type' => 'radio', 'div' => false, 'label' => false, 'options' => $tagRadio, 'legend' => false, 'separator' => "<br />"))?></dd>
  
  <dt><label>タイトル</label></dt>
    <dd><?php echo $this->Form->input('title', array(  
      'type' => 'text', 'div' => false, 'label' => false ))?></dd>  
  </dl>    
  
  <?php echo $this->Form->submit('検索', array('div' => false, 'escape' => false))?>  
<<<<<<< HEAD
</fieldset>  
  
<?php echo $this->Form->end()?> 
=======
  
</fieldset>  
  
<?php echo $this->Form->end()?>  
>>>>>>> origin/master
