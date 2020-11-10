<div class="container-fluid">
  <div class="row mt-3">
    <div class="col-md-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= base_url().'/uploads/'.$barang['gambar']; ?>" alt="Card image cap">
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $barang['nama']; ?></h5>
        <p class="card-text"><?= $barang['keterangan']; ?></p>
        <h4><span class="badge badge-pill badge-success">Rp.<?= $barang['harga']; ?></span></h4>
        <a href="<?= base_url() ?>data_barang" class="btn btn-primary mt-4">Kembail</a>
      </div>
    </div>
  </div>
</div>
