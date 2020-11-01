<main>
  <div class="container-fluid mt-4">

    <h4 class="mb-4"><i class="fas fa-pen mr-3"></i>Edit Barang/produk</h4>

      <?php foreach ($barang as $brg) : ?>

        <form action="<?= base_url() ?>data_barang/update" method="post">
          <div class="form-group col-lg-3  bg-light p-4 rounded-lg">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="<?= $brg->nama ?>">
            <label class="mt-3">Keterangan</label>
            <input type="hidden" name="id_barang" value="<?= $brg->id_barang ?>" class="form-control">
            <textarea type="text" name="keterangan" class="form-control"><?= $brg->keterangan ?></textarea>
            <label class="mt-3" >Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>" >
            <label class="mt-3" >Harga</label>
            <input type="text" name="harga" class="form-control col-lg-4" value="<?= $brg->harga ?>">
            <label class="mt-3" >Stok</label>
            <input type="text" name="stok" class="form-control col-lg-4" value="<?= $brg->stok ?>">
            <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-check mr-2"></i>Simpan</button>
          </div>
        </form>

      <?php endforeach; ?>

  </div>
</main>
