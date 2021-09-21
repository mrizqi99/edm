  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>AREA LIST</span>
    </div>
    <div class="tambah">
      <button type="button" name="button">
        <a href="<?= base_url('MasterData/tambahArea'); ?>">Tambah Baru</a>
      </button>
    </div>
    <div class="table">
    <table border="1">
      <tr>
        <td class="headerareacode">Area Code</td>
        <td class="headernamaarea">Nama Area</td>
      </tr>
      <?php foreach($area as $a) { ?>
      <tr>
        <td class="areacode"><?= $a['areaCode'] ?></td>
        <td><?= $a['namaArea'] ?></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </section>
