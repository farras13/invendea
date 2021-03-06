<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<?php if ($this->session->flashdata('pesan') != null) : ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button><?= $this->session->flashdata('pesan'); ?>
				</div>
			<?php endif ?>
			<h2>Daftar Barang</h2><br>
			<?php foreach ($data_barang as $br) {
				if ($this->uri->segment(3) == null) { ?>
					<tr>
						<div class="col-lg-4 col-md-6 mb-4">
							<img class="card-img-top" style="width: 100px; height: 100px;" src="<?= base_url('assets/uploads/') . $br->foto ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $br->nama_barang ?></h5>
								<p class="card-text"><?php echo $br->status ?></p>
								<?php if($br->status != "Dipinjam"): ?>
									<a href="<?= base_url('Peminjaman/index/') . $br->id_barang ?>" class="btn btn-primary">Go somewhere</a>
								<?php endif ?>
							</div>
						</div>
					</tr>
				<?php } else { ?>
					<tr>
						<div class="col-lg-4 col-md-6 mb-4">
							<img class="card-img-top" style="width: 100px; height: 100px;" src="<?= base_url('assets/uploads/') . $br->foto ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $br->nama_barang ?></h5>
								<p class="card-text"><?php echo $br->status ?></p>
								<?php if($br->status != "Dipinjam"): ?>
									<a href="<?= base_url('Peminjaman/index/') . $br->id_barang ?>" class="btn btn-primary">Go somewhere</a>
								<?php endif ?>
							</div>
						</div>
					</tr>
			<?php }
			} ?>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
