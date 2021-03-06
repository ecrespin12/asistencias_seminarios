
        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">
          
                <!-- Barra lateral y right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-4 align-self-center">
                        <h4 class="text-themecolor">LISTA DE SEMINARIOS</h4>
                    </div>
        
                </div>
                <!-- Fin Barra lateral y right sidebar toggle -->

                <!-- Inicio Page Content -->
                <div class="row">
                    <div class="col-12">
  
                        <div class="card">

                            <div class="card-body">
                            <div class="col-md-12 ">
                                <div class="">
                                    <a href="<?php echo base_url();?>admin/CargaExcel" class="btn btn-success"><i class="fas fa-upload"></i> Subir Excel</a>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_seminario_new" ><i class="fas fa-plus"></i> Agregar Seminario</button>
                                </div>
                        
                            </div>
                           
      
                                <div id = "tabla_seminario" class="table-responsive m-t-40">
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
                                                <th>Acciones</th>
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
                                                        <td>	
                                                            <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit-seminario" ><span class="fas fa-pencil-alt"></span></button> 	
                                                            <a href="<?php echo base_url()?>admin/Seminario/deleteSeminario/<?php echo $seminario->seminarioID; ?>" class="btn btn-sm btn-danger alert-delete"> <span class="fas fa-trash-alt"></span> </a>
                                         	
                                                        </td>	
                                                    </tr>	
                                                <?php endforeach;?> 	
                                            <?php endif;?>     
                          
                                        </tbody>
                                    </table>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin PAge Content -->
 
            </div>
            <!-- Fin Container fluid  -->
        </div>
        <!-- Fin Page wrapper  -->


        <!-- modal content nuevo seminario -->
        <div id="modal_seminario_new" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <b><h4 class="modal-title">AGREGAR NUEVO SEMINARIO</h4></b>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>   
                    </div>
                    <div class="modal-body">
                        <form id="frm_seminario_new" method="post">
                            <div class="form-group">
                                <label class="control-label">Facultad:</label>
                                <input type="text" class="form-control" id="txtFacultad_new" name="txtFacultad_new" placeholder="Ingresar Facultad">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Escuela:</label>
                                <input type="text" class="form-control" id="txtEscuela_new" name="txtEscuela_new" placeholder="Ingresar Escuela">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Codigo Seminario:</label>
                                <input type="text" class="form-control" id="txtCodigo_new" name="txtCodigo_new" placeholder="Ingresar Codigo Seminario">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nombre Seminario:</label>
                                <input type="text" class="form-control" id="txtSeminario_new" name="txtSeminario_new" placeholder="Ingresar Nombre de Seminario">
                            </div>
                        
                    </div>
                    <div class="modal-footer">   
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                        <!-- <button type="submit" name="insert" id="insert" class="btn btn-primary">Guardar</button> -->
                        <input type="submit" name="guardar" id="guardar" value="Guardar" class="btn btn-primary" />

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal -->     

        
        <!-- modal content edit seminario -->
        <div id="modal-edit-seminario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <b><h4 class="modal-title">MODIFICAR SEMINARIO</h4></b>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>   
                    </div>
                    <div class="modal-body">
                        <form id="frm_edit_seminario" method="post">
                            <div class="form-group">
                                <label class="control-label">Facultad:</label>
                                <input type="text" class="form-control" id="txtFacultad_edit" name="txtFacultad" placeholder="Ingresar Facultad">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Escuela:</label>
                                <input type="text" class="form-control" id="txtEscuela_edit" name="txtEscuela" placeholder="Ingresar Escuela">
                            </div>

                    </div>
                            <div class="modal-footer">   
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal -->        

        <!-- <script src="<?php echo base_url();?>assets/ajaxList/seminarios/seminario.js"></script> -->
