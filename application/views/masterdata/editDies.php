  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>FORM ADD DIES</span>
    </div>
    <div class="table">
    <table>
    <?php foreach ($dies as $d) { ?>
    <form action="<?= base_url('MasterData/editDies'); ?>" method="post">
      <tr>
        <td class="kodearea">DIES NO</td>
        <td class="namaarea">DIES NAME</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <input type="text" name="diesNo" value="<?= $d['diesNo']; ?>">
        </td>
        <td class="formnamaarea">
          <input type="text" name="diesName" value="<?= $d['diesName']; ?>">
        </td>
      </tr>
      <tr>
        <td class="namaarea">BU CODE</td>
        <td class="namaarea">AREA</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <select name="buCode">
            <option value="<?= $d['buCode'] ?>" label="<?= $d['buCode'] ?>"></option>
            <?php foreach ($bu as $b) { ?>
            <option value="<?= $b['buCode'] ?>" label="<?= $b['buCode'] ?> - <?= $b['buName'] ?>"></option>
            <?php } ?>
          </select>
        </td>
        <td class="formnamaarea">
          <select name="areaCode">
            <option value="<?= $d['areaCode'] ?>" label="<?= $d['areaCode'] ?>"></option>
            <option value="" label="KOSONG"></option>
            <?php foreach ($area as $a) { ?>
            <option value="<?= $a['areaCode'] ?>" label="<?= $a['areaCode'] ?> - <?= $a['namaArea'] ?>"></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="namaarea">CRITICAL</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <input type="text" name="critical" value="<?= $d['critical']; ?>">
        </td>
      </tr>
      <tr>
        <td class="submit">
          <input type="submit" name="submit" value="SAVE">
        </td>
      </tr>
    </form>
    <?php } ?>
    </table>
    </div>
  </section>
