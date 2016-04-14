<?php
/* @var $this VacunaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vacunas',
);

$this->menu=array(
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Vacunas</h1>

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
      	'nombre_vacuna',
      	'fecha_vacuna',
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
/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
?>
