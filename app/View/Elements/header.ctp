<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->script('jquery-3.3.1.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
<script>
$("fieldset").hide();

$(document).ready(function(){
    $("fieldset").hide();
  $("button").click(function(){
    $("fieldset").toggle();
  });
});
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href="webroot/css/lightbox.css" type="text/css" rel="stylesheet" media="all" />

</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<span class="navbar-text">
        <?php echo $this->Html->link('Home',array('action' => 'index')); ?>   
        <?php echo $this->Html->link('Add Post',array('action' => 'add')); ?>
        <?php echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));?>
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));?>
        <button type="button" class="btn btn-light rounded-pill">検索</button>
</span>
</nav>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
