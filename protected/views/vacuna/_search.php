<?php
/* @var $this VacunaController */
/* @var $model Vacuna */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idvacuna'); ?>
		<?php echo $form->textField($model,'idvacuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idganado'); ?>
		<?php echo $form->textField($model,'idganado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_vacuna'); ?>
		<?php echo $form->textField($model,'fecha_vacuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_vacuna'); ?>
		<?php echo $form->textField($model,'nombre_vacuna',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->