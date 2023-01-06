<html lang="id">
<head>
	<title>Workshop 1 - authentication user</title>
</head>
<body>
<h2>Form Regsiter Pengurus</h2>

<form action="do_registerP.php" method="post">
	<table>
		<tr>
			<td>NIK</td>
			<td>
				<label>
					<input type="text" name="nik" maxlength="18" size="20">
				</label>
			</td>
		</tr>
		<tr>
			<td>NKK</td>
			<td>
				<label>
					<input type="text" name="nkk" maxlength="18" size="20">
				</label>
			</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>
				<label>
					<input type="text" name="nama" maxlength="24" size="25">
				</label>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<label>
					<input type="date" name="tgl_lahir" size="8">
				</label>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<label for="gender"></label>
				<select name="jk" id="gender" required>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>
				<label>
					<input type="text" name="agama" maxlength="10" size="8">
				</label>
			</td>
		</tr>
        <tr>
            <td>Kode Pengurus</td>
            <td>
                <label for="kode_pengurus"></label>
                <select name="kp" id="kode_pengurus" required>
                    <option value="01">Ketua</option>
                    <option value="02">Wakil Ketua</option>
                    <option value="03">Sekretaris</option>
                    <option value="04">Bendahara</option>
                    <option value="05">Seksi Keamananan dan Lingkungan Hidup</option>
                    <option value="06">Seksi Pembangunan dan Kesejahteraan Sosial</option>
                    <option value="07">Seksi Pemuda, Olahraga, dan Seni Budaya</option>
                </select>
            </td>
        </tr>
		<tr>
			<td>Password</td>
			<td>
				<label>
					<input type="password" name="pwd" maxlength="14" size="25">
				</label>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="daftar" value="Daftar"></td>
		</tr>
	</table>
</form>
</body>
</html>