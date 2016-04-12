<?php
/* @var $this CubiertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cubiertas',
);

$this->menu=array(
	array('label'=>'Ver todos los ganados', 'url'=>array('ganado/index')),
	array('label'=>'Create Cubierta', 'url'=>array('create')),
	array('label'=>'Manage Cubierta', 'url'=>array('admin')),
);
?>

<h1>Ganado Hembras Cubiertas</h1>




<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


