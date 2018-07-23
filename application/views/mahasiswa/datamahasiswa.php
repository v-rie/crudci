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
                                <th>Jurusan</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach ($mahasiswa as $v_mahasiswa): ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$v_mahasiswa['namamhs']?></td>
                                <td><?=$v_mahasiswa['alamat']?></td>
                                <td><?=$v_mahasiswa['jurusan']?></td>
                                <td><?=$v_mahasiswa['semester']?></td>
                                <td><div class="tooltip-mhs">
                                    <a class="btn btn-primary" href="#" data-toggle="tooltip" data-placement="top" title="Ubah <?=$v_mahasiswa['namamhs']?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="#" data-toggle="tooltip" data-placement="top" title="Hapus <?=$v_mahasiswa['namamhs']?>"><i class="fa fa-trash"></i></a>
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