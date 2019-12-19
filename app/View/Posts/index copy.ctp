<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->element('header')?>
<br>
</br>

<div class="container">
    <div class="row">
        <div class="col-md-9">

<h1>Blog Post</h1><br></br>

<!-- ここで $posts 配列をループして、投稿情報を表示 -->
  <?php foreach ($posts as $post): ?>

<div class="card text-left">

    <div class="card-header">
    <?php echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );?>
    </div>

    <div class="card-body">
    CATEGORY:<p><?php echo $post['Category']['category']; ?></p>
        TAG:<p><?php foreach ($post['Tag'] as $tag): ?>
        <?php echo $tag['tag']; ?>
        <?php endforeach; ?></p>
    <p>BODY: <?php echo $post['Post']['body']; ?></p>
    <p>Image: </p>

    <p> 
    <a href="files/image/photo/10/AME19716073_TP_V.jpg" data-lightbox="group">

    
    <?php $base = $this->Html->url('/files/image/photo/');
        echo $this->Html->image
        ($base . $post['Image'][0]['photo_dir'] . '/' . 'thumb_' . $post['Image'][0]['photo'],
                array('alt' => 'Image')); ?></a></p>
        
    </div>

    <div class="card-footer text-muted">
    <ul style="list-style:none;"><li>
     <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );?>
            <?php echo $this->Html->link(
                    'Edit', array('action' => 'edit', $post['Post']['id'])
                );?>
                </li></ul>
            <?php echo $post['Post']['modified']; ?>
            
    </div>

</div>
    <p></p>
<?php endforeach; ?>


<button type="button" class="btn btn-light rounded-pill"><?php echo $this->Paginator->prev('前へ' . __(''), array(), null, array('class' => 'prev disabled'));?></button>
<button type="button" class="btn btn-light rounded-pill"><?php echo $this->Paginator->next(__('') . ' 次へ', array(), null, array('class' => 'next disabled'));?></button>
<p></p>
</div>


<div class="col-md-3">
<br></br>
<br></br>
<div class="bg-light">
<?php echo $this->element('searchForm')?>
</div>
</div>

            </div>
            </div>

<script src="webroot/js/lightbox.js" type="text/javascript"></script>
</body>
            

<div class="card text-center">
<div class="card-footer text-muted">  
<footer>Blog Post</footer>
</div>
</div>


