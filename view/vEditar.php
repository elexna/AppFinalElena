<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    <div>
    <fieldset  id="editar">
        <label for="CodUsuario">Código del Usuario</label><br>
                <input class="desactivado" type="text" id="CodUsuario" name="CodUsuario" readonly value="<?php echo $codUsuario; ?>">
                <br>

                <label for="DescUsuario" >Descripción del usuario(*)</label><br>
                <input class="campos" type="text" id="DescUsuario" name="DescUsuario" value="<?php echo $descUsuario; ?>">
                <?php
                    echo $errorDescripcion!=null ? "<span style='color:#FF0000'>".$errorDescripcion."</span>" : null;
                ?>
                <br>

                <label for="NumConexiones">Número de conexiones</label><br>
                <input class="desactivado" type="text" id="NumConexiones" name="NumConexiones" readonly value="<?php echo $numConexiones; ?>">
                <br>

                <label for="FechaHoraUltimaConexion">Fecha Hora última Conexión</label><br>
                <input class="desactivado" type="text" id="FechaHoraUltimaConexion" name="FechaHoraUltimaConexion" readonly value="<?php echo (date('d/m/Y H:i:s')); ?>">
                <br>

                <button class="form-button" type="submit" name='Aceptar'>Aceptar</button>
                <button class="form-button" type="submit" name='Cancelar'>Cancelar</button>
                <button class="form-button" type="submit" name='CambiarPassword'>Cambiar Contraseña</button>
    </fieldset>
     <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="volver" type="submit" name='volver'>Volver</button>
    </form>
</div>
</form>