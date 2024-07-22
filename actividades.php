<?php include_once 'campus/models/conexion.php'; ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> I.E ALMIRANTE MIGUEL GRAU </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!--::::LINK ICONOS::::::-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

    <link rel="stylesheet" href="public/jquery-ui/jquery-ui.min.css">
    <script src="public/plugins/jquery/dist/jquery.min.js"></script>
    <script src="public/jquery-ui/jquery-ui.min.js"></script>
  </head>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg bg-white">
      <div class="container"> 
        <a class="navbar-brand" href="index.html"></a>
         <img  class="logotipo" src="img/INSIGNIA.2022.png" width="9%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inicio.html">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quienessomos.html">QUIENES SOMOS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="servicios.html">SERVICIOS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="actividades.php">ACTIVIDADES</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contacto.html">CONTACTO</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="campus/login.php">CAMPUS</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div> 
    </div>
    </nav>
   
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="img/cpt-actividades/portada-1acti.jpg" width="100%" height="860" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3><marquee><i> I. E. Nº787 Almirante MIguel Grau</i></marquee></h3>
            <p> </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/cpt-actividades/portada-2acti.jpg" width="100%0" height="860" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3><marquee><i> Dia Central 07 de Octubre</i></marquee></h3>
            <p> </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/cpt-actividades/portada-1acti.jpg" width="100%" height="860" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3><marquee><i>1967 - 2022</i></marquee></h3>
            <p> </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <br>



  <div style="background: #FEFCFD;">
    <div class="container">
      <br><br>
      <div class="wow bounceInDown">
  

        <center>
          <img  class="img/cpt-logo/Logo.jpg"  src="img/INSIGNIA.2022.png" width="180" height="180">
        </center>
        <p class="card-text text-justify">
          El colegio 787 almirante miguel grau es Mixto y Escolarizado que cuenta con los niveles de educación: Primaria - Secundaria a cargo de aliaga chero carlos alberto en la dirección de la institución educativa velando por el correcto desempeño y formación de los alumnos.
        </p>
        <marquee><b><i><p>“La educación no es preparación para la vida; la educación es la vida en sí misma”</i></b> ...</p></marquee>
    </div><br></div></div>

    <div style="background: #F7F7F7;">
      <div class="container"><br><br><br>
        <div class="card text-center">
          <div class="card-header " style="background: #2F2FFF;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item ">
                  <a class="nav-link active btn-dark" href="#">Principal</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">videos</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">informacion</a>
              </li>
            </ul>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col-md-6">
                  <br>
                  <h5 style="color: #000;text-align: center;" class="font-roboto font-weight-bold">Actividades educativas propias del centro y extraescolares</h5><br>
                  <p style="text-align:justify;">Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una. Por otro, las actividades extraescolares (escuelas deportivas, escuelas culturales, escuela de música, etc.) se ofertan a nuestras familias y se desarrollan ensu mayoría fuera del horario lectivo</p>
                </div>
                
                <div class="col-md-6 embed-responsive embed-responsive-16by9">

                  <iframe width="560" height="315" src="https://www.youtube.com/embed/tE58-dZruvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 
              </div>

              </div>
          </div>
        <br><br> 
      </div>
    </div>
    </div>
    
    <div class="" style="background: #F9F9F9;">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container-card">
            <div class="card">
              <div class="wow zoomIn m-4"data-wow-duration="2s" style="display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                 

                  <iframe width="560" height="315" src="https://www.youtube.com/embed/k2s418BTh-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                    Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 col-sm-6 container-card zoom" > 
            <div class="card card-flota">
              <div class="wow zoomIn m-4" data-wow-duration="2s" style="overflow: hidden; display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                  
        <iframe width="560" height="315" src="https://www.youtube.com/embed/koCKOl0s8vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                   Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>

          </div>
      </div>
      <br><br>
    </div>





    <div class="" style="background: #F9F9F9;">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container-card">
            <div class="card">
              <div class="wow zoomIn m-4"data-wow-duration="2s" style="display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                 

                 <iframe width="560" height="315" src="https://www.youtube.com/embed/HW1n9NDGmrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                    Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 col-sm-6 container-card zoom" > 
            <div class="card card-flota">
              <div class="wow zoomIn m-4" data-wow-duration="2s" style="overflow: hidden; display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                  
   <iframe width="560" height="315" src="https://www.youtube.com/embed/r-wvg_8Lgmc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                   Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>

          </div>
      </div>
      <br><br>
    </div>






        <div class="" style="background: #F9F9F9;">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container-card">
            <div class="card">
              <div class="wow zoomIn m-4"data-wow-duration="2s" style="display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                 

                 <iframe width="560" height="315" src="https://www.youtube.com/embed/jrrytVS2qyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                    Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 col-sm-6 container-card zoom" > 
            <div class="card card-flota">
              <div class="wow zoomIn m-4" data-wow-duration="2s" style="overflow: hidden; display: flex; justify-content: center; align-items: center;">
                <div class="embed-responsive embed-responsive-16by9">
                  
<iframe width="560" height="315" src="https://www.youtube.com/embed/j3XP8sRU-wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                
              </div>
              <div class="card-body pt-1">
                  <h5 class="card-title text-danger text-left font-quicksand font-weight-bold">Actividades Educativas</h5>
                  <p class="card-text quicksand-font texto text-justify wow bounceInLeft" style="text-align:justify;">
                   Todas las actividades educativas que se llevan a cabo en el colegio tienen como objetivo el desarrollo y el crecimiento de la persona en todas sus facetas. Por un lado, están actividades educativas propias del centro, que forman parte de nuestra jornada escolar y las desarrollamos a nivel de colegio, de etapa o de clase, en función de cada una.
                  </p>
                </div>
            </div>
          </div>

          </div>
      </div>
      <br><br>
    </div>
    





    <div class="container">
          <div class="card">
          <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="disabled-sorting text-center">id</th>
                    <th class="disabled-sorting text-center">Codigo</th>
                    <th class="disabled-sorting text-center">Cargo</th>
                    <th class="disabled-sorting text-center">Cantidad</th>
                    <th class="disabled-sorting text-center">F. Public. Convoc.</th>
                    <th class="disabled-sorting text-center">F. Recepción</th>
                    <th class="disabled-sorting text-center">F. Evaluación</th>
                    <th class="disabled-sorting text-center">F. Public. Result.</th>
                    <th class="disabled-sorting text-center">Detalle</th>
                    <th class="disabled-sorting text-center">Ganador</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM convocatoria WHERE estado = 1";

                        $run_query = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_array($run_query)){

                            $id = $row["id"];
                            $codigo = $row["codigo"];
                            $cargo = $row["cargo"];
                            $cantidad = $row["cantidad"];
                            $fecha_publi_convoca = $row["fecha_publi_convoca"];
                            $fecha_recepcion = $row["fecha_recepcion"];
                            $fecha_evaluacion = $row["fecha_evaluacion"];
                            $fecha_publi_result = $row["fecha_publi_result"];
                            $detalle = $row["detalle"];
                            $ganador = $row["ganador"];

                            echo '
                            <tr>
                                <td class="disabled-sorting text-center">'.$id.'</td>
                                <td class="disabled-sorting text-center">'.$codigo.'</td>
                                <td class="disabled-sorting text-center">'.$cargo.'</td>
                                <td class="disabled-sorting text-center">'.$cantidad.'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_publi_convoca)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_recepcion)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_evaluacion)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_publi_result)).'</td>
                                <td class="disabled-sorting text-center">'.$detalle.'</td>
                                <td class="disabled-sorting text-center">'.$ganador.'</td>
                            </tr>
                            ';
                        }
                    ?>
               </tbody>  
             </table>
           </div>
          </div>
        </div>
    </body>

    <br><br>
      <!--::::Pie de Pagina::::::-->
          <footer class="pie-pagina">
              <div class="grupo-1">
                  <div class="box">
                     <h2>AMIRANTE MIGUEL GRAU 787</h2>
    
                     <img  class="img/cpt-logo/Logo.jpg"  src="img/INSIGNIA.2022.png" width="100" height="100">
                      <p style="text-align:justify;">La Institución educativa Colegio 787 Almirante Miguel Grau, es más que una Institución Educativa, es un contexto familiar, un grupo de profesionales competitivos que velan a din de que los alumnos se integren adecuadamente, tanto en su vida personal como social y escolar.</p>
                       <p>Esta institución proporciona una educación de la más alta calidad en un estado de educación.</div>
                  <div class="box">
                      <h2>OBJETIVOS</h2>
                      <p>• Obtener una aprendizaje del conocimiento conforme con la armonía de ejercitamiento.</p>
                      <p>• Desplegar talento de análisis y inteligencia crítico.</p>
                      <p>• Motivar la curiosidad en enseñanza.</p>
                      <h2>ACTIVIDADES</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                  </div>
                  <div class="box"> 
                     <h2>CONTACTO</h2>
                      <p>• NIVEL/MODALIDAD: PRIMARIA - SECUNDARIA</p>
                      <p>• DISTRITO: CHACLACAYO - LIMA</p>
                      <p>• DIRECCION: CARRETERA CENTRAL KM19 1/2</p>
                      <p>• EMAIL: </p>
                      <p>• TELEFONO: 01 3595178 </p>
                      <p>• UBIGEO: 150107 </p>
                      
                      <h2>SIGUENOS</h2>
                      <div class="red-social">
                          <a href="https://www.facebook.com/profile.php?id=100054802268601" class="fa fa-facebook"><ion-icon name="logo-facebook"></ion-icon> </a>
                          <a href="#" class="fa fa-instagram"><ion-icon name="logo-whatsapp"></ion-icon></a>
                          <a href="#" class="fa fa-twitter"><ion-icon name="logo-tiktok"></ion-icon></a>
                          <a href="https://www.youtube.com/watch?v=koCKOl0s8vw&t=146s&ab_channel=AlbertoLopezFlores" class="fa fa-youtube"><ion-icon name="logo-youtube"></ion-icon>
                      </div></a>
                  </div>
              </div>
              <div class="grupo-2">
                  <small>&copy; 2023 <b>GRECIA ARIAS ORBEZO</b> - Todos los Derechos Reservados.</small>
              </div
    
    
    
    
    
    
    
    
    
            <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "2207520000", // Facebook page ID
                whatsapp: "927511640", // WhatsApp number
                call_to_action: "Envíanos un mensaje", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,facebook", // Order of buttons
            };
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

            
        </footer>

      <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="public/plugins/jszip/jszip.min.js"></script>
      <script src="public/plugins/pdfmake/pdfmake.min.js"></script>
      <script src="public/plugins/pdfmake/vfs_fonts.js"></script>
      <script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

      <script>
        $(function () {
          $("#datatable").DataTable({
            "responsive": true,
            dom:
            "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>"
            , 
            "lengthChange": true, 
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", "colvis"],
            "order": [[ 0, 'desc' ]],
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Buscar registros",
              "decimal": "",
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ ",
              "infoEmpty": "Mostrando 0 to 0 of 0",
              "infoFiltered": "(Filtrado de _MAX_ R.)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Entradas",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscar:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
              }
            }
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

    


























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>