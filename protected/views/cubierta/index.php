<?php
/* @var $this CubiertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cubiertas',
);

$this->menu=array(
	array('label'=>'Ver todos los ganados', 'url'=>array('ganado/index')),
	array('label'=>'Ver parto', 'url'=>array('parto/index')),
  array('label'=>'Aplicación de vacunas', 'url'=>array('vacuna/index')),
);
?>

<h2 class="text-center">Ganado Hembras Cubiertas</h2>

<?php 

$this->widget(
    'booster.widgets.TbGridView',
    array(
      'columns'=>array(
      	array(
      			'header'=>'Nombre',
				'value'=>'$data->idganado0->nombre',
			),
      	'fecha_cubierta',
      	'observacion',
      	array(
      			'header'=>'Imagen',
				'type'=>'raw',
				'value'=>'CHtml::image(Yii::app()->request->baseUrl."/users-images/".$data->idganado0->imagen,$data->idganado0->imagen,array("width"=>"90px","height"=>"90px","class"=>"img-thumbnail"))',
			),

    ),
      'id'=>'cubierta-grid',
      'dataProvider'=>$model->search(),
      'type' => 'striped condensed',
    )
);

?>

<?php
 /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
 ?>


