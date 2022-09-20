<form action="/update/<?= $id ?>" method="post">
    <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" class="form-control" id="npm" name="npm" aria-describedby="emailHelp" value="<?= $npm ?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>