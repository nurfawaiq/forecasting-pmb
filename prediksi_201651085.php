<?php include "_header.php"; ?>

	<div>
		<form action="tampil_201651085.php" method="post">
			Peramalan pmb untuk 
			<select name="tahun" required>
				<?php
				for ($i = 1; $i <= 10; $i++) {
					echo "<option value='$i'>$i</option>";
				}
				?>
			</select> 
			tahun akademik berikutnya <input type="submit" name="prediksi" value="Prediksi">
		</form>
	</div>
	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>

<?php include "_footer.php"; ?>