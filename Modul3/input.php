<html>
    <form action="transfer.php" method="POST">
        <label>Nama</label><br/>
        <input type="text" name="nama"/>
        <br/><br/>

        <label>Alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10"/></textarea>
        <br/><br/>

        <label>NIP</label>
        <input type="text" name="nip">
        <br/><br/>

        <label>Tanggal Lahir</label><br/>
        <input type="date" name="tanggal_lahir"/>
        <br/><br/>

        <label>Jenis Kelamin</label><br/>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br/><br/>
        <label>Jabatan</label><br/>
        <select name="jabatan">
            <option value="Analis">Analis</option>
            <option value="Programmer">Programmer</option>
            <option value="Supervisor">Supervisor</option>
        </select>
        <br/><br/>
        <button type="submit">Tambah</button>
    </form>
</html>