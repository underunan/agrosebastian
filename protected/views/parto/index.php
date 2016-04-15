<?php
/* @var $this PartoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partos',
);

$this->menu=array(
	array('label'=>'Ver todo el ganado', 'url'=>array('ganado/index')),
	array('label'=>'Ver ganado cubierto', 'url'=>array('cubierta/index')),
	array('label'=>'Aplicación de vacunas', 'url'=>array('vacuna/index')),
);
?>

<h1>Ganado que tuvieron partos</h1>

<?php 

$this->widget(
    'booster.widgets.TbGridView',
    array(
      'columns'=>array(
      	'idganado',
      	array(
      			'header'=>'Nombre',
				'value'=>'$data->idganado0->nombre',
			),
      	'sexo',
      	'fecha_parto',
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
/*
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
?>
