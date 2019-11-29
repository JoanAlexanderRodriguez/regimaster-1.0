<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <h2>Sistema de Registro de Estudiante</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-secondary shadow">

                <div class="card-body">
                    <?php echo form_open('insert',array('id'=>'form_save_incription')); ?>
                        <h6 class="heading-small text-muted mb-4">Informacion personal</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nombre">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control form-control-alternative" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="apellido">Apellido</label>
                                        <input type="text" id="apellido" name="apellido" class="form-control form-control-alternative" placeholder="Apellido">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="cedula">Cedula</label>
                                        <input type="text" id="cedula" name="cedula" class="form-control form-control-alternative" placeholder="Cedula">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sexo">Sexo</label>
                                        <select id="sexo" name="sexo" class="form-control form-control-alternative">
                                            <option value="" selected disabled>Sexo</option>
                                            <option value="F">Femenino</option>
                                            <option value="M">Masculino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nacimiento">Lugar de nacimiento</label>
                                        <select id="nacimiento" name="nacimiento" class="form-control form-control-alternative">
                                            <option value="" selected disabled>Lugar de nacimiento</option>
                                            <?php foreach ($provincia as $val) { ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->nombre; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Informacion academica</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="recinto">Recinto / Extencion</label>
                                        <select id="recinto" name="recinto" class="form-control form-control-alternative">
                                            <option value="" selected disabled>Recinto / Extencion</option>
                                            <?php foreach ($recinto as $val) { ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->nombre; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="carrera">Carrera</label>
                                        <select id="carrera" name="carrera" class="form-control form-control-alternative">
                                            <option value="" selected disabled>Carrera</option>
                                            <?php foreach ($carrera as $val) { ?>
                                                <option value="<?php echo $val->id; ?>"><?php echo $val->nombre; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tanda">Tanda</label>
                                        <select id="tanda" name="tanda" class="form-control form-control-alternative">
                                            <option value="" selected disabled>Tanda</option>
                                            <option value="Matutina">Matutina</option>
                                            <option value="Vespertina">Vespertina</option>
                                            <option value="Nocturna">Nocturna</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="my-5">
                            <button class="btn btn-primary" type="button" id="add_save">
                                Aceptar
                            </button>

                            <button class="btn btn-danger" type="button" id="can_delete">
                                Cancelar
                            </button>
                        </div>

                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>