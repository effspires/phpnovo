<!-- injetar template -->
<?php $this->layout('master', ['title' => $title, 'home' => 'active'])?>

<!-- injetar css específico-->
<?php $this->start('css')?>
<?php $this->stop()?>

<div class="container">
    <div class="row">
        <div class="col s12 ">
            <div class="col s1"></div>
                <div class="col s10">
                    
                </div>
            <div class="col s1"></div>
        </div>
    </div>
</div>

<!-- injetar js específico-->
<?php $this->start('js')?>
<?php $this->stop()?>