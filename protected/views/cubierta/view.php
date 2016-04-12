<?php
/* @var $this CubiertaController */
/* @var $model Cubierta */

$this->breadcrumbs=array(
	'Cubiertas'=>array('index'),
	$model->idcubiertas,
);

$this->menu=array(
	array('label'=>'List Cubierta', 'url'=>array('index')),
	array('label'=>'Create Cubierta', 'url'=>array('create')),
	array('label'=>'Update Cubierta', 'url'=>array('update', 'id'=>$model->idcubiertas)),
	array('label'=>'Delete Cubierta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcubiertas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cubierta', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->idganado0->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcubiertas',
		array(
		   'name'=>'Fecha Nacimiento',
		   'value'=>$model->idganado0->fecha_nacimiento,
		  ),
		array(
		   'name'=>'imagen',
		   'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->request->baseUrl.'/users-images/'.$model->idganado0->imagen,$model->idganado0->imagen,array('width'=>'140px','class'=>'img-responsive img-thumbnail')),
		  ),
		'fecha_cubierta',
		'observacion',
	),
)); ?>
