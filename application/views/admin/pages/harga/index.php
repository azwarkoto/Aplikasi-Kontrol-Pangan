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
                <label>Pasar</label>
                <select class="select2 form-control" style="width: 100%; height: 100%">
                  <option>Select</option>
                  <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Komoditi</label>
                <select class="select2 form-control" style="width: 100%; height: 100%">
                  <option>Select</option>
                  <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary animation-on-hover">Submit</button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="title">Harga</h5>
        </div>
        <div class="card-body">
          <table id="dt_pasar" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr class="text-center">
                <th style="width: 1%">No</th>
                <th>Harga</th>
                <th>Komoditi</th>
                <th>Harga</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1 ?>
              <?php foreach ($data as $value): ?>
                <tr>
                  <td class="text-center"><?php echo $i ?></td>
                  <td><?php echo $value->nama ?></td>
                  <td><?php echo $value->alamat ?></td>
                  <td><?php echo $value->lokasi ?></td>
                  
                  <td class="td-actions text-center">
                    <a href="#" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
                      <i class="tim-icons icon-pencil"></i>
                    </a>
                    <a href="<?php echo base_url('admin/pasar/delete/').$value->id ?>" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" onclick="sweet()">
                      <i class="tim-icons icon-simple-remove"></i>
                    </a>
                  </td>
                </tr>
                <?php $i++ ?>
              <?php endforeach ?>


            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
 $(document).ready(function() {
  $('#dt_pasar').DataTable();
  $('#select2').select2();
} );
 function sweet (){
   Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    }
  }) 
}

</script>