  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>PIC LIST</span>
    </div>
    <div class="tambah">
      <button type="button" name="button">
        <a href="<?= base_url('MasterData/tambahPIC'); ?>">Tambah Baru</a>
      </button>
    </div>
    <div class="table">
    <table border="1">
      <tr>
        <td class="headerareacode">NPK</td>
        <td class="headernamaarea">Nama</td>
      </tr>
      <?php foreach($PIC as $p) { ?>
      <tr>
        <td class="areacode"><?= $p['npk'] ?></td>
        <td><?= $p['nama'] ?></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </section>
