 <div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Pasar</h5>
        </div>
        <div class="card-body">
          <?php echo form_open('admin/Pasar/save'); ?>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Pasar</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Pasar">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
          </div>
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</div>