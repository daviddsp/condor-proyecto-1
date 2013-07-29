<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'usuario-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Los campos marcados con<span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>


    <div class="contenedor-interno">

        <div class="contenedor-interno-login">
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Atento, con estos datos podrás ingresar a Cóndor!</strong>
            </div>

            <?php echo $form->labelEx($model, 'nombre'); ?>

            <?php echo $form->textField($model, 'nombre', array('size' => 50, 'maxlength' => 50, 'data-placement' => "right", 'placement' => "right", 'rel' => "tooltip", 'title' => 'Por favor ingrese su nombre')); ?> 
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Nombre', 'Placement' => 'top', 'data-content' => 'Ingrese su nombre ejemplo: Juan, Ricardo, David, etc..!', 'rel' => 'popover'),
            ));
            ?> 
            <?php echo $form->error($model, 'nombre'); ?></td></tr>

            <?php echo $form->labelEx($model, 'apellido'); ?>
            <?php echo $form->textField($model, 'apellido', array('size' => 50, 'maxlength' => 50, 'data-placement' => "right", 'placement' => "right", 'rel' => "tooltip", 'title' => 'Por favor ingrese su apellido')); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Apellido', 'Placement' => 'left', 'data-content' => 'Ingrese su apellido ejemplo: Martinez, Gil, Perez, etc..!', 'rel' => 'popover'),
            ));
            ?> 
            <?php echo $form->error($model, 'apellido'); ?>

            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'data-placement' => "right", 'placement' => "right", 'rel' => "tooltip", 'title' => 'Por favor ingrese su correo electronico')); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Correo Electrónico', 'Placement' => 'left', 'data-content' => 'Ingrese su correo electronico ejemplo: jperez@gmail.com, damian@hotmail.com, rosa@yahoo.com, etc..!', 'rel' => 'popover'),
            ));
            ?> 
            <?php echo $form->error($model, 'email'); ?>

            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 128, 'data-placement' => "right", 'placement' => "right", 'rel' => "tooltip", 'title' => 'Por favor ingrese su usuario')); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Usuario', 'Placement' => 'left', 'data-content' => 'Ingrese el nombre de su usuario ejemplo: prodriguez, jmartinez, ngil, etc..!', 'rel' => 'popover'),
            ));
            ?> 
            <?php echo $form->error($model, 'username'); ?>

            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 128, 'data-placement' => "right", 'placement' => "right", 'rel' => "tooltip", 'title' => 'Por favor ingrese su contraseña')); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Clave', 'placement' => 'top', 'data-content' => 'Ingrese su contraseña por recomendaciones de seguridad le recomendamos sutituir algunas letras por números y colocar caracteres especial ejemplo: c4rl05, m4r14, pr0y3ct0*Cuc, juegue un poco con la combinaciones entre letras y números.', 'rel' => 'popover'),
            ));
            ?> 
            <?php echo $form->error($model, 'password'); ?>

            <?php echo $form->labelEx($model, 'perfil'); ?>
            <?php echo $form->dropDownList($model, 'perfil', array('Seleccione su perfil ...!', 'Estudiante', 'Informático', 'DBA', 'Programador', 'Otro')); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'size' => 'mini',
                'label' => 'i',
                'type' => 'danger',
                'htmlOptions' => array('Title' => 'Perfil', 'Placement' => 'left', 'data-content' => 'Ingrese su perfil puede seleccionar las siguientes opciones: Estudiante, Informático, DBA, Programador, otro..!', 'rel' => 'popover'),
            ));
            ?> 

            <?php echo $form->error($model, 'perfil'); ?>
        </div>
        <center><?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'label' => 'Guardar',
                'loadingText' => 'loading...',
                'htmlOptions' => array('id' => 'buttonStateful'),
            ));
            ?></center>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
