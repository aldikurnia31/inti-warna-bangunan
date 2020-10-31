<main>
  <div class="container-fluid mt-4">
    <h4>Tambah barang/produk</h4><br>
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
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-plus"></i>Simpan</button>
      </div>
    </form>
  </div>
</main>
