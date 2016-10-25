<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Order';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Example Order PesanFutsal</p>
    <?php $form = ActiveForm::begin(['action' => ['site/proses'],'method' => 'POST']); ?>

    <?= $form->field($model, 'name')->textInput(['readonly' => 1, 'value' => 'Rizal']) ?>

    <?= $form->field($model, 'tgl')->textInput(['readonly' => 1, 'value' => '25/10/2016'])->label('Tgl Bermain') ?>

    <?= $form->field($model, 'tempat')->textInput(['readonly' => 1, 'value' => 'Soccer'])->label('Tempat Bermain') ?>

    <?= $form->field($model, 'lapangan')->textInput(['readonly' => 1, 'value' => 'Lapangan A'])->label('Lapangan') ?>

    <?= $form->field($model, 'jam')->textInput(['readonly' => 1, 'value' => '2'])->label('Jam Bermain') ?>

    <?= $form->field($model, 'total')->textInput(['readonly' => 1, 'value' => '100000'])->label('Total Pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Bayar', ['class' => 'btn btn-primary']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>