<?php include "_header.php"; ?>

	<table class="data" border="1" style="border-collapse: collapse; margin-bottom: 5px;">
		<tr>
			<th>No.</th>
			<th>Tahun Akademik</th>
			<th>Jumlah PMB</th>
			<th>X</th>
			<th>Y</th>
			<th>XX</th>
			<th>XY</th>
		</tr>
		<?php
		$sql = mysqli_query($con, "SELECT * FROM pmb_201651085") or die (mysqli_error($con));
		if (mysqli_num_rows($sql) > 0) {
			$x = 0;
			$jumlah_x = 0;
			$jumlah_y = 0;
			$jumlah_xx = 0;
			$jumlah_xy = 0;
			while ($data = mysqli_fetch_array($sql)) {
				$jumlah_x += $x;
				$jumlah_y += $data['jumlah_pmb'];
				$jumlah_xx += ($x * $x);
				$jumlah_xy += ($x * $data['jumlah_pmb']); 
				?>
				<tr>
					<td><?=$x+1;?>.</td>
					<td><?=$data['tahun_akademik'];?></td>
					<td align="center"><?=$data['jumlah_pmb'];?></td>
					<td align="center"><?=$x;?></td>
					<td align="center"><?=$data['jumlah_pmb'];?></td>
					<td align="center"><?=$x * $x;?></td>
					<td align="center"><?=$x * $data['jumlah_pmb'];?></td>
				</tr>
				<?php
				$x++;
			}
			?>
			<tr>
				<td colspan="2">Jumlah</td>
				<td></td>
				<td><?=$jumlah_x;?></td>
				<td><?=$jumlah_y;?></td>
				<td><?=$jumlah_xx;?></td>
				<td><?=$jumlah_xy;?></td>
			</tr>
			<tr>
				<td colspan="2">Rata2</td>
				<td></td>
				<td>
					<?php
					$rata2_x = $jumlah_x / $x;
					echo $rata2_x;
					?>	
				</td>
				<td>
					<?php
					$rata2_y = $jumlah_y / $x;
					echo $rata2_y;
					?>	
				</td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2">B1</td>
				<td colspan="5">
					<?php
					$b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
					echo $b1;
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">B0</td>
				<td colspan="5">
					<?php
					$b0 = $rata2_y - $b1 * $rata2_x;
					echo $b0;
					?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>

	<div>
		Rumus Regresi Linear :<br>
		<?php
		$y = $b0." + ".$b1." x";
		echo $y;
		?>
	</div>

	<?php
	if(isset($_POST['prediksi'])) {
		$tahun = $_POST['tahun'];
		$thn = ($x - 1) + $tahun;
		$prediksi = $b0 + ($b1 * $thn);
		?>
		<div>
			Prediksi PMB untuk <?=$tahun;?> tahun berikutnya adalah <?=$prediksi;?>
		</div>
	<?php
	}
	?>

	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>

<?php include "_footer.php"; ?>