<div class="container">
  <div class="card mb-3 w-100 my-5">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url().'uploads/'.$barang['gambar'] ?>" class="card-img" alt="<?= $barang['gambar'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $barang['nama'] ?></h5>
          <p class="card-text"><?= $barang['keterangan'] ?></p>
          <h4> <span class="badge badge-pill badge-success"><?= $this->model_barang->rupiah($barang['harga']); ?></span> </h4>
          <h5 class="my-5">Stok : <?= $barang['stok'] ?></h5>
        </div>
      </div>
    </div>
  </div>

</div>
