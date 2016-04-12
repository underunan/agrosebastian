<?php
/* @var $this CubiertaController */
/* @var $data Cubierta */
?>

<div class="row">
<dl class="dl-horizontal">
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('idcubiertas')); ?>:</b></dt>
  <dd><?php echo CHtml::link(CHtml::encode($data->idcubiertas), array('view', 'id'=>$data->idcubiertas)); ?></dd>

  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('idganado')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->idganado); ?></dd>

  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->idganado0->nombre); ?></dd>
  

  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cubierta')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->fecha_cubierta); ?></dd>

  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b></dt>
  <dd> <?php echo CHtml::encode($data->observacion); ?>  </dd>

 <dt><b><?php echo CHtml::encode($data->getAttributeLabel('Imagen')); ?>:</b></dt>
  <dd>
	<a href="#modalImagen" data-toggle="modal"> 
  		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$data->idganado0->imagen,$data->idganado0->imagen,array('width'=>'140px','height'=>'140px','class'=>'img-thumbnail')); ?>
	</a>
  	</dd>
</dl>

</div>