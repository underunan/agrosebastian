<?php
/* @var $this VacunaController */
/* @var $model Vacuna */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vacuna-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'idganado'); ?>
		<?php echo $form->dropDownList($model,'idganado',CHtml::listData(Ganado::model()->findAll(), 'idganado','nombre'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idganado'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre_vacuna'); ?>
		<?php echo $form->dropDownList($model,'nombre_vacuna',array('desparasitante'=>'desparasitante','vacuna'=>'vacuna', 'vitamina'=>'vitamina'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre_vacuna'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_vacuna'); ?>
		<?php echo $form->dateField($model,'fecha_vacuna',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'fecha_vacuna'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-lg col-sm-4')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->