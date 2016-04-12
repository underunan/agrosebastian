<?php
/* @var $this GanadoController */
/* @var $model Ganado */

$this->breadcrumbs=array(
	'Ganados'=>array('index'),
	$model->idganado,
);

$this->menu=array(
	array('label'=>'Ver todo el ganado', 'url'=>array('index')),
	array('label'=>'Agregar ganado', 'url'=>array('create')),
	array('label'=>'Actualizar ganado', 'url'=>array('update', 'id'=>$model->idganado)),
	array('label'=>'Eliminar ganado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idganado),'confirm'=>'¿Estas seguro de querer eliminar este dato?')),
	array('label'=>'Manejar ganado', 'url'=>array('admin')),
);
?>

<h1>Ver el ganado con ID #<?php echo $model->idganado; ?></h1>

<div class="row">
<dl class="dl-horizontal">

  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('idganado')); ?>:</b></dt>
  <dd><?php echo CHtml::link(CHtml::encode($model->idganado), array('view', 'id'=>$model->idganado,)); ?></dd>
  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($model->codigo); ?></dd>
  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('nombre')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($model->nombre); ?></dd>
  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('origen')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($model->origen); ?></dd>
  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('fecha_nacimiento')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($model->fecha_nacimiento); ?></dd>
  <dt><b><?php echo CHtml::encode($model->getAttributeLabel('raza')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($model->raza); ?></dd>
  <dt><b><?php echo "Número de parto"; //echo CHtml::encode($numParto->getAttributeLabel('count')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($numParto); ?></dd>
 <?php if($cubierta!=null){ ?>
  <dt><b><?php echo CHtml::encode($cubierta->getAttributeLabel('fecha_cubierta')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($cubierta->fecha_cubierta); ?></dd>
  <dt><b><?php echo CHtml::encode($cubierta->getAttributeLabel('observacion')); ?>:</b></dt>
  <dd><?php echo CHtml::encode($cubierta->observacion); ?></dd>
 <?php }?>
<dt><b><?php echo CHtml::encode($model->getAttributeLabel('imagen')); ?>:</b></dt>
  <dd> 
  	<a href="#modalImagen" data-toggle="modal"> 
  		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$model->imagen,$model->imagen,array('width'=>'140px','height'=>'140px','class'=>'img-thumbnail')); ?>
  	</a>
  </dd>
</dl>



</div>

<div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="imagenGanado">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="imagenGanado">
			<?php echo CHtml::link(CHtml::encode($model->idganado), array('view', 'id'=>$model->idganado)); ?>
        </h4>
      </div>
      <div class="modal-body">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$model->imagen,$model->imagen,array('width'=>'100%','class'=>'img-thumbnail img-responsive')); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idganado',
		'codigo',
		'nombre',
		'fecha_nacimiento',
		'imagen',
		'raza',
	),
)); */?>

