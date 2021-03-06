
        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">
          
                <!-- Barra lateral y right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">INICIO</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#modal-new-algo" ><i class="fas fa-plus"></i> Agregar Algo</button>
                        </div>
                    </div>
                </div>
                <!-- Fin Barra lateral y right sidebar toggle -->

                <!-- Inicio Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <!-- inicio todo el html aqui  -->
                                <h4 class="card-title">INFORMES SEMINARIO</h4>
                                <table id="tabla" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Seminario</th>
                                                <th>Ponente</th>
                                                <th>Fecha</th>
                                                <th>Horario</th>
                                                <th>Lugar</th>
                                                <th>Cupos</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(!empty($listadoSeminarios)): ?>	
                                                 <?php foreach($listadoSeminarios as $seminario): ?>	
                                                    <tr>	
                                                        <td><?php echo $seminario->codigoSeminario;?></td>	
                                                        <td><?php echo $seminario->nombre;?></td>	
                                                        <td><?php echo $seminario->nombrePonente;?></td>	
                                                        <td><?php echo $seminario->fecha;?></td>	
                                                        <td><?php echo $seminario->horario;?></td>	
                                                        <td><?php echo $seminario->aula;?></td>	
                                                        <td><?php echo $seminario->cupo;?></td>		
                                                    </tr>	
                                                <?php endforeach;?> 	
                                            <?php endif;?>     
                          
                                        </tbody>
                                    </table>
                                 

                            <!-- fin todo el html aqui  -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin PAge Content -->
 
            </div>
            <!-- Fin Container fluid  -->
        </div>
        <!-- Fin Page wrapper  -->