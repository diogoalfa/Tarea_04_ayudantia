
<script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>

    <div class="well">
        <h3>Editar Administrador </h3><br><br>
       
        <form  method="post" action="<?= site_url('Inicio/update/'.$edit->pk.'');?>">
            <div class="row">
                <div class="span2">Nombre :</div><div class="span4">
                <input name="nombre" value="<?php echo $edit->nombre; ?>" type="text"></div>
            </div> 
            <div class="row">
                <div class="span2">Rut :</div><div class="span4">
                <input name="rut" value="<?php echo $edit->rut; ?>" type="text"></div>
            </div> 
            <div class="row">
                <div class="span2">Contacto :</div><div class="span4">
                <input name="contacto" value="<?php echo $edit->contacto; ?>" type="text"></div>
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