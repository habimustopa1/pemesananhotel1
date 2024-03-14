<?php
require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<div>
	<img src="gambar/alghif.jpg" width="100px" style="margin-left: -1110px; margin-top: -70px; margin-bottom: 20px;">
</div>

<div id="imgindex">
	<div id="imglog">

		<p><br>Selamat Datang *** Basellin house<br>

			<br>

	</div>

</div>

<div id="reservasi">
	<li>Reservasi</li>
	<form method="post" action="user/pemesanan" name="opsi">
		<table>
			<tr>
				<td>Check-In</td>
				<td>Check-Out</td>
				<td>Type</td>
				<td>Harga/Malam</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<input type="date" name="cekin">
				</td>
				<td>
					<input type="date" name="cekout">
				</td>
				<td>
					<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
						<option selected="selected" disabled="disabled">-Pilih-</option>
						<option value="Rp 410.000">Superior</option>
						<option value="Rp 450.000">Deluxe</option>
						<option value="Rp 700.000">Junior Suite</option>
						<option value="Rp 1.200.000">Executive</option>
					</select>
				</td>
				<td>
					<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
					<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
				</td>
				<td>
					<input type="submit" name="ok" value="Pesan" id="tombol">
				</td>
			</tr>
		</table>
	</form>
</div>

<div id="tentang">
	<h3>Tentang Kami</h3><br>
	<p>
		Hotel Basellin Garut adalah cabang dari *** yang terletak di pusat kota Garut, tepatnya di Jalan Ahmad Yani No. 3. Hotel ini merupakan hotel bintang tiga yang berlokasi strategis di pusat kota Garut. Lokasi yang sempurna dan akses mudah ke daerah wisata membuat tempat yang bagus untuk pengunjung bisnis dan liburan. Hotel ini memiliki total 58 kamar yang terdiri atas 7 Kamar Superior, 45 Kamar Deluxe, 4 Suite Junior, dan 2 Suite Eksekutif.
	</p><br>
	<p>
		Satoru Garut berjarak sekitar 12 km dari Stasiun kereta api. Simpang lima yang merupakan landmark kota Garut bisa ditempuh dengan berkendara kurang dari lima menit, sementara pusat perbelanjaan Lippo Plaza Garut dapat diakses dengan delapan menit berkendara dari penginapan.
	</p>
</div>



<div id="petalokasi">
	<h3>Peta Lokasi</h3><br>
	<!--<img src="gambar/horison1.png" width="70%">-->
	<iframe src="gambar/peta.png" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div id="cekinout">
	<h3>INFORMASI</h3><br>
	<h4>Check-In</h4>
	<p>Jam Check-In Standar : 12.00 WIB</p>
	<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
	<h4>Check-Out</h4>
	<p>Jam Check-Out Standar : 12.00 WIB</p>
	<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
</div>
</center>


<?php
require_once "view/footer.php"
?>