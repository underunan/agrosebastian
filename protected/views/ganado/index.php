<?php
/* @var $this GanadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ganados',
);

$this->menu=array(
	array('label'=>'Administración de ganado', 'url'=>array('admin')),
	array('label'=>'Ver ganado cubierto', 'url'=>array('cubierta/index')),
	array('label'=>'Ver parto', 'url'=>array('parto/index')),
	array('label'=>'Aplicación de vacunas', 'url'=>array('vacuna/index')),
);
?>

<h1>Ganados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
