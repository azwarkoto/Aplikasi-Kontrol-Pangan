<div class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					<h5 class="title">Komoditi</h5>
				</div>
				<div class="card-body">
					<?php echo form_open_multipart('admin/Komoditi/save'); ?>	
					<div class="row">
			            <input type="hidden" name="id" class="form-control">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Komoditi</label>
								<input type="text" name="nama" class="form-control" placeholder="Nama Pasar">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Gambar</label>
								<input type="file" id="input-file-now" class="dropify" name="berkas" />
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-fill btn-primary">Save</button>
						<button type="reset" class="btn btn-primary animation-on-hover">Cancel</button>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="title">Pasar</h5>
				</div>
				<div class="card-body">
					<table id="dt-komoditi" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th style="width: 1%">No</th>
								<th>Nama</th>
								<th>Gambar</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($data as $value): ?>
								<tr>
									<td class="text-center"><?php echo $i ?></td>
									<td><?php echo $value->nama ?></td>
									<td><?php echo $value->gambar ?></td>									
									<td class="td-actions text-center">
										<a href="#" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon" onclick="edit(<?php echo $value->id ?>)">
											<i class="tim-icons icon-pencil"></i>
										</a>
										<a href="<?php echo base_url('admin/komoditi/delete/').$value->id ?>" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
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
		$('#dt-komoditi').DataTable();
		$('.dropify').dropify();
	} );
	function edit(id){
		$.ajax({
			url: "<?php echo base_url("admin/komoditi/getById/") ?>" + id,
			type: "GET",
			dataType: "JSON",
			success:function(data){
				$('[name="nama"]').val(data.nama);
				$('[name="id"]').val(data.id);
			},
			error: function (jqXHR, textStatus, errorThrown){
				alert(textStatus);
			}
		})
	}
</script>