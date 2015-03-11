<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
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
                    <div class="col-lg-6">
                        <h2>Publicaciones</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Autores</th>
                                        <th>Apellidos </th>
                                        <th>Publicaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($autores as $autor): ?>
                                    <tr>
                                    
                                        <td><?php echo $autor['Autor']['id'] ?></td>
                                        <td><?php echo $autor['Autor']['nombre'] ?></td>
                                        <td><?php echo $autor['Autor']['apellidos'] ?></td>
                                        <td>
                                            <?php foreach ($autor['Publicacion'] as $publicacion):
                                            echo $publicacion['id'].',';
                                            endforeach; ?>
                                        </td>
                                    </tr>

    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <h2>Bootstrap Docs</h2>
                        <p>For complete documentation, please visit <a target="_blank" href="http://getbootstrap.com/css/#tables">Bootstrap's Tables Documentation</a>.</p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>