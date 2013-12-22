
<script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>

    <div class="well">
<script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="span12"><h3 style="text-align:center">Editar Administrador </h3><br><br></div>
        </div>
        <div class="span4"></div>
        <div class="span4">

        <?php       
            $nombre= array(
                'name'=> 'nombre',
                'id'=> 'nombre',
                'placeholder' =>'Nombre',
                'value' => $edit->nombre,
                );
            $rut= array(
                'name'=> 'rut',
                'id'=> 'rut',
                'placeholder' =>'Rut',
                'value' => $edit->rut,
                );
            $contacto= array(
                'name'=> 'contacto',
                'id'=> 'contacto',
                'placeholder' =>'Contacto',
                'value' => $edit->contacto,
                );
            $enviar= array(
                'name'=> 'enviar',
                'id'=> 'enviar',
                'class' =>'btn btn-primary',
                'value'=>'Editar',
                );                                                                            
         ?>
        
            <table border="0">
                <?php echo form_open('Inicio/update/'.$edit->pk.''); ?>
                    <tr>
                        <td><?php echo form_input($nombre); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_input($rut); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_input($contacto); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_submit($enviar); ?></td>
                    </tr>
                <?php echo form_close(); ?>
            </table><br><br>
       </div>
       <div class="span4"></div>
        </div>  
        </div>      