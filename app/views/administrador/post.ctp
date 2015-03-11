<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Publicación
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form id="frmPublicacion" action="http://localhost/cakephp-1.3.20/administrador/save_post" role="form">

                            <div class="form-group">
                                <label>Titulo</label>
                                <input name="data[titulos]" class="form-control">
                               
                            </div>

                            
                         

                            <div class="form-group">
                                <label>Contenido</label>
                                <textarea name="data[contenido]" class="form-control" rows="3"></textarea>
                            </div>


                            <div class="form-group">
                                <label >Autor</label>
                                <textarea name="data[autor]" class="form-control" rows="3"></textarea>
                            </div>



                            <div class="form-group">
                                <label >Imagen</label>
                                <textarea name="data[imagen]" class="form-control" rows="3"></textarea>
                            </div>



                            <div class="form-group">
                                <label >Categoría</label>
                                <textarea name="data[categoria]" class="form-control" rows="3"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Created</label>
                                <textarea name="data[created]" class="form-control" rows="3"></textarea>
                            </div>

                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>

                        </form>

                    </div>
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
