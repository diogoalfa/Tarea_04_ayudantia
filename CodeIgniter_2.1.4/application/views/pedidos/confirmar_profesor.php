<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="well">
    <form class="alert alert-block" action="<?= site_url('pedidos');?>" method="post">
        
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Antes de seguir!</h4>
        Solo los profesores pueden pedir salas los profesores .La confirmacion sera envia via correo electronico !
        Confirmas que eres un profesor !
        <br>
        <br>
        
        <button name="btnsoyprofesor" type="submit" class="btn btn-primary">Soy Profesor!</button><button class="btn">Cancelar!</button>
        
    </form>    
</div>
