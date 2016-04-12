<?php
/* @var $this CubiertaController */
/* @var $model Cubierta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcubiertas'); ?>
		<?php echo $form->textField($model,'idcubiertas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idganado'); ?>
		<?php echo $form->textField($model,'idganado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cubierta'); ?>
		<?php echo $form->textField($model,'fecha_cubierta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->