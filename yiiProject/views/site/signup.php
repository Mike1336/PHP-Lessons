<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\SignupForm */
/* @var $form ActiveForm */

$this->title = 'Sign up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
  <h1>Регистрация</h1>
  <div class="row">
    <div class="col-lg-5">

      <?php $form = ActiveForm::begin([
                'id' => 'signup-form',
      ]); ?>

      <?= $form->field($model, 'username', ['enableAjaxValidation' => true])->textInput(['autofocus' => true]) ?>

      <?= $form->field($model, 'email', ['enableAjaxValidation' => true]) ?>

      <?= $form->field($model, 'password')->passwordInput() ?>

      <?= $form->field($model, 'password_repeat')->passwordInput() ?>

      <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
      ]) ?>

      <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary','name' => 'signup-button']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div><!-- site-signup -->