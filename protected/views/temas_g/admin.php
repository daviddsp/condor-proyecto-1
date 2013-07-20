<?php
$this->breadcrumbs=array(
	'Temas'=>array('index'),
	
);

/*$this->menu=array(
	array('label'=>'List Temas','url'=>array('index')),
	array('label'=>'Create Temas','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('temas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Temas</h1>

<?php
		
		Yii::app()->user->setFlash('success', '<strong>¡Selecciona</strong>  el tema de tu preferencia y observa las lecciones que cada uno de ellos te ofrece!.');
$this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true, // display a larger alert block?
    'fade'=>true, // use transitions?
    'closeText'=>'×', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
	    'success'=>array('block'=>true, 'fade'=>true), // success, info, warning, error or danger
    ),
));
	
		?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'temas-grid',
	'type'=>'bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
	
		array(	'header'=>'Ver lección',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			
			'template' => '{view}', //detalle de los botones 
			'buttons'=>array(
				'view' => array(
				
					'label'=>'Ir',
					'url'=>"CHtml::normalizeUrl(array('/Lecciones_g/admin', 'tema'=>\$data->id_temas))",
					'imageUrl'=>Yii::app()->request->baseUrl.'../img/update.png', //ruta de la imagen del boton que queremos agregar
					//'options' => array('class'=>'temas'),
		  		),
		 	),
	    ),
	),
)); ?>
