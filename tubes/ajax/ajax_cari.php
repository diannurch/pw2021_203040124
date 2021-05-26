<?php
require '../php/functions.php';
$products = cari($_GET['keyword']);

?>

  <!-- <?php if (empty($products)) : ?>
    <tr>
        <td colspan="4">
            <p style="color: red; font-style:italic; text-align:center;">data tidak ditemukan</p>
        </td>
    </tr>
  <?php endif; ?>
  <div class="row">
    <?php  $i = 1;
      foreach ($products as $p) : ?>
        <div class="col-md-3">
          <div class="card mt-3">
            <div class="product align-items-center p-5 text-center">
              <img src="assets/img/<?= $p['picture']; ?>" class="rounded" width="160"><br>
              <span><?= $p['name']; ?></span>  <br><br>
              <!-- button -->
              <a href="php/detail.php?id=<?= $p['id']; ?>" class="btn btn-primary" >Detail</a>
            </div>
          </div>
        </div>
<?php endforeach; ?> -->

<?php if (empty($products)) : ?>
                <tr>
                    <td>
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ( $products as $p ) : ?>
                <tr style="text-align: center;  background-color: #EAECEE; color: black;">
                    <th scope="row"><?= $i ?></th>
                    <td>
                        <a href="ubah.php?id=<?= $p["id"]?>"><button style="background-color: #85929E;" <i class="bi bi-pencil-square"></i> Ubah</button></a>
                        <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Apakah anda yakin?');"><button style="background-color: #34495E;" <i class="bi bi-trash-fill"></i> Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $p["picture"]; ?>"></td>
                    
                    <td><?= $p["name"]; ?></td>
                    <td><?= $p["brand"]; ?></td>
                    <td><?= $p["description"]; ?></td>
                    <td><?= $p["price"]; ?></td>
                    <td><?= $p["category"]; ?></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>