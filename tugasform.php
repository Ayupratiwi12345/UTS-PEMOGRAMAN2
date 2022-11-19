<!doctype html>
<html>
    <head><title> rancangan form</title></head>
    <body>
        <form action="proses.php" method="post">
            <b>NIM : </b><br>
            <Input type="text" name="nim" method ="post" required><br>

            <b>NAMA :</b><br>
            <Input type="text" name="nama"required><br>

            <b>Jenis Kelamin<br>
            <select name="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
</select></br>
           <b>Alamat :</b><br>
            <Input type="text" name="alamat"required><br>
            

            <input type="submit" name="kirim" value="Kirim">
            <input type="reset" name="kosongkan" value="kosongkan">

            
</form>
</body>
</html>