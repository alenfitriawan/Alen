<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <form action="simpan_catatan.php" method="post" 
        <div class="form-group">
            <label>Pilih Tanggal</label>
            <input name="tanggal"type="date"id="txtDate" min="<?php echo date('Y-m-d');?>" reuquired class="form-control" placeholder="Masukan Data"
        </div>
        <div class="form-group">
        <label>Pilih Jam</label>
        <input name="jam"type="time" requered class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
        <label>pilih lokasi</label>
        <input name="lokasi"type="text" requered class="form-control" required type="text" pattern="[a-z A-Z]*" placeholder="Masukan lokasi">
        </div>
        <div class="form-group">
        <label>Suhu Tubuh</label>
        <input name="suhu"type="text" requered class="form-control" placeholder="suhu tubuh">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
        <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN </button>
    </form>
    </div>
</div>