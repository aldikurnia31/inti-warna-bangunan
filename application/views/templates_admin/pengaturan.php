<div class="container-fluid">
  <div class="row" >
    <div class="col-sm-8">
      <h4 class="mb-5 mt-4"><i class="fas fa-sliders-h mr-3"></i>Pengaturan Website</h4>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h5>Tambah Kategori</h5>
      <h6 class="text-secondary mb-3">Tambah kategori untuk mengatur produk sesuai jenis dan tipe.</h6>
    </div>
  </div>

  <?= $this->session->flashdata('message'); ?>
  <div class="row d-flex flex-column bg-light p-3">
    <div class="col">
      <form action="pengaturan/kategori" method="post">
        <input type="text" class="col-lg-2" name="input">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    <div class="col">
      <table class="table mt-3 col-lg-3">
        <tr>
          <th>No.</th>
          <th>Kategori</th>
          <th>Opsi</th>
        </tr>

        <?php $n=1; foreach($kategori as $k): ?>
          <tr>
            <td><?= $n++; ?></td>
            <td><?= $k['nama']; ?></td>
            <td class="p-2"><a class="btn btn-danger btn-sm" href="<?= base_url() ?>pengaturan/hapus_kategori/<?= $k['id']; ?>"></button>Hapus</td>
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>
</div>
