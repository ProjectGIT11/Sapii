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

    <option value="Amazonas 	Despacho Dirección ">Amazonas 	Despacho Dirección</option>

    <option value="Amazonas	Centro para la Biodiversidad y el Turismo del Amazonas">Amazonas	Centro para la Biodiversidad y el Turismo del Amazonas</option>

    <option value="Antioquia	Despacho Dirección">Antioquia	Despacho Dirección</option>

    <option value="Antioquia	Centro de los Recursos Naturales Renovables -La Salada">Antioquia	Centro de los Recursos Naturales Renovables -La Salada</option>

    <option value="Antioquia	Centro del Diseño y Manufactura del Cuero">Antioquia	Centro del Diseño y Manufactura del Cuero</option>

    <option value="Antioquia	Centro de Formación en Diseño, Confección y Moda.">Antioquia	Centro de Formación en Diseño, Confección y Moda.</option>

    <option value="Antioquia	Centro para el Desarrollo del Hábitat y la Construcción">Antioquia	Centro para el Desarrollo del Hábitat y la Construcción</option>

    <option value="Antioquia	Centro de Tecnología de la Manufactura Avanzada.">Antioquia	Centro de Tecnología de la Manufactura Avanzada.</option>

    <option value="Antioquia	Centro Tecnológico del Mobiliario">Antioquia	Centro Tecnológico del Mobiliario</option>

    <option value="Antioquia	Centro Textil y de Gestión Industrial">Antioquia	Centro Textil y de Gestión Industrial</option>

    <option value="Antioquia	Centro de Comercio">Antioquia	Centro de Comercio</option>

    <option value="Antioquia	Centro de Servicios de Salud">Antioquia	Centro de Servicios de Salud</option>

    <option value="Antioquia	Centro de Servicios y Gestión Empresarial">Antioquia	Centro de Servicios y Gestión Empresarial</option>

    <option value="Antioquia	Complejo Tecnológico para la Gestión Agroempresarial">Antioquia	Complejo Tecnológico para la Gestión Agroempresarial</option>

    <option value="Antioquia Complejo Tecnológico Minero Agroempresarial">Antioquia Complejo Tecnológico Minero Agroempresarial</option>

    <option value="Antioquia Centro de la Innovación, la Agroindustria y la Aviación">Antioquia Centro de la Innovación, la Agroindustria y la Aviación</option>

    <option value="Antioquia Complejo Tecnológico Agroindustrial, Pecuario y Turístico">Antioquia Complejo Tecnológico Agroindustrial, Pecuario y Turístico</option>

    <option value="Antioquia Complejo Tecnológico, Turístico y Agroindustrial del Occidente Antioqueño">Antioquia Complejo Tecnológico, Turístico y Agroindustrial del Occidente Antioqueño</option>

    <option value="Antioquia Centro de Formación Minero Ambiental">Antioquia Centro de Formación Minero Ambiental</option>

    <option value="Arauca Despacho Dirección">Arauca Despacho Dirección</option>

    <option value="Arauca Centro de Gestión y Desarrollo Agroindustrial de Arauca">Arauca Centro de Gestión y Desarrollo Agroindustrial de Arauca</option>

    <option value="Atlántico	Despacho Dirección">Atlántico	Despacho Dirección</option>

    <option value="Atlántico	Centro para el Desarrollo Agroecologico y Agroindustrial">Atlántico	Centro para el Desarrollo Agroecologico y Agroindustrial</option>

    <option value="Atlántico	Centro Nacional Colombo Alemán">Atlántico	Centro Nacional Colombo Alemán</option>

    <option value="Atlántico	Centro Industrial y de Aviación">Atlántico	Centro Industrial y de Aviación</option>

    <option value="Atlántico	Centro de Comercio y Servicios">Atlántico	Centro de Comercio y Servicios</option>

    <option value="Bolívar	Despacho Dirección">Bolívar	Despacho Dirección</option>

    <option value="Bolívar	Centro Agroempresarial y Minero">Bolívar	Centro Agroempresarial y Minero</option>

    <option value="Bolívar	Centro Internacional Náutico, Fluvial y Portuario">Bolívar	Centro Internacional Náutico, Fluvial y Portuario</option>

    <option value="Bolívar	Centro para la Industria Petroquímica">Bolívar	Centro para la Industria Petroquímica</option>

    <option value="Bolívar	Centro de Comercio y Servicios">Bolívar	Centro de Comercio y Servicios</option>

    <option value="Boyacá	Despacho Dirección">Boyacá	Despacho Dirección</option>

    <option value="Boyacá	Centro de Desarrollo Agropecuario y Agroindustrial">Boyacá	Centro de Desarrollo Agropecuario y Agroindustrial</option>

    <option value="Boyacá	Centro Minero">Boyacá	Centro Minero</option>

    <option value="Boyacá	Centro de Gestión Administrativa y Fortalecimiento Empresarial">Boyacá	Centro de Gestión Administrativa y Fortalecimiento Empresarial</option>

    <option value="Boyacá	Centro Industrial de Mantenimiento y Manufactura">Boyacá	Centro Industrial de Mantenimiento y Manufactura</option>

    <option value="Caldas	Despacho Dirección">Caldas	Despacho Dirección</option>

    <option value="Caldas	Centro para la Formación Cafetera">Caldas	Centro para la Formación Cafetera</option>

    <option value="Caldas	Centro de Automatización Industrial">Caldas	Centro de Automatización Industrial</option>

    <option value="Caldas	Centro de Procesos Industriales y Construcción">Caldas	Centro de Procesos Industriales y Construcción</option>

    <option value="Caldas	Centro de Comercio y Servicios">Caldas	Centro de Comercio y Servicios</option>

    <option value="Caldas	Centro Pecuario y Agroempresarial">Caldas	Centro Pecuario y Agroempresarial</option>

    <option value="Caquetá	Despacho Dirección">Caquetá	Despacho Dirección</option>

    <option value="Caquetá	Centro Tecnológico de la Amazonia">Caquetá	Centro Tecnológico de la Amazonia</option>

    <option value="Casanare	Despacho Dirección">Casanare	Despacho Dirección</option>

    <option value="Casanare	Centro Agroindustrial y Fortalecimiento Empresarial de Casanare">Casanare	Centro Agroindustrial y Fortalecimiento Empresarial de Casanare</option>

    <option value="Cauca	Despacho Dirección">Cauca	Despacho Dirección</option>

    <option value="Cauca	Centro Agropecuario">Cauca	Centro Agropecuario</option>

    <option value="Cauca	Centro de Teleinformática y Producción Industrial">Cauca	Centro de Teleinformática y Producción Industrial</option>

    <option value="Cauca	Centro de Comercio y Servicios">Cauca	Centro de Comercio y Servicios</option>

    <option value="Cesar	Despacho Dirección">Cesar	Despacho Dirección</option>

    <option value="Cesar	Centro Biotecnológico del Caribe">Cesar	Centro Biotecnológico del Caribe</option>

    <option value="Cesar	Centro Agroempresarial">Cesar	Centro Agroempresarial</option>

    <option value="Cesar	Centro de Operación y Mantenimiento Minero">Cesar	Centro de Operación y Mantenimiento Minero</option>

    <option value="Choco	Despacho Dirección">Choco	Despacho Dirección</option>

    <option value="Choco	Centro de Recursos Naturales, Industria y Biodiversidad">Choco	Centro de Recursos Naturales, Industria y Biodiversidad</option>

    <option value="Cundinamarca	Despacho Dirección">Cundinamarca	Despacho Dirección</option>

    <option value="Cundinamarca	Centro Industrial y de Desarrollo Empresarial de Soacha">Cundinamarca	Centro Industrial y de Desarrollo Empresarial de Soacha</option>

    <option value="Cundinamarca	Centro de Desarrollo Agroindustrial y Empresarial">Cundinamarca	Centro de Desarrollo Agroindustrial y Empresarial</option>

    <option value="Cundinamarca	Centro Agroecológico y Empresarial">Cundinamarca	Centro Agroecológico y Empresarial</option>

    <option value="Cundinamarca	Centro de la Tecnología de Diseño y la Productividad Empresarial">Cundinamarca	Centro de la Tecnología de Diseño y la Productividad Empresarial</option>

    <option value="Cundinamarca	Centro de Biotecnología Agropecuaria">Cundinamarca	Centro de Biotecnología Agropecuaria</option>

    <option value="Cundinamarca	Centro de Desarrollo Agroempresarial">Cundinamarca	Centro de Desarrollo Agroempresarial</option>

    <option value="Córdoba	Despacho Dirección">Córdoba	Despacho Dirección</option>

    <option value="Córdoba	Centro Agropecuario y de Biotecnología el Porvenir">Córdoba	Centro Agropecuario y de Biotecnología el Porvenir</option>

    <option value="Córdoba	Centro de Comercio, Industria y Turismo de Córdoba">Córdoba	Centro de Comercio, Industria y Turismo de Córdoba</option>

    <option value="Dirección General	Despacho Dirección">Dirección General	Despacho Dirección</option>

    <option value="Dirección General	Oficina de Control Interno">Dirección General	Oficina de Control Interno</option>

    <option value="Dirección General	Oficina de Control Interno Disciplinario">Dirección General	Oficina de Control Interno Disciplinario</option>

    <option value="Dirección General	Oficina de Comunicaciones">Dirección General	Oficina de Comunicaciones</option>

    <option value="Dirección General	Oficina de Sistemas">Dirección General	Oficina de Sistemas</option>

    <option value="Dirección General	Dirección Jurídica">Dirección General	Dirección Jurídica</option>

    <option value="Dirección General	Secretaría General">Dirección General	Secretaría General</option>

    <option value="Dirección General	Dirección de Planeación y Direccionamiento Corporativo">Dirección General	Dirección de Planeación y Direccionamiento Corporativo</option>

    <option value="Dirección General	Dirección Administrativa y Financiera">Dirección General	Dirección Administrativa y Financiera</option>

    <option value="Dirección General	Dirección de Empleo y Trabajo">Dirección General	Dirección de Empleo y Trabajo</option>

    <option value="Dirección General	Dirección de Formación Profesional">Dirección General	Dirección de Formación Profesional</option>

    <option value="Dirección General	Dirección Sistema Nacional de Formación para el Trabajo">Dirección General	Dirección Sistema Nacional de Formación para el Trabajo</option>

    <option value="Dirección General	Dirección de Promoción y Relaciones Corporativas">Dirección General	Dirección de Promoción y Relaciones Corporativas</option>

    <option value="Distrito Capital	Despacho Dirección">Distrito Capital	Despacho Dirección</option>

    <option value="Distrito Capital	Centro de Tecnologías para la Construcción y la Madera">Distrito Capital	Centro de Tecnologías para la Construcción y la Madera</option>

    <option value="Distrito Capital	Centro de Electricidad, Electrónica y Telecomunicaciones">Distrito Capital	Centro de Electricidad, Electrónica y Telecomunicaciones</option>

    <option value="Distrito Capital	Centro de Gestión Industrial">Distrito Capital	Centro de Gestión Industrial</option>

    <option value="Distrito Capital	Centro de Manufactura en Textil y Cuero">Distrito Capital	Centro de Manufactura en Textil y Cuero</option>

    <option value="Distrito Capital	Centro de Tecnologías del Transporte">Distrito Capital	Centro de Tecnologías del Transporte</option>

    <option value="Distrito Capital	Centro Metalmecánico">Distrito Capital	Centro Metalmecánico</option>

    <option value="Distrito Capital	Centro de Materiales y Ensayos">Distrito Capital	Centro de Materiales y Ensayos</option>

    <option value="Distrito Capital	Centro de Diseño y Metrología">Distrito Capital	Centro de Diseño y Metrología</option>

    <option value="Distrito Capital	Centro para la Industria de la Comunicación Grafica">Distrito Capital	Centro para la Industria de la Comunicación Grafica</option>

    <option value="Distrito Capital	Centro de Gestión de Mercados, Logística y Tecnologías de la Información">Distrito Capital	Centro de Gestión de Mercados, Logística y Tecnologías de la Información</option>

    <option value="Distrito Capital	Centro de Formación de Talento Humano en Salud">Distrito Capital	Centro de Formación de Talento Humano en Salud</option>

    <option value="Distrito Capital	Centro de Gestión Administrativa">Distrito Capital	Centro de Gestión Administrativa</option>

    <option value="Distrito Capital	Centro de Servicios Financieros">Distrito Capital	Centro de Servicios Financieros</option>

    <option value="Distrito Capital	Centro Nacional de Hoteleria, Turismo y Alimentos">Distrito Capital	Centro Nacional de Hoteleria, Turismo y Alimentos</option>

    <option value="Distrito Capital	Centro de Formación en Actividad Física y cultura">Distrito Capital	Centro de Formación en Actividad Física y cultura</option>

    <option value="Guainía	Despacho Dirección">Guainía	Despacho Dirección</option>

    <option value="Guainía	Centro Ambiental y Ecoturístico del Nororiente Amazónico">Guainía	Centro Ambiental y Ecoturístico del Nororiente Amazónico</option>

    <option value="Guajira	Despacho Dirección">Guajira	Despacho Dirección</option>

    <option value="Guajira	Centro Industrial y de Energías Alternativas">Guajira	Centro Industrial y de Energías Alternativas</option>

    <option value="Guajira	Centro Agroempresarial y Acuícola">Guajira	Centro Agroempresarial y Acuícola</option>

    <option value="Guaviare	Despacho Dirección">Guaviare	Despacho Dirección</option>

    <option value="Guaviare	Centro de Desarrollo Agroindustrial, Turístico y Tecnológico del Guaviare">Guaviare	Centro de Desarrollo Agroindustrial, Turístico y Tecnológico del Guaviare</option>

    <option value="Huila	Despacho Dirección">Huila	Despacho Dirección</option>

    <option value="Huila	Centro de Formación Agroindustrial">Huila	Centro de Formación Agroindustrial</option>

    <option value="Huila	Centro Agroempresarial y Desarrollo Pecuario del Huila<">Huila	Centro Agroempresarial y Desarrollo Pecuario del Huila</option>

    <option value="Huila	Centro de Desarrollo Agroempresarial y Turístico del Huila">Huila	Centro de Desarrollo Agroempresarial y Turístico del Huila</option>

    <option value="Huila	Centro de la Industria, la Empresa y los Servicios">Huila	Centro de la Industria, la Empresa y los Servicios</option>

    <option value="Huila	Centro de Gestión y Desarrollo Sostenible Surcolombiano">Huila	Centro de Gestión y Desarrollo Sostenible Surcolombiano</option>

    <option value="Magdalena	Despacho Dirección">Magdalena	Despacho Dirección</option>

    <option value="Magdalena	Centro Acuícola y Agroindustrial de Gaira">Magdalena	Centro Acuícola y Agroindustrial de Gaira</option>

    <option value="Magdalena	Centro de Logística y Promoción Ecoturística del Magdalena">Magdalena	Centro de Logística y Promoción Ecoturística del Magdalena</option>

    <option value="Meta	Despacho Dirección">Meta	Despacho Dirección</option>

    <option value="Meta	Centro Agroindustrial del Meta">Meta	Centro Agroindustrial del Meta</option>

    <option value="Meta	Centro de Industria y Servicios del Meta">Meta	Centro de Industria y Servicios del Meta</option>

    <option value="Nariño	Despacho Dirección">Nariño	Despacho Dirección</option>

    <option value="Nariño	Centro Sur Colombiano de Logística Internacional">Nariño	Centro Sur Colombiano de Logística Internacional</option>

    <option value="Nariño	Centro Agroindustrial y Pesquero de la Costa Pacífica">Nariño	Centro Agroindustrial y Pesquero de la Costa Pacífica</option>

    <option value="Nariño	Centro Internacional de Producción Limpia - Lope">Nariño	Centro Internacional de Producción Limpia - Lope</option>

    <option value="Norte de Santander	Despacho Dirección">Norte de Santander	Despacho Dirección</option>

    <option value="Norte de Santander	Centro de Formación para el Desarrollo Rural y Minero">Norte de Santander	Centro de Formación para el Desarrollo Rural y Minero</option>

    <option value="Norte de Santander	Centro de la Industria, la Empresa y los Servicios">Norte de Santander	Centro de la Industria, la Empresa y los Servicios</option>

    <option value="Putumayo	Despacho Dirección">Putumayo	Despacho Dirección</option>

<option value="Putumayo	Centro Agroforestal y Acuícola Arapaima">Putumayo	Centro Agroforestal y Acuícola Arapaima</option>

    <option value="Quindío	Despacho Dirección">Quindío	Despacho Dirección</option>

    <option value="Quindío	Centro Agroindustrial">Quindío	Centro Agroindustrial</option>

    <option value="Quindío	Centro para el Desarrollo Tecnológico de la Construcción y la Industria">Quindío	Centro para el Desarrollo Tecnológico de la Construcción y la Industria</option>

    <option value="Quindío	Centro de Comercio y Turismo">Quindío	Centro de Comercio y Turismo</option>

    <option value="Risaralda	Despacho Dirección">Risaralda	Despacho Dirección</option>

    <option value="Risaralda	Centro Atención Sector Agropecuario">Risaralda	Centro Atención Sector Agropecuario</option>

    <option value="Risaralda	Centro de Diseño e Innovación Tecnológica Industrial">Risaralda	Centro de Diseño e Innovación Tecnológica Industrial</option>

    <option value="Risaralda	Centro de Comercio y Servicios">Risaralda	Centro de Comercio y Servicios</option>

    <option value="San Andrés	Despacho Dirección">San Andrés	Despacho Dirección</option>

    <option value="San Andrés	Centro de Formación Turística, Gente de Mar y de Servicios">San Andrés	Centro de Formación Turística, Gente de Mar y de Servicios</option>

    <option value="Santander	Despacho Dirección">Santander	Despacho Dirección</option>

    <option value="Santander	Centro Atención Sector Agropecuario">Santander	Centro Atención Sector Agropecuario</option>

    <option value="Santander	Centro Industrial de Mantenimiento Integral">Santander	Centro Industrial de Mantenimiento Integral</option>

    <option value="Santander	Centro Industrial del Diseño y la Manufactura">Santander	Centro Industrial del Diseño y la Manufactura</option>

    <option value="Santander	Centro de Servicios Empresariales y Turísticos">Santander	Centro de Servicios Empresariales y Turísticos</option>

    <option value="Santander	Centro Industrial y del Desarrollo Tecnológico">Santander	Centro Industrial y del Desarrollo Tecnológico</option>

    <option value="Santander	Centro Agroturístico">Santander	Centro Agroturístico</option>

    <option value="Santander	Centro Agroempresarial y Turístico de los Andes">Santander	Centro Agroempresarial y Turístico de los Andes</option>

    <option value="Santander	Centro de Gestión Agroempresarial del Oriente">Santander	Centro de Gestión Agroempresarial del Oriente</option>

    <option value="Sucre	Despacho Dirección">Sucre	Despacho Dirección</option>

    <option value="Sucre	Centro de la Innovación, la Tecnología y los Servicios">Sucre	Centro de la Innovación, la Tecnología y los Servicios</option>

    <option value="Tolima	Despacho Dirección">Tolima	Despacho Dirección</option>

    <option value="Tolima	Centro Agropecuario la Granja">Tolima	Centro Agropecuario la Granja</option>

    <option value="Tolima	Centro de Industria y Construcción">Tolima	Centro de Industria y Construcción</option>

    <option value="Tolima	Centro de Comercio y Servicios">Tolima	Centro de Comercio y Servicios</option>

    <option value="Valle	Despacho Dirección">Valle	Despacho Dirección</option>

    <option value="Valle	Centro Agropecuario de Buga">Valle	Centro Agropecuario de Buga</option>

    <option value="Valle	Centro Latinoamericano de Especies Menores">Valle	Centro Latinoamericano de Especies Menores</option>

    <option value="Valle	Centro Náutico Pesquero de Buenaventura">Valle	Centro Náutico Pesquero de Buenaventura</option>

    <option value="Valle	Centro de Electricidad y Automatización Industrial -CEAI">Valle	Centro de Electricidad y Automatización Industrial -CEAI</option>

    <option value="Valle	Centro de la Construcción">Valle	Centro de la Construcción</option>

    <option value="Valle	Centro de Diseño Tecnológico Industrial">Valle	Centro de Diseño Tecnológico Industrial</option>

    <option value="Valle	Centro Nacional de Asistencia Técnica a la Industria -ASTIN">Valle	Centro Nacional de Asistencia Técnica a la Industria -ASTIN</option>

    <option value="Valle	Centro de Gestión Tecnológica de Servicios">Valle	Centro de Gestión Tecnológica de Servicios</option>

    <option value="Valle	Centro de Tecnologías Agroindustriales">Valle	Centro de Tecnologías Agroindustriales</option>

    <option value="Valle	Centro de Biotecnología Industrial">Valle	Centro de Biotecnología Industrial</option>

    <option value="Vaupés	Despacho Dirección">Vaupés	Despacho Dirección</option>

    <option value="Vaupés	Centro Agropecuario y de Servicios Ambientales Jiri-jirimo">Vaupés	Centro Agropecuario y de Servicios Ambientales "Jiri-jirimo"</option>

    <option value="Vichada	Despacho Dirección">Vichada	Despacho Dirección</option>

    <option value="Vichada	Centro de Producción y Transformación Agroindustrial de la Orinoquia">Vichada	Centro de Producción y Transformación Agroindustrial de la Orinoquia</option>

    

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

    <option value="microelectrónica">Microelectrónica</option>

    <option value="Informática">Informática</option>

    <option value="Robótica">Robótica</option>

    <option value="Aeroespacial">Aeroespacial</option>

    <option value="telecomunicaciones">Telecomunicaciones</option>

    <option value="biotecnología">Biotecnología</option>

    </select>

    </div>
    </div>

    </div>

    <div class="mb-3 text-left">
    <label for="exampleInputEmail1" class="form-label font-weight-bold">Estado</label>
    <select  class="campo-user" id="documento" name="estado" aria-describedby="emailHelp">

    <option value="Solicitada">Solicitada</option>

    <option value="Trámite Upi">Trámite Upi</option>

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