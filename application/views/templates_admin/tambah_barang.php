<main>

  <div class="container-fluid mt-4">
    <h4> <i class="fas fa-box"></i> Tambah barang/produk</h4><br>

    <form action="<?= base_url() ?>tambah_barang/tambah" method="post" enctype="multipart/form-data">
      <div class="form-group col-lg-3  bg-light p-4 rounded-lg">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
        <span class="text-danger small"><?= form_error('nama'); ?></span>
        <label class="mt-3">Keterangan</label>
        <textarea type="text" name="keterangan" class="form-control"><?= set_value('keterangan') ?></textarea>
        <span class="text-danger small"><?= form_error('keterangan'); ?></span>
        <label class="mt-3" >Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?= set_value('kategori') ?>">
        <span class="text-danger small"><?= form_error('kategori'); ?></span>
        <label class="mt-3" >Harga</label>
        <input type="text" name="harga" class="form-control col-lg-4" value="<?= set_value('harga') ?>">
        <span class="text-danger small"><?= form_error('harga'); ?></span>
        <label class="mt-3" >Stok</label>
        <input type="text" name="stok" class="form-control col-lg-4" value="<?= set_value('stok') ?>">
        <span class="text-danger small"><?= form_error('stok'); ?></span>
        <label class="mt-3" >Gambar</label>
        <input type="file" name="userfile">
        <span class="text-danger small"><?= form_error('userfile'); ?></span>
        <button type="submit" class="btn btn-primary mt-5 mr-3"><i class="fas fa-check mr-2"></i>Simpan</button>
        <button type="reset" class="btn btn-primary mt-5"><i class="fas fa-redo mr-2"></i>Reset</button>
      </div>

    </form>
  </div>
</main>
