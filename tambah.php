<html>
    <head>
</head>
<body>
    <h1>Form tambah</h1>
    <form action="proses.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" />
</p>
<p>
    <label for="kelas">Kelas : </label>
    <input type="text" name="kelas"/>
</p>
<p>
    <label for="nama_jurusan">Nama Jurusan : </label>
    <select name="jurusan">
        <option value="RPL">RPL</option>
        <option value="Busan">Busana</option>
        <option value="Boga">Boga</option>
        <option value="TL">TL</option>
</select>
</p>
<p>
    <label for="tahun">Tahun : </label>
    <input type="text" name="tahun" />
</p>
<p>
    <label for="nominal">Nominal : </label>
    <input type="number" name="nominal" />
</p>
<p>
   <input type="submit" value="tambah siswa" name="tambah_siswa"/>
</p>
</fieldset>
</form>
</body>
</html> 