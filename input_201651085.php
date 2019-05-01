<?php include "_header.php"; ?>

	<form action="simpan_201651085.php" method="post">
		<fieldset style="width: 25%; margin-bottom: 5px;">
			<legend>Input Data PMB</legend>
			<table border="0">
				<tr>
					<td>Tahun Akademik</td>
					<td>:</td>
					<td>
						<select name="tahun" required>
							<option value=""></option>
							<?php
							$now = date('Y');
							for ($i = $now; $i >= 2000; $i--) {
								echo "<option value='".$i."/".($i+1)."'>".$i."/".($i+1)."</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah PMB</td>
					<td>:</td>
					<td>
						<input type="number" name="jumlah" style="width: 48.5%;" required>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="simpan" value="Simpan">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>

<?php include "_footer.php"; ?>