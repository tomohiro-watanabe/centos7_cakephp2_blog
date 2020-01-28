<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <?= $this->Html->css('bootstrap.min.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script> -->

<style type="text/css">

body,
#wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

footer {
  margin-top: auto;
}

ul.head{
    display:table;
    width:500px;
}

ul.head li{
    display:table-cell;
}


#popup-background{
    display:none;
    position:fixed;     /* 位置の固定 */
    top: 0;             /* 表示位置 */
    left: 0;            /* 表示位置 */
    height: 100%;       /* 画面全体に表示 */
    width: 100%;        /* 画面全体に表示 */
    background:#000;    /* 背景色 */
    opacity: 0.60;      /* 透明度 */
    margin: 0;          /* 余白の削除 */
    padding: 0;         /* 余白の削除 */
    z-index:1000;       /* 要素のz座標 */
}

.popup-item{
    position:fixed;     /* 位置の固定 */
    top: 0;          /* 表示位置(真ん中に表示) */
    left: 0;          /* 表示位置(真ん中に表示) */
    margin: 0;          /* 余白の削除 */
    padding: 0;         /* 余白の削除 */
    z-index:1001;       /* 要素のz座標 */
}

.slider-prev{
    position:fixed;     /* 位置の固定 */
    top: 1;          
    left: 0;          /* 表示位置(真ん中に表示) */
    margin: 0;          /* 余白の削除 */
    padding: 0;         
    z-index:1002;
}

.slider-next{
    position:fixed;     /* 位置の固定 */
    top: 1;          /* 表示位置(真ん中に表示) */
    left: 1;          /* 表示位置(真ん中に表示) */
    margin: 0;          /* 余白の削除 */
    padding: 0;
    z-index:1002;
}
</style>

<script>
$(function(){ 
    $('#popup-background').hide();
    $('.popup-item').hide();
    $('.slider-prev').hide();
    $('.slider-next').hide();

    var index = 0;

    $('.popupimg').on('click', function(e){
        e.preventDefault();
        var index = $('.popupimg').index(this);
        $('.popup-item').eq(index).fadeIn();
        $('#popup-background').fadeIn();
        $('button.slider-next').fadeIn();
        $('button.slider-prev').fadeIn();
    });

    $('.slider-next').on('click', function(){
        $('.popup-item').eq(index).fadeOut();
        if(index == 2){
            index = 0;
            }else{
            index++;}
            $('.popup-item').eq(index).fadeIn();
    });

    $('.slider-prev').on('click', function(){
        $('.popup-item').eq(index).fadeOut();
        if(index == 0){
            index = 2;
            }else{
            index--;}
            $('.popup-item').eq(index).fadeIn();
    });
    
    

    $('#popup-background').on('click', function(){
        $('#popup-background, .popup-item, .slider-prev, .slider-next').fadeOut();
    });


    });

$(function(){
    $('.bg-light').hide();
  $('#search').click(function(){
    $('.bg-light').toggle();
  });
});

</script>

</head>

<body>
<!-- <div id="wrapper"> -->
<div id="popup-background"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<span class="navbar-text">
<ul class = "head">
<li><?php echo $this->Html->link('Home',array('controller' => 'posts', 'action' => 'index')); ?></li>   
<li><?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add')); ?></li>
<li><?php echo $this->Html->link('Log In', array('controller' => 'users', 'action' => 'login'));?></li>
<li><?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));?></li>
<li><?php echo $this->Html->link('Csv Add', array('controller' => 'zipcodes', 'action' => 'index'));?></li>
<li><button id="search" type="button" class="btn btn-light rounded-pill">検索</button></li>
</span>
</nav>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
