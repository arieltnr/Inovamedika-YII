<?php
$today = date("l, d-M-Y");
$now = date('y-m-d h:i:s');
/** @var yii\web\View $this */

$this->title = 'Dashboard';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"></h1>
    </div>

    <div class="body-content">
        <div class="row">
             <div class="col-lg-12">
                <div class="alert bg-success" role="alert">
                    <em class="fa fa-lg fa-warning">&nbsp;</em> Welcome to the admin dashboard
                        <div style="float: right;">
                            <h4><?php echo $today;?></h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
