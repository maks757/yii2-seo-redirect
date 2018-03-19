<?php

use maks757\seoredirect\entities\RedirectTools;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model maks757\seoredirect\entities\RedirectTools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="redirect-tools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'code')->dropDownList(RedirectTools::CODES) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
