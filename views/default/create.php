<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model maks757\seoredirect\entities\RedirectTools */

$this->title = Yii::t('app', 'Create Redirect');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Redirect'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="redirect-tools-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
