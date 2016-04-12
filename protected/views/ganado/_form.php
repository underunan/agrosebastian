<?php
/* @var $this GanadoController */
/* @var $model Ganado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ganado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('class'=>'form-control','placeholder'=>'Codigo o chapeta')); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>100,'maxlength'=>100,'class'=>'form-control','placeholder'=>'Nombre del animal')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'origen'); ?>
		<?php echo $form->dropDownList($model,'origen',array('criollo'=>'criollo','nuevo'=>'nuevo'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'origen'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->dateField($model,'fecha_nacimiento',array('class'=>'form-control','placeholder'=>'Fecha de nacimiento o de llegada')); ?>
		<?php //echo $form->textField($model,'fecha_nacimiento',array('class'=>'form-control','placeholder'=>'Fecha de nacimiento o de llegada')); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->FileField($model, 'imagen',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'raza'); ?>
		<?php echo $form->textField($model,'raza',array('size'=>20,'maxlength'=>20,'class'=>'form-control','placeholder'=>'Raza del animal')); ?>
		<?php echo $form->error($model,'raza'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-danger btn-lg col-sm-3')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->