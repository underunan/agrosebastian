<?php
/* @var $this PartoController */
/* @var $model Parto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idparto'); ?>
		<?php echo $form->textField($model,'idparto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idganado'); ?>
		<?php echo $form->textField($model,'idganado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_parto'); ?>
		<?php echo $form->textField($model,'fecha_parto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->