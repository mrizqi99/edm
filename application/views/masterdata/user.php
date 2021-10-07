  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>USER LIST</span>
    </div>
    <div class="tambah">
      <button type="button" name="button">
        <a href="<?= base_url('MasterData/tambahUser'); ?>">Tambah Baru</a>
      </button>
    </div>
    <div class="table">
    <table border="1">
      <tr>
        <td class="headerareacode">KODE BU</td>
        <td class="headerareacode">NPK</td>
        <td class="headernamaarea">NAMA</td>
        <td class="headerareacode">USER ID</td>
      </tr>
      <?php foreach($user2 as $u) { ?>
      <tr>
        <td class="areacode"><?= $u['buCode'] ?></td>
        <td><?= $u['npk'] ?></td>
        <td class="areacode"><?= $u['nama'] ?></td>
        <td><?= $u['userId'] ?></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </section>
