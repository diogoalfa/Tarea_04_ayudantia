<script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>

    <div class="well">
        <h3>Registrar Administrador </h3><br><br>
        <form  method="post" action="<?= site_url('Inicio/recibirDatos');?>">
            <div class="row">
                <div class="span2">Nombre :</div><div class="span4"><input name="nombre" type="text"></div>
            </div> 
            <div class="row">
                <div class="span2">Rut :</div><div class="span4"><input name="rut" type="text"></div>
            </div> 
            <div class="row">
                <div class="span2">Clave :</div><div class="span4"><input name="clave1" type="password"></div>
            </div>
            <div class="row">
                <div class="span2">Repita su Clave :</div><div class="span4"><input name="clave2" type="password"></div>
            </div>
            <div class="row">
                <div class="span2">Contacto :</div><div class="span4"><input name="contacto" type="text"></div>
            </div>
            <div class="row">
                <div class="span2"></div><div class="span4"></div>
            </div> 
            <div class="row">
                <div class="span4"><button type="submit" class="btn btn-primary">Guardar!</button></div>
            </div>
        </form>
        <br>
        <br>
        <form action="<?= site_url('Inicio');?>" method="post">
           <div>
               <div><button type="submit" class="btn btn-primary" name="btnVerAdmin">ver Administradores!</button></div>
        </div> 
        </form>
        
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
                    <a href="javascript:void(0);"onclick="eliminar('<?php base_url('Inicio') ?>Inicio/eliminar/<? echo $ads->pk; ?>')">Eliminar</a>
                    <a href="Inicio/editar/<?php echo $ads->pk; ?>">Editar</a>
                </td>            </tr>
                   
            <?}
            echo "</tbody></table>";
        //}else{
         //   echo "Noo exiten datos!<br>";
       // }
        ?>
        
    </div>

