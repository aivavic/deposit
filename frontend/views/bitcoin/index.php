<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'bitcoin';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>bitcoin/index</h1>

<div class="row">
    <?php
    if (!empty($serverAdress->address)) {
        echo '<div class="alert alert-success" role="alert">Well done! Your personal wallet adress : ' . $serverAdress->address . '. Send money from your bitcoin control pannel.</div>';
    }
    ?>
</div>


<div class="row">
    <form 
        action="<?= Url::toRoute('bitcoin/index') ?>"
        method="post" id="bitcoinForm1">
    <div class="col-lg-6">
        <div class="input-group">            
            <input type="text" class="form-control" name="clientAdress" placeholder="Enter your Bitcoin address">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="Go">Go!</button>
            </span>            
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    </form>
</div>

<br>

<div class="row">
    <div class="col-lg-5 well">Label</div>
    <div class="col-lg-5 well">Adress</div>
    <div class="col-lg-1 well">Balance</div>
    <div class="col-lg-1 well">Salary</div>
</div>

<?php foreach ($tableData as $key => $value) : ?>
<div class="row">
    <div class="col-lg-5 well"><?= $value->label ?></div>
    <div class="col-lg-5 well"><?= $value->address ?></div>
    <div class="col-lg-1 well"><?= $value->balance ?></div>
    <div class="col-lg-1 well"><?= $value->balance * 2 ?></div>
</div>
<?php endforeach; ?>

