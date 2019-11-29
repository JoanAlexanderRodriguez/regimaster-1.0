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
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Listado de Estudiantes</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">MATRICULA</th>
                                <th scope="col">NOMBRE COMPLETO</th>
                                <th scope="col">CARRERA</th>
                                <th scope="col">TANDA</th>
                                <th scope="col">RECINTO/EXTECION</th>
                                <th scope="col" style="width:2em;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list as $val) { ?>
                            <tr scope="row" class="font-weight-bold">
                                <td><?php echo $val->matricula; ?></td>
                                <td><?php echo $val->nom_est; ?> <?php echo $val->ape_est; ?></td>
                                <td class="text-wrap text-break"><?php echo $val->carrera; ?></td>
                                <td><?php echo $val->tanda; ?></td>
                                <td><?php echo $val->recinto; ?></td>
                                <td class="text-right">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">

                </div>
            </div>
        </div>
    </div>

</div>