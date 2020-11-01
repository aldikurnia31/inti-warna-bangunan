<main>

  <div class="container-fluid mt-4">
    <h4> <i class="fas fa-box"></i> Tambah barang/produk</h4><br>

    <form action="<?= base_url() ?>tambah_barang/tambah" method="post" enctype="multipart/form-data">
      <div class="form-group col-lg-3  bg-light p-4 rounded-lg">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control">
        <label class="mt-3">Keterangan</label>
        <textarea type="text" name="keterangan" class="form-control"></textarea>
        <label class="mt-3" >Kategori</label>
        <input type="text" name="kategori" class="form-control">
        <label class="mt-3" >Harga</label>
        <input type="text" name="harga" class="form-control col-lg-4">
        <label class="mt-3" >Stok</label>
        <input type="text" name="stok" class="form-control col-lg-4">
        <label class="mt-3" >Gambar</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="gambar">
          <label class="custom-file-label" for="gambar">Pilih file...</label>
        </div>
        <button type="submit" class="btn btn-primary mt-5 mr-3"><i class="fas fa-check mr-2"></i>Simpan</button>
        <button type="reset" class="btn btn-primary mt-5"><i class="fas fa-redo mr-2"></i>Reset</button>
      </div>

    </form>
  </div>
</main>
