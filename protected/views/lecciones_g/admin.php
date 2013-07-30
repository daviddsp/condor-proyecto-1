<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	'Manage',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	'tabs'=>array(
			array('label'=>'Regresar a Temas','url'=>array('/Temas_g/index')),
	),
));

/*$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Create Lecciones','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lecciones-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>¡Bienvenido a las lecciones del tema que has seleccionado!</h4>

    </div>
<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'lecciones-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_lecciones',
		//'id_temas',
		'nb_lecciones',
		array(  'header'=>'Ver
				 Contenido',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			
			'template' => '{view}', //detalle de los botones 
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver',
					'url'=>"CHtml::normalizeUrl(array('/Lecciones_g/view', 'id'=>\$data->id_lecciones))",
//'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png', //ruta de la imagen del boton que queremos agregar
					'options' => array('class'=>'vehiculo'),
				),
			),
		),
	),
)); ?>
