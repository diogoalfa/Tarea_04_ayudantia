<script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>
<div class="well">
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="span12"><h3 style="text-align:center">Registrar Administrador</h3><br><br></div>
        </div>
        <div class="span4"></div>
        <div class="span4">

        <?php        
            $nombre= array(
                'name'=> 'nombre',
                'id'=> 'nombre',
                'placeholder' =>'Nombre',
                );
            $rut= array(
                'name'=> 'rut',
                'id'=> 'rut',
                'placeholder' =>'Rut',
                );
            $clave= array(
                'name'=> 'clave1',
                'id'=> 'clave1',
                'placeholder' =>'Contraseña',
                );
            $clave2= array(
                'name'=> 'clave2',
                'id'=> 'clave2',
                'placeholder' =>'Repite contraseña',
                );
            $contacto= array(
                'name'=> 'contacto',
                'id'=> 'contacto',
                'placeholder' =>'Contacto',
                );
            $enviar= array(
                'name'=> 'enviar',
                'id'=> 'enviar',
                'class' =>'btn btn-primary',
                'value'=>'Registar',
                );                                                                            
         ?>
        
            <table border="0">
                <?php echo form_open('Inicio/recibirDatos'); ?>
                    <tr>
                        <td><?php echo form_input($nombre); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_input($rut); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_password($clave); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_password($clave2); ?></td>
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
    <div class="well">    
        <div class="row-fluid">
            <div class="span12">
                        <?php 
        /* @var $admins type */
        
        //if(isset($admins)){
            echo "<table class='table table-hover-striped'>
                   <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Rut</th>
                        <th>Contacto</th>
                        <th>Opcion</th>
                    </tr> 
                  </thead><tbody>";
              
            foreach ($admins as $ads) { ?>
             <tr>
                <td><?= $ads->nombre; ?></td>
                <td><?= $ads->rut; ?></td>
                <td><?= $ads->contacto ;?></td>
                <td>
                    <a class="btn btn-danger" href="javascript:void(0);"onclick="eliminar('<?php base_url('Inicio') ?>Inicio/eliminar/<? echo $ads->pk; ?>')">Eliminar</a>
                    <a class="btn btn-succes" href="Inicio/editar/<?php echo $ads->pk; ?>">Editar</a>
                </td>            </tr>
                   
            <?}
            echo "</tbody></table>";
        //}else{
         //   echo "Noo exiten datos!<br>";
       // }
        ?>
            </div>
        </div>
    </div>    
        
    

