<?php $this->layout('master', ['title' => $title])?>

<?php $this->start('css')?>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen, projection"/>
<?php $this->stop()?>

<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>Home</h1>
            <p>Olá, <?php echo $this->e($name)?></p>
        </div>
    </div>
</div>

<?php $this->start('js')?>
    <script type="text/javascript" src="js/materialize.js"></script>
<?php $this->stop()?>