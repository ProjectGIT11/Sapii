<html>
    <!-- CSS only -->
    <!-- Headers -->
    <?php
   //session_start();
include_once '../../Vista/HeaderProyectos.php';
include_once '../../Modelo/Conexion.php';
// Se valida que el usuario este logeado


 session_start();
 /*
 if(!isset($_SESSION['username'])){
     session_unset();
     session_destroy();
     header('Location: ../formulario/sesion.php');
 }
*/
    ?>


    <body>


        <input type="hidden" value="<?php echo $fuente; ?>" id="Platform">
        <input type="hidden" value="<?php echo $id_user_plataforma; ?>" id="UserPlatform">
        <input type="hidden" value="<?php echo $id_user; ?>" id="id_user">
        <input type="hidden" value="<?php echo $nodo; ?>" id="nodo">
        <img src="../../Recursos/De/LOGOS_SENNOVA_SENA.png" style="position: absolute;  margin-left: 80%; width:300px ; height:100px ;" class="float-end"alt="">
        <div class="box">
            <div class="row content">
            <?php include 'Nuevomenu.php'; ?>
                <div class="col-8 text-center" Style="margin-left:30%;margin-right:10%;">
                    <div class="row">
                        <div class="col">
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-left" style="margin:0px 150px 0px 15px;">
                            <h2 style="font-size:40px;" class="texto-titulo-perfil">MIS PROYECTOS</h2>
                        </div>
                    </div>
                    <br>
                    <br>

                    <br>
                    <div class="card" style=" margin-right:30% ;">
        <div class="card-header font-weight-bold">
    Formulario de Registro
  </div>
  <div class="card-body">
                    <form class="formulario-login" action="../../Controladores/registrarMisproyectos.php" method="post" style="margin: 0px 0px 0px 0%;">
<div class="row ">
<div class="col-sm-8 text-justify">

<div class="form-row">
<div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Cedula</label>
    <input type="mail" class=" campo-user" id="documento" name="cedula" aria-describedby="emailHelp" required>
    </div>
    </div>

    <div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Nombres completos</label>
    <input type="text" class=" campo-user" id="documento" name="nombresc" aria-describedby="emailHelp" required>
    </div>
    </div>  

    <div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo</label>
    <input type="mail" class=" campo-user" id="documento" name="email" aria-describedby="emailHelp" required>
    </div>
    </div>
    <div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Numero de contacto</label>
    <input type="text" class=" campo-user" id="documento" name="telefono" aria-describedby="emailHelp" required>
    </div>
    </div>

    <div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Nombre del proyecto</label>
    <input type="text" class=" campo-user" id="documento" name="proyecto" aria-describedby="emailHelp" required>
    </div> 
    </div>


<!--    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label">Fecha de Registro</label>
    <input type="date" class=" campo-user" id="documento" name="registro" aria-describedby="emailHelp" required>
    </div>
--> 
<div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Centro Regional</label>
    <select  class="campo-user" id="documento" name="centror" aria-describedby="emailHelp">

    <option value="Amazonas 	Despacho Direcci??n ">Amazonas 	Despacho Direcci??n</option>

    <option value="Amazonas	Centro para la Biodiversidad y el Turismo del Amazonas">Amazonas	Centro para la Biodiversidad y el Turismo del Amazonas</option>

    <option value="Antioquia	Despacho Direcci??n">Antioquia	Despacho Direcci??n</option>

    <option value="Antioquia	Centro de los Recursos Naturales Renovables -La Salada">Antioquia	Centro de los Recursos Naturales Renovables -La Salada</option>

    <option value="Antioquia	Centro del Dise??o y Manufactura del Cuero">Antioquia	Centro del Dise??o y Manufactura del Cuero</option>

    <option value="Antioquia	Centro de Formaci??n en Dise??o, Confecci??n y Moda.">Antioquia	Centro de Formaci??n en Dise??o, Confecci??n y Moda.</option>

    <option value="Antioquia	Centro para el Desarrollo del H??bitat y la Construcci??n">Antioquia	Centro para el Desarrollo del H??bitat y la Construcci??n</option>

    <option value="Antioquia	Centro de Tecnolog??a de la Manufactura Avanzada.">Antioquia	Centro de Tecnolog??a de la Manufactura Avanzada.</option>

    <option value="Antioquia	Centro Tecnol??gico del Mobiliario">Antioquia	Centro Tecnol??gico del Mobiliario</option>

    <option value="Antioquia	Centro Textil y de Gesti??n Industrial">Antioquia	Centro Textil y de Gesti??n Industrial</option>

    <option value="Antioquia	Centro de Comercio">Antioquia	Centro de Comercio</option>

    <option value="Antioquia	Centro de Servicios de Salud">Antioquia	Centro de Servicios de Salud</option>

    <option value="Antioquia	Centro de Servicios y Gesti??n Empresarial">Antioquia	Centro de Servicios y Gesti??n Empresarial</option>

    <option value="Antioquia	Complejo Tecnol??gico para la Gesti??n Agroempresarial">Antioquia	Complejo Tecnol??gico para la Gesti??n Agroempresarial</option>

    <option value="Antioquia Complejo Tecnol??gico Minero Agroempresarial">Antioquia Complejo Tecnol??gico Minero Agroempresarial</option>

    <option value="Antioquia Centro de la Innovaci??n, la Agroindustria y la Aviaci??n">Antioquia Centro de la Innovaci??n, la Agroindustria y la Aviaci??n</option>

    <option value="Antioquia Complejo Tecnol??gico Agroindustrial, Pecuario y Tur??stico">Antioquia Complejo Tecnol??gico Agroindustrial, Pecuario y Tur??stico</option>

    <option value="Antioquia Complejo Tecnol??gico, Tur??stico y Agroindustrial del Occidente Antioque??o">Antioquia Complejo Tecnol??gico, Tur??stico y Agroindustrial del Occidente Antioque??o</option>

    <option value="Antioquia Centro de Formaci??n Minero Ambiental">Antioquia Centro de Formaci??n Minero Ambiental</option>

    <option value="Arauca Despacho Direcci??n">Arauca Despacho Direcci??n</option>

    <option value="Arauca Centro de Gesti??n y Desarrollo Agroindustrial de Arauca">Arauca Centro de Gesti??n y Desarrollo Agroindustrial de Arauca</option>

    <option value="Atl??ntico	Despacho Direcci??n">Atl??ntico	Despacho Direcci??n</option>

    <option value="Atl??ntico	Centro para el Desarrollo Agroecologico y Agroindustrial">Atl??ntico	Centro para el Desarrollo Agroecologico y Agroindustrial</option>

    <option value="Atl??ntico	Centro Nacional Colombo Alem??n">Atl??ntico	Centro Nacional Colombo Alem??n</option>

    <option value="Atl??ntico	Centro Industrial y de Aviaci??n">Atl??ntico	Centro Industrial y de Aviaci??n</option>

    <option value="Atl??ntico	Centro de Comercio y Servicios">Atl??ntico	Centro de Comercio y Servicios</option>

    <option value="Bol??var	Despacho Direcci??n">Bol??var	Despacho Direcci??n</option>

    <option value="Bol??var	Centro Agroempresarial y Minero">Bol??var	Centro Agroempresarial y Minero</option>

    <option value="Bol??var	Centro Internacional N??utico, Fluvial y Portuario">Bol??var	Centro Internacional N??utico, Fluvial y Portuario</option>

    <option value="Bol??var	Centro para la Industria Petroqu??mica">Bol??var	Centro para la Industria Petroqu??mica</option>

    <option value="Bol??var	Centro de Comercio y Servicios">Bol??var	Centro de Comercio y Servicios</option>

    <option value="Boyac??	Despacho Direcci??n">Boyac??	Despacho Direcci??n</option>

    <option value="Boyac??	Centro de Desarrollo Agropecuario y Agroindustrial">Boyac??	Centro de Desarrollo Agropecuario y Agroindustrial</option>

    <option value="Boyac??	Centro Minero">Boyac??	Centro Minero</option>

    <option value="Boyac??	Centro de Gesti??n Administrativa y Fortalecimiento Empresarial">Boyac??	Centro de Gesti??n Administrativa y Fortalecimiento Empresarial</option>

    <option value="Boyac??	Centro Industrial de Mantenimiento y Manufactura">Boyac??	Centro Industrial de Mantenimiento y Manufactura</option>

    <option value="Caldas	Despacho Direcci??n">Caldas	Despacho Direcci??n</option>

    <option value="Caldas	Centro para la Formaci??n Cafetera">Caldas	Centro para la Formaci??n Cafetera</option>

    <option value="Caldas	Centro de Automatizaci??n Industrial">Caldas	Centro de Automatizaci??n Industrial</option>

    <option value="Caldas	Centro de Procesos Industriales y Construcci??n">Caldas	Centro de Procesos Industriales y Construcci??n</option>

    <option value="Caldas	Centro de Comercio y Servicios">Caldas	Centro de Comercio y Servicios</option>

    <option value="Caldas	Centro Pecuario y Agroempresarial">Caldas	Centro Pecuario y Agroempresarial</option>

    <option value="Caquet??	Despacho Direcci??n">Caquet??	Despacho Direcci??n</option>

    <option value="Caquet??	Centro Tecnol??gico de la Amazonia">Caquet??	Centro Tecnol??gico de la Amazonia</option>

    <option value="Casanare	Despacho Direcci??n">Casanare	Despacho Direcci??n</option>

    <option value="Casanare	Centro Agroindustrial y Fortalecimiento Empresarial de Casanare">Casanare	Centro Agroindustrial y Fortalecimiento Empresarial de Casanare</option>

    <option value="Cauca	Despacho Direcci??n">Cauca	Despacho Direcci??n</option>

    <option value="Cauca	Centro Agropecuario">Cauca	Centro Agropecuario</option>

    <option value="Cauca	Centro de Teleinform??tica y Producci??n Industrial">Cauca	Centro de Teleinform??tica y Producci??n Industrial</option>

    <option value="Cauca	Centro de Comercio y Servicios">Cauca	Centro de Comercio y Servicios</option>

    <option value="Cesar	Despacho Direcci??n">Cesar	Despacho Direcci??n</option>

    <option value="Cesar	Centro Biotecnol??gico del Caribe">Cesar	Centro Biotecnol??gico del Caribe</option>

    <option value="Cesar	Centro Agroempresarial">Cesar	Centro Agroempresarial</option>

    <option value="Cesar	Centro de Operaci??n y Mantenimiento Minero">Cesar	Centro de Operaci??n y Mantenimiento Minero</option>

    <option value="Choco	Despacho Direcci??n">Choco	Despacho Direcci??n</option>

    <option value="Choco	Centro de Recursos Naturales, Industria y Biodiversidad">Choco	Centro de Recursos Naturales, Industria y Biodiversidad</option>

    <option value="Cundinamarca	Despacho Direcci??n">Cundinamarca	Despacho Direcci??n</option>

    <option value="Cundinamarca	Centro Industrial y de Desarrollo Empresarial de Soacha">Cundinamarca	Centro Industrial y de Desarrollo Empresarial de Soacha</option>

    <option value="Cundinamarca	Centro de Desarrollo Agroindustrial y Empresarial">Cundinamarca	Centro de Desarrollo Agroindustrial y Empresarial</option>

    <option value="Cundinamarca	Centro Agroecol??gico y Empresarial">Cundinamarca	Centro Agroecol??gico y Empresarial</option>

    <option value="Cundinamarca	Centro de la Tecnolog??a de Dise??o y la Productividad Empresarial">Cundinamarca	Centro de la Tecnolog??a de Dise??o y la Productividad Empresarial</option>

    <option value="Cundinamarca	Centro de Biotecnolog??a Agropecuaria">Cundinamarca	Centro de Biotecnolog??a Agropecuaria</option>

    <option value="Cundinamarca	Centro de Desarrollo Agroempresarial">Cundinamarca	Centro de Desarrollo Agroempresarial</option>

    <option value="C??rdoba	Despacho Direcci??n">C??rdoba	Despacho Direcci??n</option>

    <option value="C??rdoba	Centro Agropecuario y de Biotecnolog??a el Porvenir">C??rdoba	Centro Agropecuario y de Biotecnolog??a el Porvenir</option>

    <option value="C??rdoba	Centro de Comercio, Industria y Turismo de C??rdoba">C??rdoba	Centro de Comercio, Industria y Turismo de C??rdoba</option>

    <option value="Direcci??n General	Despacho Direcci??n">Direcci??n General	Despacho Direcci??n</option>

    <option value="Direcci??n General	Oficina de Control Interno">Direcci??n General	Oficina de Control Interno</option>

    <option value="Direcci??n General	Oficina de Control Interno Disciplinario">Direcci??n General	Oficina de Control Interno Disciplinario</option>

    <option value="Direcci??n General	Oficina de Comunicaciones">Direcci??n General	Oficina de Comunicaciones</option>

    <option value="Direcci??n General	Oficina de Sistemas">Direcci??n General	Oficina de Sistemas</option>

    <option value="Direcci??n General	Direcci??n Jur??dica">Direcci??n General	Direcci??n Jur??dica</option>

    <option value="Direcci??n General	Secretar??a General">Direcci??n General	Secretar??a General</option>

    <option value="Direcci??n General	Direcci??n de Planeaci??n y Direccionamiento Corporativo">Direcci??n General	Direcci??n de Planeaci??n y Direccionamiento Corporativo</option>

    <option value="Direcci??n General	Direcci??n Administrativa y Financiera">Direcci??n General	Direcci??n Administrativa y Financiera</option>

    <option value="Direcci??n General	Direcci??n de Empleo y Trabajo">Direcci??n General	Direcci??n de Empleo y Trabajo</option>

    <option value="Direcci??n General	Direcci??n de Formaci??n Profesional">Direcci??n General	Direcci??n de Formaci??n Profesional</option>

    <option value="Direcci??n General	Direcci??n Sistema Nacional de Formaci??n para el Trabajo">Direcci??n General	Direcci??n Sistema Nacional de Formaci??n para el Trabajo</option>

    <option value="Direcci??n General	Direcci??n de Promoci??n y Relaciones Corporativas">Direcci??n General	Direcci??n de Promoci??n y Relaciones Corporativas</option>

    <option value="Distrito Capital	Despacho Direcci??n">Distrito Capital	Despacho Direcci??n</option>

    <option value="Distrito Capital	Centro de Tecnolog??as para la Construcci??n y la Madera">Distrito Capital	Centro de Tecnolog??as para la Construcci??n y la Madera</option>

    <option value="Distrito Capital	Centro de Electricidad, Electr??nica y Telecomunicaciones">Distrito Capital	Centro de Electricidad, Electr??nica y Telecomunicaciones</option>

    <option value="Distrito Capital	Centro de Gesti??n Industrial">Distrito Capital	Centro de Gesti??n Industrial</option>

    <option value="Distrito Capital	Centro de Manufactura en Textil y Cuero">Distrito Capital	Centro de Manufactura en Textil y Cuero</option>

    <option value="Distrito Capital	Centro de Tecnolog??as del Transporte">Distrito Capital	Centro de Tecnolog??as del Transporte</option>

    <option value="Distrito Capital	Centro Metalmec??nico">Distrito Capital	Centro Metalmec??nico</option>

    <option value="Distrito Capital	Centro de Materiales y Ensayos">Distrito Capital	Centro de Materiales y Ensayos</option>

    <option value="Distrito Capital	Centro de Dise??o y Metrolog??a">Distrito Capital	Centro de Dise??o y Metrolog??a</option>

    <option value="Distrito Capital	Centro para la Industria de la Comunicaci??n Grafica">Distrito Capital	Centro para la Industria de la Comunicaci??n Grafica</option>

    <option value="Distrito Capital	Centro de Gesti??n de Mercados, Log??stica y Tecnolog??as de la Informaci??n">Distrito Capital	Centro de Gesti??n de Mercados, Log??stica y Tecnolog??as de la Informaci??n</option>

    <option value="Distrito Capital	Centro de Formaci??n de Talento Humano en Salud">Distrito Capital	Centro de Formaci??n de Talento Humano en Salud</option>

    <option value="Distrito Capital	Centro de Gesti??n Administrativa">Distrito Capital	Centro de Gesti??n Administrativa</option>

    <option value="Distrito Capital	Centro de Servicios Financieros">Distrito Capital	Centro de Servicios Financieros</option>

    <option value="Distrito Capital	Centro Nacional de Hoteleria, Turismo y Alimentos">Distrito Capital	Centro Nacional de Hoteleria, Turismo y Alimentos</option>

    <option value="Distrito Capital	Centro de Formaci??n en Actividad F??sica y cultura">Distrito Capital	Centro de Formaci??n en Actividad F??sica y cultura</option>

    <option value="Guain??a	Despacho Direcci??n">Guain??a	Despacho Direcci??n</option>

    <option value="Guain??a	Centro Ambiental y Ecotur??stico del Nororiente Amaz??nico">Guain??a	Centro Ambiental y Ecotur??stico del Nororiente Amaz??nico</option>

    <option value="Guajira	Despacho Direcci??n">Guajira	Despacho Direcci??n</option>

    <option value="Guajira	Centro Industrial y de Energ??as Alternativas">Guajira	Centro Industrial y de Energ??as Alternativas</option>

    <option value="Guajira	Centro Agroempresarial y Acu??cola">Guajira	Centro Agroempresarial y Acu??cola</option>

    <option value="Guaviare	Despacho Direcci??n">Guaviare	Despacho Direcci??n</option>

    <option value="Guaviare	Centro de Desarrollo Agroindustrial, Tur??stico y Tecnol??gico del Guaviare">Guaviare	Centro de Desarrollo Agroindustrial, Tur??stico y Tecnol??gico del Guaviare</option>

    <option value="Huila	Despacho Direcci??n">Huila	Despacho Direcci??n</option>

    <option value="Huila	Centro de Formaci??n Agroindustrial">Huila	Centro de Formaci??n Agroindustrial</option>

    <option value="Huila	Centro Agroempresarial y Desarrollo Pecuario del Huila<">Huila	Centro Agroempresarial y Desarrollo Pecuario del Huila</option>

    <option value="Huila	Centro de Desarrollo Agroempresarial y Tur??stico del Huila">Huila	Centro de Desarrollo Agroempresarial y Tur??stico del Huila</option>

    <option value="Huila	Centro de la Industria, la Empresa y los Servicios">Huila	Centro de la Industria, la Empresa y los Servicios</option>

    <option value="Huila	Centro de Gesti??n y Desarrollo Sostenible Surcolombiano">Huila	Centro de Gesti??n y Desarrollo Sostenible Surcolombiano</option>

    <option value="Magdalena	Despacho Direcci??n">Magdalena	Despacho Direcci??n</option>

    <option value="Magdalena	Centro Acu??cola y Agroindustrial de Gaira">Magdalena	Centro Acu??cola y Agroindustrial de Gaira</option>

    <option value="Magdalena	Centro de Log??stica y Promoci??n Ecotur??stica del Magdalena">Magdalena	Centro de Log??stica y Promoci??n Ecotur??stica del Magdalena</option>

    <option value="Meta	Despacho Direcci??n">Meta	Despacho Direcci??n</option>

    <option value="Meta	Centro Agroindustrial del Meta">Meta	Centro Agroindustrial del Meta</option>

    <option value="Meta	Centro de Industria y Servicios del Meta">Meta	Centro de Industria y Servicios del Meta</option>

    <option value="Nari??o	Despacho Direcci??n">Nari??o	Despacho Direcci??n</option>

    <option value="Nari??o	Centro Sur Colombiano de Log??stica Internacional">Nari??o	Centro Sur Colombiano de Log??stica Internacional</option>

    <option value="Nari??o	Centro Agroindustrial y Pesquero de la Costa Pac??fica">Nari??o	Centro Agroindustrial y Pesquero de la Costa Pac??fica</option>

    <option value="Nari??o	Centro Internacional de Producci??n Limpia - Lope">Nari??o	Centro Internacional de Producci??n Limpia - Lope</option>

    <option value="Norte de Santander	Despacho Direcci??n">Norte de Santander	Despacho Direcci??n</option>

    <option value="Norte de Santander	Centro de Formaci??n para el Desarrollo Rural y Minero">Norte de Santander	Centro de Formaci??n para el Desarrollo Rural y Minero</option>

    <option value="Norte de Santander	Centro de la Industria, la Empresa y los Servicios">Norte de Santander	Centro de la Industria, la Empresa y los Servicios</option>

    <option value="Putumayo	Despacho Direcci??n">Putumayo	Despacho Direcci??n</option>

<option value="Putumayo	Centro Agroforestal y Acu??cola Arapaima">Putumayo	Centro Agroforestal y Acu??cola Arapaima</option>

    <option value="Quind??o	Despacho Direcci??n">Quind??o	Despacho Direcci??n</option>

    <option value="Quind??o	Centro Agroindustrial">Quind??o	Centro Agroindustrial</option>

    <option value="Quind??o	Centro para el Desarrollo Tecnol??gico de la Construcci??n y la Industria">Quind??o	Centro para el Desarrollo Tecnol??gico de la Construcci??n y la Industria</option>

    <option value="Quind??o	Centro de Comercio y Turismo">Quind??o	Centro de Comercio y Turismo</option>

    <option value="Risaralda	Despacho Direcci??n">Risaralda	Despacho Direcci??n</option>

    <option value="Risaralda	Centro Atenci??n Sector Agropecuario">Risaralda	Centro Atenci??n Sector Agropecuario</option>

    <option value="Risaralda	Centro de Dise??o e Innovaci??n Tecnol??gica Industrial">Risaralda	Centro de Dise??o e Innovaci??n Tecnol??gica Industrial</option>

    <option value="Risaralda	Centro de Comercio y Servicios">Risaralda	Centro de Comercio y Servicios</option>

    <option value="San Andr??s	Despacho Direcci??n">San Andr??s	Despacho Direcci??n</option>

    <option value="San Andr??s	Centro de Formaci??n Tur??stica, Gente de Mar y de Servicios">San Andr??s	Centro de Formaci??n Tur??stica, Gente de Mar y de Servicios</option>

    <option value="Santander	Despacho Direcci??n">Santander	Despacho Direcci??n</option>

    <option value="Santander	Centro Atenci??n Sector Agropecuario">Santander	Centro Atenci??n Sector Agropecuario</option>

    <option value="Santander	Centro Industrial de Mantenimiento Integral">Santander	Centro Industrial de Mantenimiento Integral</option>

    <option value="Santander	Centro Industrial del Dise??o y la Manufactura">Santander	Centro Industrial del Dise??o y la Manufactura</option>

    <option value="Santander	Centro de Servicios Empresariales y Tur??sticos">Santander	Centro de Servicios Empresariales y Tur??sticos</option>

    <option value="Santander	Centro Industrial y del Desarrollo Tecnol??gico">Santander	Centro Industrial y del Desarrollo Tecnol??gico</option>

    <option value="Santander	Centro Agrotur??stico">Santander	Centro Agrotur??stico</option>

    <option value="Santander	Centro Agroempresarial y Tur??stico de los Andes">Santander	Centro Agroempresarial y Tur??stico de los Andes</option>

    <option value="Santander	Centro de Gesti??n Agroempresarial del Oriente">Santander	Centro de Gesti??n Agroempresarial del Oriente</option>

    <option value="Sucre	Despacho Direcci??n">Sucre	Despacho Direcci??n</option>

    <option value="Sucre	Centro de la Innovaci??n, la Tecnolog??a y los Servicios">Sucre	Centro de la Innovaci??n, la Tecnolog??a y los Servicios</option>

    <option value="Tolima	Despacho Direcci??n">Tolima	Despacho Direcci??n</option>

    <option value="Tolima	Centro Agropecuario la Granja">Tolima	Centro Agropecuario la Granja</option>

    <option value="Tolima	Centro de Industria y Construcci??n">Tolima	Centro de Industria y Construcci??n</option>

    <option value="Tolima	Centro de Comercio y Servicios">Tolima	Centro de Comercio y Servicios</option>

    <option value="Valle	Despacho Direcci??n">Valle	Despacho Direcci??n</option>

    <option value="Valle	Centro Agropecuario de Buga">Valle	Centro Agropecuario de Buga</option>

    <option value="Valle	Centro Latinoamericano de Especies Menores">Valle	Centro Latinoamericano de Especies Menores</option>

    <option value="Valle	Centro N??utico Pesquero de Buenaventura">Valle	Centro N??utico Pesquero de Buenaventura</option>

    <option value="Valle	Centro de Electricidad y Automatizaci??n Industrial -CEAI">Valle	Centro de Electricidad y Automatizaci??n Industrial -CEAI</option>

    <option value="Valle	Centro de la Construcci??n">Valle	Centro de la Construcci??n</option>

    <option value="Valle	Centro de Dise??o Tecnol??gico Industrial">Valle	Centro de Dise??o Tecnol??gico Industrial</option>

    <option value="Valle	Centro Nacional de Asistencia T??cnica a la Industria -ASTIN">Valle	Centro Nacional de Asistencia T??cnica a la Industria -ASTIN</option>

    <option value="Valle	Centro de Gesti??n Tecnol??gica de Servicios">Valle	Centro de Gesti??n Tecnol??gica de Servicios</option>

    <option value="Valle	Centro de Tecnolog??as Agroindustriales">Valle	Centro de Tecnolog??as Agroindustriales</option>

    <option value="Valle	Centro de Biotecnolog??a Industrial">Valle	Centro de Biotecnolog??a Industrial</option>

    <option value="Vaup??s	Despacho Direcci??n">Vaup??s	Despacho Direcci??n</option>

    <option value="Vaup??s	Centro Agropecuario y de Servicios Ambientales Jiri-jirimo">Vaup??s	Centro Agropecuario y de Servicios Ambientales "Jiri-jirimo"</option>

    <option value="Vichada	Despacho Direcci??n">Vichada	Despacho Direcci??n</option>

    <option value="Vichada	Centro de Producci??n y Transformaci??n Agroindustrial de la Orinoquia">Vichada	Centro de Producci??n y Transformaci??n Agroindustrial de la Orinoquia</option>

    

    </select>
    </div>
    </div> 

    <div class="form-row">
    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Cargo</label>
    <select  class="campo-user" id="documento" name="cargo" aria-describedby="emailHelp">

    <option value="Contratista">Contratista</option>

     <option value="Funcionario">Funcionario</option>


    </select>
    </div>
    </div>



    <div class=".col-sm-6 .col-md-5 .col-lg-6">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Rol</label>
    <select  class="campo-user" id="documento" name="rol" aria-describedby="emailHelp">

    <option value="Especialista">Especialista</option>

    <option value="Coordinador">Coordinador</option>

    <option value="Dinamisador">Dinamizador</option>

    <option value="Empresario">Empresario</option>

    </select>
    </div>




    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Sector tecnologico</label>
    <select  class="campo-user" id="documento" name="sectort" aria-describedby="emailHelp">

    <option value="microelectr??nica">Microelectr??nica</option>

    <option value="Inform??tica">Inform??tica</option>

    <option value="Rob??tica">Rob??tica</option>

    <option value="Aeroespacial">Aeroespacial</option>

    <option value="telecomunicaciones">Telecomunicaciones</option>

    <option value="biotecnolog??a">Biotecnolog??a</option>

    </select>

    </div>
    </div>

    </div>

    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Estado</label>
    <select  class="campo-user" id="documento" name="estado" aria-describedby="emailHelp">

    <option value="Solicitada">Solicitada</option>

    <option value="Tr??mite Upi">Tr??mite Upi</option>

    <option value="Radicada">Radicada</option>

    <option value="Consedida">Consedida</option>

    <option value="Negada">Negada</option>
<br>
    </select>
    
    
<br>
<br>
 
    <button onclick="alertar('Aceptar Terminos y condiciones');" class="btn btn-primary" name="registrar" href="Vista/Transaccional/Dashboard.php" disabled>Guardar</button>
    <button onclick="alertar('Aceptar Terminos y condiciones');" class="btn boton-ingreso" name="registrar" href="Vista/Transaccional/Dashboard.php">Registrar</button>
    </div>
    </div>
    
    

</div>
</div>
</div>
</div>
</div>
</body>



</html>