<?php
/* @var $this GanadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ganados',
);

$this->menu=array(
	array('label'=>'Agregar ganado', 'url'=>array('create')),
	array('label'=>'Control ganado', 'url'=>array('admin')),
	array('label'=>'Ver ganado cubierto', 'url'=>array('cubierta/index')),
	array('label'=>'Ver parto', 'url'=>array('parto/index')),
);
?>

<h1>Ganados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
