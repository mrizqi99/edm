  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>FORM ADD USER</span>
    </div>
    <div class="table">
    <table>
    <form action="<?= base_url('MasterData/tambahUser2'); ?>" method="post">
      <tr>
        <td class="kodearea">BU CODE</td>
        <td class="namaarea">NPK</td>
      </tr>
      <tr>
        <td class="formkodearea">
          <select name="buCode">
            <option label="Choose"></option>
            <?php foreach ($bu as $b) { ?>
            <option value="<?= $b['buCode'] ?>" label="<?= $b['buCode'] ?> - <?= $b['buName'] ?>"></option>
            <?php } ?>
          </select>
        </td>
        <td class="formnamaarea">
          <select name="npk">
            <option label="Choose"></option>
            <?php foreach ($PIC as $p) { ?>
            <option value="<?= $p['npk']; ?>" label="<?= $p['npk']; ?> - <?= $p['nama']; ?>"></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="namaarea">NAME</td>
        <td class="namaarea">USER ID</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <select name="nama">
            <?php foreach ($PIC as $p) { ?>
            <option value="<?= $p['nama']; ?>" label="<?= $p['nama']; ?>"></option>
            <?php } ?>
          </select>
        </td>
        <td class="formnamaarea">
          <select name="userID">
            <?php foreach ($PIC as $p) { ?>
            <option value="<?= $p['npk']; ?>" label="<?= $p['npk']; ?> - <?= $p['nama']; ?>"></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="submit">
          <input type="submit" name="submit" value="SAVE">
        </td>
      </tr>
    </form>
    </table>
    </div>
  </section>
