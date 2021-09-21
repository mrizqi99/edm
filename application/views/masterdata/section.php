  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>BU LIST</span>
    </div>
    <div class="tambah">
      <button type="button" name="button">
        <a href="<?= base_url('MasterData/tambahSection'); ?>">Tambah Baru</a>
      </button>
    </div>
    <div class="table">
    <table border="1">
      <tr>
        <td class="headerareacode">KODE BU</td>
        <td class="headernamaarea">NAMA BU</td>
        <td class="headerareacode">PABRIK</td>
        <td class="headernamaarea">DEPARTEMEN</td>
      </tr>
      <?php foreach($section as $s) { ?>
      <tr>
        <td class="areacode"><?= $s['buCode'] ?></td>
        <td><?= $s['buName'] ?></td>
        <td class="areacode"><?= $s['pabrik'] ?></td>
        <td><?= $s['departemen'] ?></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </section>
