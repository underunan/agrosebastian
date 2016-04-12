<?php
/* @var $this PartoController */
/* @var $model Parto */

$this->breadcrumbs=array(
	'Partos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de parto', 'url'=>array('index')),
	array('label'=>'Agregar parto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#parto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Partos</h1>

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
<?php 

$this->widget(
    'booster.widgets.TbGridView',
    array(
    	'columns'=>array(
			'idparto',
			array(
				'header'=>'Nombre',
				'name'=>'idganado',
				'value'=>'$data->idganado0->nombre',
				),
			'idganado',
			'fecha_parto',
			'sexo',
			array(
				'header'=>'Controles',
				'class'=>'booster.widgets.TbButtonColumn',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				),
		),
		'id'=>'parto-grid',
		'dataProvider'=>$model->search(),
        'type' => 'striped condensed',
    )
);
