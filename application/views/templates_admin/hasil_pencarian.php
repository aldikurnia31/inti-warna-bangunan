<div class="container-fluid">
  <div class="row mt-4 mb-5">
    <h4> <i class="fas fa-search"></i> Menampilkan hasil untuk&ensp;<?= $keyword; ?></h4>
  </div>
  <div class="row">
    <a class="btn btn-primary text-white col-sm-8 col-md-1 col-lg-1 mb-2" href="<?= base_url() ?>data_barang" role="button" target="_blank">
      <i class="ml-2 fas fa-arrow-left"></i>
      Kembali
    </a>
  </div>
  <?php $no=1; foreach ($barang as $brg) : ?>
    <h5 class="mt-5">Data ditemukan&ensp;<?= $no++; ?></h5>
  <?php endforeach; ?>
  <table class="table table-bordered mt-4">
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Keterangan</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Stok</th>
      <th colspan="3">Opsi</th>
    </tr>

    <?php
    $noo=1;
    foreach ($barang as $brg) : ?>

    <tr>
      <td class="align-middle"><?= $noo++ ?></td>
      <td class="align-middle"><?= $brg['nama']; ?></td>
      <td class="align-middle text-wrap"><?= $brg['keterangan']; ?></td>
      <td class="align-middle"><?= $brg['kategori']; ?></td>
      <td class="align-middle">Rp.<?= $brg['harga']; ?></td>
      <td class="align-middle"><?= $brg['stok']; ?></td>
      <td class="align-middle">
        <a class="btn btn-success btn-sm" href="<?= base_url() ?>data_barang/detail_data/<?= $brg['id_barang']; ?>"><i class="fas fa-search"></i></a>
      </td>
      <td class="align-middle">
        <a class="btn btn-danger btn-sm" href="<?= base_url() ?>data_barang/hapus_data/<?= $brg['id_barang']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
      <td class="align-middle">
        <a class="btn btn-primary btn-sm" href="<?= base_url() ?>data_barang/edit_data/<?= $brg['id_barang']; ?>"><i class="fas fa-pen"></i></a>
      </td>
    </tr>

  <?php endforeach; ?>

  </table>
</div>
