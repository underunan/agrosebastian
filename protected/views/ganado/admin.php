<?php
/* @var $this GanadoController */
/* @var $model Ganado */

$this->breadcrumbs=array(
	'Ganados'=>array('index'),
	'Manejar',
);

$this->menu=array(
	array('label'=>'Ver todo el ganado', 'url'=>array('index')),
	array('label'=>'Agregar ganado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ganado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ganados</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'ganado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped condensed',
	'columns'=>array(
		'idganado',
		'codigo',
		'nombre',
		'fecha_nacimiento',
		array(
			'name' => 'imagen',
			#'header' => 'Imagen',
			'type'=>'raw',
			'value'=> 'CHtml::image(Yii::app()->baseUrl."/users-images/".$data->imagen,$data->imagen,array("width"=>"60px","class"=>"img-responsive img-thumbnail text-center"))'
			),
		'raza',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
			'htmlOptions' => array('nowrap'=>'nowrap'),
		),
	),
)); ?>
