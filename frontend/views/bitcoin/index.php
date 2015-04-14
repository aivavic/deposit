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

<div class="well well-lg">
    <span class="well well-sm">Label</span>
    <span class="well well-sm">Adress</span>
    <span class="well well-sm">Balance</span>
    <span class="well well-sm">Salary</span>
</div>

<?php foreach ($tableData as $key => $value) : ?>
    <div class="well well-lg">
        <span class="well well-sm"><?= $value->label ?></span>
        <span class="well well-sm"><?= $value->address ?></span>
        <span class="well well-sm"><?= $value->balance ?></span>
        <span class="well well-sm"><?= $value->balance * 2 ?></span>
    </div>
<?php endforeach; ?>

