<main>
  <div class="container-fluid">

    <!-- <button type="button" class="btn btn-primary btn-sm mt-4"><i class="fas fa-plus fa-sm"></i>Tambah barang</button> -->
  
      <?= anchor('tambah_barang',
          '<button type="button" class="btn btn-primary mt-5 mr-3"><i class="fas fa-plus mr-2"></i>Tambah Barang</button>') ?>
    
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
      $no = 1;
      foreach ($barang as $brg) : ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $brg->nama; ?></td>
        <td><?= $brg->keterangan; ?></td>
        <td><?= $brg->kategori; ?></td>
        <td>Rp.<?= $brg->harga; ?></td>
        <td><?= $brg->stok; ?></td>
        <td> <button type="button" class="btn btn-success btn-sm"> <i class="fas fa-search"></i></button></td>
        <td>
          <?= anchor('data_barang/hapus/' . $brg->id_barang,
          '<button type="button" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i></button>') ?>

        </td>
        <td>
          <?= anchor('data_barang/edit/' . $brg->id_barang,
          '<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></button>'); ?>
        </td>
      </tr>

    <?php endforeach; ?>

    </table>
  </div>
</main>
