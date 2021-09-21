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
    <form action="<?= base_url('MasterData/tambahDies2'); ?>" method="post">
      <tr>
        <td class="kodearea">DIES NO</td>
        <td class="namaarea">DIES NAME</td>
      </tr>
      <tr>
        <td class="formdiesno">
          <input type="text" name="diesNo1"> -
          <input type="text" name="diesNo2"> -
          <input type="text" name="diesNo3">
        </td>
        <td class="formnamaarea">
          <input type="text" name="diesName" placeholder="Nama DIES">
        </td>
      </tr>
      <tr>
        <td class="namaarea">BU CODE</td>
        <td class="namaarea">AREA</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <select name="buCode">
            <option label="Choose"></option>
            <?php foreach ($bu as $b) { ?>
            <option value="<?= $b['buCode'] ?>" label="<?= $b['buCode'] ?> - <?= $b['buName'] ?>"></option>
            <?php } ?>
          </select>
        </td>
        <td class="formnamaarea">
          <select name="areaCode">
            <option label="Choose"></option>
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
          <input type="text" name="critical" placeholder="CRITICAL">
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
