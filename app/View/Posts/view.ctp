<!-- File: /app/View/Posts/view.ctp -->
<?php echo $this->element('header')?>


<h2>Title: <?php echo h($post['Post']['title']); ?></h2>
<p><small>Created: <?php echo $post['Post']['modified']; ?></small></p>
<h4><p>Category: <?php echo h($post['Category']['category']); ?></p></h4>
<h4><p>Tag: <?php foreach ($post['Tag'] as $tag): 
                echo $tag['tag']; 
              endforeach; ?></p></h4>
<h3><p>Body:
<?php echo h($post['Post']['body']); ?></p></h3>


<!-- 画像取得ルート　/webroot/files/image(モデル名)/photo(カラム名)/dir(連想配列)/photo(連想配列)    -->
<h4><p>Image: </p>
<p> <?php $base = $this->Html->url('/files/image/photo/');
        echo $this->Html->image
        ($base . $post['Image'][0]['photo_dir'] . '/' . 'thumb_' . $post['Image'][0]['photo'],
                array('alt' => 'Image')); ?></p></h4>
