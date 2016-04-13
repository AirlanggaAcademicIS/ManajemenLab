<html>
<head>
<title>Penjadwalan Labkom</title>
</head>
 
<body>
<h1>Form Input Jadwal</h1>
 
<form name="input_jadwal" action="InputJadwal.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td><input type="text" name="lokasi" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="date" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Dari Pukul</td>
            <td>:</td>
            <td><input type="time" name="timefrom" required="required" /></td>
        </tr>
        <tr>
            <td>Sampai Pukul</td>
            <td>:</td>
            <td><input type="time" name="timeto" required="required" /></td>
        </tr>
        <tr>
            <td>Nama Kegiatan</td>
            <td>:</td>
            <td><input type="text" name="kegiatan" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>PJMK</td>
            <td>:</td>
            <td><input type="text" name="pjmk" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>