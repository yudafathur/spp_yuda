<style>
	@media print {
		.no-print {
			display: none;
		}
	}
</style>
<div class="container py-4">
	<div class="row">
		<div class="col-md">
			<div class="card">
				<h4 class="text-center bg-info">SMK Negeri 1 Cijati</h4>
				<small class="text-center bg-light">Laporan Guru</small>
				<table class="table table-bordered bg-light">
					<tr>
						<th>No</th>
						<th>Guru</th>
					</tr>
					<?php $no = 1;
					foreach ($guru as $g) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $g['nama_guru']; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
				<div class="row">
					<div class="col-md-2">
						<a href="" onclick="window.print()" class="btn btn-danger btn-sm no-print"><i class="fas fa-print"></i> Cetak</a>
					</div>
					<div class="col-md-2">
					<a href="<?php echo base_url() ?>/admin/laporan" class="btn btn-info">Kembali</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 offset-md-9">
						<table>
							<tr>
								<td></td>
								<td>
									<p>Cianjur <?= date('d-m-Y'); ?><br>
										ADMIN</p>
									<br><br>
									<p>_______________________</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	window.print();
</script>