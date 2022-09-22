

<div class="d-flex justify-content-center text centeer" >

    <form class="p-5 bg-light" method="post">

    <div class="text-center">
        <h1 color> LOGIN </h1>
    </div>

    <div class="form-group">
        <label for="email">Correo electronico:</label>
        <input type="email" class="form-control" placeholder="Digita tu email" id="email" name="ingresoemail">
    </div>


    <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <input type="password" class="form-control" placeholder="Digita tu contraseña" id="pwd" name="ingresopwd">
    </div>

    <?php
    /**
     * INSTANCIA LA CLASE DE UN METODO NO ESTATICO
     */
    /**$registro = new ControladorFormularios();
    $registro -> ctrRegistro();
    **/
    /**
     * INSTANCIA LA CLASE DE UN METODO ESTATICO
     */
    $ingreso = new ControladorFormularios();
    $ingreso ->ctrIngreso();

    ?>
    <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>