<main>

  <div class="container-fluid mt-4">
    <h4> <i class="fas fa-box"></i> Tambah barang/produk</h4><br>

    <form action="<?= base_url() ?>tambah_barang" method="post" enctype="multipart/form-data">
      <div class="form-group col-lg-3  bg-light p-4 rounded-lg">
        <?= $this->session->flashdata('upload'); ?>
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
        <span class="text-danger small"><?= form_error('nama'); ?></span>
        <label class="mt-3">Keterangan</label>
        <textarea id="ckeditor" type="text" name="keterangan" class="form-control"><?= set_value('keterangan') ?></textarea>
        <script>
          CKEDITOR.replace( 'keterangan' );
        </script>
        <span class="text-danger small"><?= form_error('keterangan'); ?></span>
        <label class="mt-3" >Kategori</label>
        <div class="form-group">
          <select name="kategori" class="form-control" id="exampleFormControlSelect1">
            <option value="">--Pilih Kategori--</option>
            <?php foreach($kategori as $k): ?>
              <option value="<?= $k['nama'] ?>"><?= $k['nama'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <span class="text-danger small"><?= form_error('kategori'); ?></span>
        <label class="mt-3" >Harga</label><br>
        <label class="small">Masukan Hanya angka.</label>
        <input type="text" name="harga" class="form-control col-lg-4" value="<?= set_value('harga') ?>">
        <span class="text-danger small"><?= form_error('harga'); ?></span>
        <label class="mt-3" >Stok</label>
        <input type="text" name="stok" class="form-control col-lg-4" value="<?= set_value('stok') ?>">
        <span class="text-danger small"><?= form_error('stok'); ?></span>
        <label class="mt-3" >Gambar</label>
        <input type="file" name="userfile">
        <button type="submit" class="btn btn-primary mt-5 mr-3"><i class="fas fa-check mr-2"></i>Simpan</button>
        <button type="reset" class="btn btn-primary mt-5"><i class="fas fa-redo mr-2"></i>Reset</button>
      </div>

    </form>
  </div>
</main>
