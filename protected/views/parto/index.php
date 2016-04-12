<?php
/* @var $this PartoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partos',
);

$this->menu=array(
	array('label'=>'Agregar parto', 'url'=>array('create')),
	array('label'=>'Control de parto', 'url'=>array('admin')),
);
?>

<h1>Ganado que tuvieron partos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
