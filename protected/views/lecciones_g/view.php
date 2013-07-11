<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	$model->id_lecciones,
);

/*$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Create Lecciones','url'=>array('create')),
	array('label'=>'Update Lecciones','url'=>array('update','id'=>$model->id_lecciones)),
	array('label'=>'Delete Lecciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lecciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lecciones','url'=>array('admin')),
);*/
?>



<?php /*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_lecciones',
		'id_temas',
		'nb_lecciones',
	),
)); */

$html_contenido='<div class="bloque-contenedor">

<div class="contenedor-interno">';

$html_contenido.= '<b><div class="titulo-bloque">Lección Nº </b>'
.$model->id_lecciones.' </div><center> <div class="titulo-bloque2">'.$model->nb_lecciones.'</div></center>';

$html_contenido.= '</div></div>';

echo $html_contenido;

$sql = "select * from contenidos where id_lecciones=".$model->id_lecciones;
$leccion = Yii::app() -> db -> createCommand($sql) ->  query();

$html_leccion='<div class="bloque-contenedor">
                <div class="titulo-bloque">Contenido</div>
                <div class="contenedor-interno">';
$i=0;
 foreach($leccion as $fila)  
    {  		//$html_establecimiento.= '<h3><b>Sede N°'.++$i.'</b></h3>';
if($i > 0){ $html_leccion.='<br><br>';}
		$html_leccion.= $fila['descrip_contenidos'].'<br>';

$i++ ;
}
$html_leccion.= '</div></div>';
echo $html_leccion;
?>
