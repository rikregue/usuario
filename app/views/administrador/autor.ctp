 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Autores
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <form id="frmAutor" action="save_autor" method="POST">
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="data[nombre]" class="form-contro">
                        <p class="help-block"> ricardo </p>
                        </div>
                        
                        <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="data[apellidos]" class="form-contro">
                        <p class="help-block"> perez prado </p>
                        </div>

                        <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="text" name="data[correo electronico]" class="form-contro">
                        <p class="help-block"> megustas@gmail.com </p>
                        </div>

                    <a onclick="Autor.guardar()" class="btn btn-default">Guardar</a>


                        </form>
                    </div>                        
             </div>

        </div>
</div>