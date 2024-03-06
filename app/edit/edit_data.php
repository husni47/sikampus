<?php
// GET[id] ini yang berada pada param url yg sebelumnya dikirim dari datamahasiswa,get ini untuk mengambil nilai id 
// yang berada pada param url 
$id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$semester = $_GET['semester'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id ='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="update/update_data.php">
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama'];?>">
                            <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id'];?>" hidden>
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?php echo $view['nim'];?>">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Semester</label>
                            <select class="custom-select" aria-label="Default select example" name='semester'>
                                <option value="<?php echo $view['semester'];?>" selected><?php echo $view['semester'];?></option>
                                <option value="1">2</option>
                                <option value="2">4</option>
                                <option value="3">8</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>