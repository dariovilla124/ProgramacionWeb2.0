


<div class="d-flex justify-content-center text centeer" >

    <form class="p-5 bg-light" method="post">

    <div class="text-center">
        <h1 >  REGISTRO </h1>
    </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Escibe nombre" id="nombre" name="nombre">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" placeholder="Escibe apellido" id="apellido" name="apellido">
        </div>

        <div class="form-group">
            <label for="tipodocumento">Tipo de documento:</label>
                <select type="select" class="form-control"  id="tipodocumento"  name="tipodocumento" >
                    <option> Seleccione </option>
                    <option>C.C. Cédula de ciudadanía</option>
                    <option>C.E. Cédula de extranjería</option>
                    <option>P.A. Pasaporte</option>
                    <option>T.I. Tarjeta de identidad.</option>
                    <option>A.S. Adulto sin identidad.</option>
                </select>
        </div>

        <div class="form-group">
            <label for="documento">Digite su documento:</label>
            <input type="text" class="form-control" placeholder="Escibe el numero de su documento" id="documento" name="documento">
        </div>

        <div class="form-group">
            <label for="lugarnacimiento"> Lugar de Nacimiento :</label>
            <select class="form-control" id="lugarnacimiento"  name="lugarnacimiento">
                <option value="">Seleccione su departamento</option>
                <option value = "Amazonas">Amazonas</option>
                <option value = "Antioquia">Antioquia</option>
                <option value = "Arauca">Arauca</option>
                <option value = "Atlántico">Atlántico</option>
                <option value = "Bolívar">Bolívar</option>
                <option value = "Boyacá">Boyacá</option>
                <option value = "Caldas">Caldas</option>
                <option value = "Caquetá">Caquetá</option>
                <option value = "Casanare">Casanare</option>
                <option value = "Cauca">Cauca</option>
                <option value = "Cesar">Cesar</option>
                <option value = "Chocó">Chocó</option>		            
                <option value = "Córdoba">Córdoba</option>
                <option value = "Cundinamarca">Cundinamarca</option>
                <option value = "Guainía">Guainía</option>
                <option value = "Guaviare">Guaviare</option>
                <option value = "Huila">Huila</option>
                <option value = "La Guajira">La Guajira</option>
                <option value = "Magdalena">Magdalena</option>
                <option value = "Meta">Meta</option>
                <option value = "Nariño">Nariño</option>
                <option value = "Norte de Santander">Norte de Santander</option>
                <option value = "Putumayo">Putumayo</option>                
                <option value = "Quindío">Quindío</option>  
                <option value = "Risaralda">Risaralda</option>
                <option value = "San Andrés y Providencia">San Andrés y Providencia</option>
                <option value = "Santander">Santander</option>
                <option value = "Sucre">Sucre</option>
                <option value = "Tolima">Tolima</option>
                <option value = "Valle del Cauca">Valle del Cauca</option>
                <option value = "Vaupés">Vaupés</option>
                <option value = "Vichada">Vichada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fechanacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fechanacimiento" value="2001-09-11" min="1963-01-01" max="2022-12-31"  name="fechanacimiento">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control" placeholder="Escibe tu telefono" id="telefono" name="telefono">
        </div>

        <div class="form-group">
            <label for="email">Correo electronico:</label>
            <input type="email" class="form-control" placeholder="Escribe tu correo electronico" id="email" name="email">
        </div>


        <div class="form-group">
            <label for="user">Usuario:</label>
            <input type="text" class="form-control" placeholder="Escibe tu usuario" id="user" name="user">
        </div>
        

        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="pwd" name="pwd">
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
        $registro = ControladorFormularios::ctrRegistro();
        if($registro == "ok"){

            echo '<script>

            if(window.history.replaceState){
            
                window.history.replaceState(null,null,null,null,null,null,null,null,null,null,window.location.href);
            }
            
            </script>';

            echo '<div class="alert alert-success"> Usuario registrado </div>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>