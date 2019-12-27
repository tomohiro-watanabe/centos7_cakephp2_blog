<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <?= $this->Html->css('bootstrap.min.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script> -->

<style type="text/css">
#popup-background{
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

#popup-item{
    position:fixed;     /* 位置の固定 */
    top: 50%;           /* 表示位置(真ん中に表示) */
    left: 50%;          /* 表示位置(真ん中に表示) */
    margin: 0;          /* 余白の削除 */
    padding: 0;         /* 余白の削除 */
    z-index:1001;       /* 要素のz座標 */
}
</style>

<script>
// jQuery.noConflict();
// var j$ = jQuery;

$(function(){  // 無名関数($の競合を回避)
    // ポップアップ用のタグを消す
    $("#popup-background").hide();
    $("#popup-item").hide();
    
    // class「popupimg」のリンクがクリックされた時のイベント定義
    $('.popupimg').bind('click', function(e){
        // aタグでデフォルト動作を無効にする
        e.preventDefault(); 
 
        // 画像の読み込み
        var img = new Image();
        // クリックされたaタグのhrefを取得する
        var imgsrc = this.href;
        
        // Image()のロードイベントを定義する
        $(img).on('load', function(){
            $('#popup-item').attr('src', imgsrc);
            // ポップアップで表示するためのimgタグに画像が読み込まれているかチェックする
            $('#popup-item').each(function(){
                // 読み込み済みならばポップアップ表示用の関数を呼び出す
                if (this.complete) {
                    imgload(img);
                    return;
                }
            });
            // imgタグのロードイベントを定義
            $('#popup-item').bind('load', function(){
                // 画像がロードされたらポップアップ表示用の関数を呼び出す
                imgload(img);
            });
            
        });
        // Image()に画像を読み込ませる
        img.src = imgsrc;
    });
    
    // ポップアップされた領域のクリックイベント
    $('#popup-background, #popup-item').bind('click', function(){
        // ポップアップを消すため、タグをフェードアウトさせる
        $('#popup-background').fadeOut();
        $('#popup-item').fadeOut();
        
    });
    
    // ポップアップ表示用関数
    function imgload(imgsource){
        // ポップアップの背景部分を表示する
        $('#popup-background').fadeIn(function(){
            // 画像を中心に表示させるため、画像の半分のサイズを取得
            /* 
            * 画像を表示するimgタグ「popup-item」はCSSで画面の中心に
            * 表示するようにしているため、そのまま表示すると画像の左上の端が
            * 中心に来ます。
            * そのため、マイナスのマージンを画像の半分のサイズ設定します。
            */
            var item_hieght_margin = (imgsource.height / 2) * -1;
            var item_width_margin = (imgsource.width / 2) * -1;
            
            // 取得したマージンと画像のサイズをCSSで定義する
            var cssObj = {
                marginTop: item_hieght_margin
                , marginLeft: item_width_margin
                , width: imgsource.width
                , height: imgsource.height
            }
            // 画像の表示用タグにCSSを当て、表示を行う
            $('#popup-item').css(cssObj).fadeIn(100);
        });
    }
});(jQuery)
</script>


<script>
$(function(){
    $("fieldset").hide();
  $("#search").click(function(){
    $("fieldset").toggle();
  });
});
</script>

</head>

<body>
<div id="popup-background"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<span class="navbar-text">
        <?php echo $this->Html->link('Home',array('action' => 'index')); ?>   
        <?php echo $this->Html->link('Add Post',array('action' => 'add')); ?>
        <?php echo $this->Html->link('Log In', array('controller' => 'users', 'action' => 'login'));?>
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));?>
        <button id="search" type="button" class="btn btn-light rounded-pill">検索</button>
</span>
</nav>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
