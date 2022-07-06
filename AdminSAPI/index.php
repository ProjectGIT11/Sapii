<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include_once './Elementos/Heasers.php'; ?>
    <body>
        <?php
        include_once './Elementos/MenuNav.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="">
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Ingreso</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Numero Documento">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="contra" placeholder="Contraseña">
                                </div>
                                <div class="text-center">
                                    <button type="button" onclick="Ingresar()" class="btn" style="background-color: #23820B;color: white;width: 60%; ">Ingresar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="alert alert-danger" id="Error" role="alert" style="display: none;">
                    <p id="textoError"></p>
                </div>
                <div class="alert alert-success" id="Errorsuccess" style="display: none;" role="alert">
                    <p id="textoErrorSuccess"></p>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function Ingresar() {

        var usuario = $('#usuario').val();
        var password = $('#contra').val();


        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/LoginServ/find/" + usuario + '/' + password
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    $('#Error').hide();
                    $('#Errorsuccess').show();
                    $('#textoErrorSuccess').text('El usuario Existe.');
                    var idUser=data['response'][0][0];
                    window.location ="Controller/Login.php?nombre="+data['response'][0][2]+'&idUser='+idUser;
                }else if(data['error']){
                    
                    $('#Error').show();
                    $('#textoError').text(data['error']);
                    
                }
            }
        }).fail(function (data) {
           // console.log(data);
        });
    }
</script>
