<?php
/* @var $this VacunaController */
/* @var $data Vacuna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvacuna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvacuna), array('view', 'id'=>$data->idvacuna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idganado')); ?>:</b>
	<?php echo CHtml::encode($data->idganado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->idganado0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_vacuna')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_vacuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vacuna')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vacuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	


</div>