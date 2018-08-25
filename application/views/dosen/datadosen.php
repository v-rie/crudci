<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?=$title;?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?=$title;?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach ($dosen as $v_dosen): ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$v_dosen['namados']?></td>
                                <td><?=$v_dosen['alamat']?></td>
                                <td><div class="tooltip-dos">
                                    <a class="btn btn-primary" href="<?=base_url();?>dosen/ubahDos/<?=$v_dosen['id_dos']?>" data-toggle="tooltip" data-placement="top" title="Ubah <?=$v_dosen['namados']?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="<?=base_url();?>dosen/hapusDos/<?=$v_dosen['id_dos']?>"  data-toggle="tooltip" data-placement="top" title="Hapus <?=$v_dosen['namados']?>"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->