<?php
/* @var $this GanadoController */
/* @var $data Ganado */
?>

<div class="row">

<div class="modal fade" id='<?php echo CHtml::encode($data->idganado); ?>' tabindex="-1" role="dialog" aria-labelledby="imagenGanado">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="imagenGanado">
      <?php echo CHtml::encode($data->nombre); ?>
        </h4>
      </div>
      <div class="modal-body">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$data->imagen,$data->imagen,array('width'=>'100%','class'=>'img-thumbnail img-responsive')); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div>


<dl class="dl-horizontal">
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('idganado')); ?>:</b></dt>
  <dd><?php echo CHtml::link(CHtml::encode($data->idganado), array('view', 'id'=>$data->idganado)); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->codigo); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->nombre); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('origen')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->origen); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->fecha_nacimiento); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('raza')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($data->raza); ?></dd>
  <dt><b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b></dt>
  <dd>
   <a href='#<?php echo CHtml::encode($data->idganado); ?>' data-toggle="modal"> 
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$data->imagen,$data->imagen,array('width'=>'140px','height'=>'140px','class'=>'img-thumbnail')); ?>
    </a>
  </dd>
 
</div>

