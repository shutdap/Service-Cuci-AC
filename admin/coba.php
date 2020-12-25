<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses_assign_petugas.php" method="POST">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <select name="jenis_ac" id="jenis_ac" class="form-control">
                        <option value="-">-- Pilih Petugas --</option>
                          <?php 
                            include "../koneksi.php"; 
                            $jenisAc = mysqli_query($con,"SELECT `username`,`frist_name`,`last_name` FROM `login` WHERE lvl = 1" );
                            while ($data = mysqli_fetch_array($jenisAc)) {
                            $uname = $data['username'];
                            $frist_name = $data['frist_name'];
                            $last_name = $data['last_name'];
                          ?>
                        <option value="<?php echo $uname; ?>"><?php echo $uname;?></option>
                          <?php }?>
                      </select>
                      </div>
                    </div>
                  </div> 
                  <h6 class="heading-small text-muted mb-4">Keterangan</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Keterangan</label>
                    <textarea rows="4" class="form-control" name="Keterangan" placeholder="A few words about you ..."></textarea>
                  </div>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">assing</button>
                  </div>
            </form>
</body>
</html>