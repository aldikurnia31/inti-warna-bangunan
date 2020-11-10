

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3 my-4 bg-light">
        <h5 class="my-4">Kategori</h5>
        <div class="list-group my-4">
          <?php foreach($kategori as $k): ?>
            <a href="#" class="list-group-item"><?= $k['nama'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-9">

        <div class="row">

          <?php foreach ($barang as $brg) : ?>

            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 my-4">
              <div class="card h-100">
                <a href="<?= base_url() ?>home/produk/<?= $brg['id_barang'] ?>"><img class="card-img-top" src="<?= base_url().'uploads/'.$brg['gambar']; ?>" alt="produk"></a>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="<?= base_url() ?>home/produk/<?= $brg['id_barang'] ?>"><?= $brg['nama']; ?></a>
                  </h5>
                </div>
                <div class="card-footer">
                  <span class="badge w-100 badge-primary p-2" style="font-size: 15px;"><?= $brg['kategori'] ?></span>
                </div>
                <div class="card-footer">
                  <span class="badge badge-success p-2" style="font-size: 15px;"><?= $this->model_barang->rupiah($brg['harga']); ?></span>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col">
            <?= $this->pagination->create_links(); ?>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
