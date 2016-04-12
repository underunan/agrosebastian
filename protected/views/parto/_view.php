<?php
/* @var $this PartoController */
/* @var $data Parto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idparto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idparto), array('view', 'id'=>$data->idparto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idganado')); ?>:</b>
	<?php echo CHtml::encode($data->idganado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_parto')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_parto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />


</div>