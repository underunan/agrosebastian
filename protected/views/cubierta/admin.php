<?php
/* @var $this CubiertaController */
/* @var $model Cubierta */

$this->breadcrumbs=array(
	'Cubiertas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cubierta', 'url'=>array('index')),
	array('label'=>'Create Cubierta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cubierta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="text-center text-info">Administración de vacas preñadas</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php/* $this->renderPartial('_search',array(
	'model'=>$model,
)); ?> */
</div><!-- search-form -->

<?php 

$this->widget(
    'booster.widgets.TbGridView',
    array(
    	'columns'=>array(
    		'idcubiertas',
			'idganado',
			array(
				'header'=>'Nombre',
				'name'=>'idganado',
				'value'=>'$data->idganado0->nombre',
				),
			'fecha_cubierta',
			'observacion',
			array(
				'header'=>'Controles',
				'class'=>'booster.widgets.TbButtonColumn',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				),
		),
		'id'=>'parto-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
        'type' => 'striped condensed',
    )
);

?>


<?php 
/*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cubierta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idcubiertas',
		'idganado',
		'fecha_cubierta',
		'observacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
*/
?>
