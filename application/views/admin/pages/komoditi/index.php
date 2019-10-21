<div class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          <h5 class="title">Pasar</h5>
        </div>
        <div class="card-body">
          <?php echo form_open('admin/Komoditi/save'); ?>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Komoditi</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Pasar">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Gambar</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="title">Pasar</h5>
        </div>
        <div class="card-body">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th class="text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon">
                    <i class="tim-icons icon-single-02"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
                    <i class="tim-icons icon-settings"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
 $(document).ready(function() {
  $('#example').DataTable();
} );
</script>