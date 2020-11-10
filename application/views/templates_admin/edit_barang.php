<main>
  <div class="container-fluid mt-4">

    <h4 class="mb-4"><i class="fas fa-pen mr-3"></i>Edit Barang/produk</h4>

        <form action="" method="post">
          <div class="form-group col-lg-3  bg-light p-4 rounded-lg">

            <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>">

            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="<?= $barang['nama']; ?>">
            <span class="text-danger small"><?= form_error('nama'); ?></span>

            <label class="mt-3">Keterangan</label>
            <textarea type="text" name="keterangan" class="form-control"><?= $barang['keterangan']; ?></textarea>
            <span class="text-danger small"><?= form_error('keterangan'); ?></span>

            <label class="mt-3" >Kategori</label>
            <div class="form-group">
              <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                <option value="">--Pilih Kategori--</option>
                <?php foreach($kategori as $k): ?>
                  <?php if($k['nama'] == $barang['kategori']): ?>
                    <option value="<?= $k['nama'] ?>"selected><?= $k['nama'] ?></option>
                  <?php else: ?>
                    <option value="<?= $k['nama'] ?>"><?= $k['nama'] ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <span class="text-danger small"><?= form_error('kategori'); ?></span>

            <label class="mt-3" >Harga</label><br>
            <label class="small text-secondary">Masukan hanya angka.</label>
            <input type="text" name="harga" class="form-control col-lg-4" value="<?= $barang['harga']; ?>">
            <span class="text-danger small"><?= form_error('harga'); ?></span>

            <label class="mt-3" >Stok</label>
            <input type="text" name="stok" class="form-control col-lg-4" value="<?= $barang['stok']; ?>">
            <span class="text-danger small"><?= form_error('stok'); ?></span>

            <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-check mr-2"></i>Simpan</button>
          </div>
        </form>

  </div>
</main>
