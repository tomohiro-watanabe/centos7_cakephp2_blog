<!-- File: /app/View/Posts/view.ctp -->
<?php echo $this->element('header')?>


Title: <?php echo h($post['Post']['title']); ?>
<p><small>Created: <?php echo $post['Post']['modified']; ?></small></p>
<p>Category: <?php echo h($post['Category']['category']); ?></p>
<p>Tag: <?php foreach ($post['Tag'] as $tag): 
                echo $tag['tag']; 
              endforeach; ?></p>
<p>Body:
<?php echo h($post['Post']['body']); ?></p>


<!-- 画像取得ルート　/webroot/files/image(モデル名)/photo(カラム名)/dir(連想配列)/photo(連想配列)    -->
<p>Image: </p>
<p> 
<?php $base = $this->Html->url('/files/image/photo/');
          $link = $base . $post['Image'][0]['photo_dir'] . '/' . $post['Image'][0]['photo'];
          ?>

    <?php 
        echo $this->Html->image
        ($base . $post['Image'][0]['photo_dir'] . '/' . 'thumb_' . $post['Image'][0]['photo'],
                array('alt' => 'Image'),); ?>
    </a></p>

    <?php echo $this->element('footer')?>
