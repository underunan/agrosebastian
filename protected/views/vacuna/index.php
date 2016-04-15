<?php
/* @var $this VacunaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vacunas',
);

$this->menu=array(
	array('label'=>'Ver todos los ganados', 'url'=>array('ganado/index')),
	array('label'=>'Ver ganado cubierto', 'url'=>array('cubierta/index')),
	array('label'=>'Ver parto', 'url'=>array('parto/index')),
);
?>

<h2 class="text-center text-info">Vacunas aplicadas al ganado</h2>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vacuna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


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
      'id'=>'vacuna-grid',
      'dataProvider'=>$model->search(),
      'filter'=>$model,
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
