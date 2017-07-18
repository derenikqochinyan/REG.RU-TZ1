<h1>Регистрация</h1>

<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['class' => 'form-horizontal']);?>

<?= $form->field($model,'email')->textInput(['autofocus'=>true])->label('Эл. почта')?>

<?= $form->field($model,'password')->passwordInput()->label('Пароль')?>

<?= $form->field($model,'surname')->textInput()->label(Фамилия)?>

<?= $form->field($model,'firstname')->textInput()->label(Имя)?>

<?= $form->field($model,'lastname')->textInput()->label(Отчество)?>

<?= $form->field($model,'organisation')->textInput()->label(Организация)?>

<?= $form->field($model,'inn')->textInput()->label(ИНН)?>

<div>
    <button type="submit" class="btn btn-primary">Регистрация</button>
</div>

<?php ActiveForm::end();?>