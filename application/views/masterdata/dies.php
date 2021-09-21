  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>DIES LIST</span>
    </div>
    <div class="tambah">
      <button type="button" name="button">
        <a href="<?= base_url('MasterData/tambahDies'); ?>">Tambah Baru</a>
      </button>
    </div>
    <div class="table">
    <table border="1">
      <tr>
        <td class="headernamaarea">DIES NO</td>
        <td class="headernamaarea">DIES NAME</td>
        <td class="headerareacode">KODE BU</td>
        <td class="headerareacode">KODE AREA</td>
        <td class="headerareacode">CRITICAL</td>
        <td class="headerareacode">ACTION</td>
      </tr>
      <?php foreach($dies as $d) { ?>
      <tr>
        <td class="areacode"><?= $d['diesNo'] ?></td>
        <td class="areacode"><?= $d['diesName'] ?></td>
        <td><?= $d['buCode'] ?></td>
        <td><?= $d['areaCode'] ?></td>
        <td><?= $d['critical'] ?></td>
        <td></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </section>
