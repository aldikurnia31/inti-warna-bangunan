<main>

  <div class="container-fluid">
    <div class="row" >
      <div class="col-sm-8">
        <h4 class="mb-5 mt-4"><i class="fas fa-box mr-3"></i>Data Barang Yang di Posting</h4>
      </div>
    </div>

    <div class="row">
      <?php
        $message = $this->session->flashdata('message');

        if($message){
          echo $message;
        }
      ?>
    </div>

    <div class="row" >
      <div class="col justify-content-between">
        <a class="btn btn-primary text-white col-sm-8 col-md-3 col-lg-3 mb-2" href="<?= base_url() ?>home" role="button" target="_blank">
          Lihat Website
          <i class="ml-2 fas fa-external-link-alt"></i>
        </a>
        <a class="btn btn-primary text-white col-sm-8 col-md-3 col-lg-3 mb-2" onClick="window.location.reload();" role="button">
          Refresh
          <i class="ml-2 fas fa-sync-alt"></i>
        </a>
        <a class="btn btn-primary text-white col-sm-8 col-md-3 col-lg-3 mb-2" href="<?= base_url() ?>tambah_barang" role="button">
          Tambah Barang
          <i class="ml-2 fas fa-plus"></i>
        </a>
      </div>
    </div>

    <?= form_open('data_barang/pencarian') ?>
    <div class="row">
      <div class="input-group col-lg-3 mb-3 mt-4">
        <input type="text" class="form-control" placeholder="Masukan nama barang.." name="keyword">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2"> <i class="fas fa-search"></i> </span>
        </div>
      </div>
    </div>
    <?= form_close() ?>

    <div class="row">
      <table class="table table mt-4">
        <tr>
          <th>No.</th>
          <th>Nama Barang</th>
          <th>Keterangan</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Stok</th>
          <th colspan="3">Opsi</th>
        </tr>

        <?php $no = 1; foreach ($barang as $brg) : ?>

        <tr>
          <td class="align-middle"><?= $no++ ?></td>
          <td class="align-middle"><?= $brg['nama']; ?></td>
          <td class="align-middle text-wrap"><?= $brg['keterangan']; ?></td>
          <td class="align-middle"><?= $brg['kategori']; ?></td>
          <td class="align-middle"><?= $this->model_barang->rupiah($brg['harga']); ?></td>
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

  </div>
</main>
