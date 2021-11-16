<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">DIES DAILY ACTIVITY</span>
  </div>
  <div class="text2">
    <span>FORM EDIT HISTORY</span>
  </div>
  <div class="table">
  <table>
  <?php foreach ($dda as $d) { ?>
  <form action="<?= base_url('maintainMenu/ubahHistory'); ?>" method="post">
    <tr>
      <td class="kodearea">REQUEST NUMBER</td>
      <td class="namaarea">ISSUER NAME</td>
    </tr>
    <tr>
      <td class="formdiesno">
        <input type="hidden" name="requestNo" value="<?= $d['requestNo']; ?>">
        <input type="text" name="requestNo" value="<?= $d['requestNo']; ?>" disabled>
      </td>
      <td class="formnamaarea">
        <input type="hidden" name="issuerName" value="<?= $d['issuerName']; ?>">
        <input type="text" value="<?= $d['issuerName']; ?>" disabled>
      </td>
    </tr>
    <tr>
      <td class="namaarea">DEPARTEMENT</td>
      <td class="namaarea">DIES NUMBER & NAME</td>
    </tr>
    <tr>
      <td class="formnamaarea">
        <input type="hidden" name="departement" value="<?= $d['buCode'] ?>">
        <input type="hidden" name="buName" value="<?= $d['buName'] ?>">
        <input type="text" value="<?= $d['buCode'] ?> - <?= $d['buName'] ?>" disabled>
        <!-- <select name="departement">
          <option value="<?= $d['buCode'] ?>" label="<?= $d['buCode'] ?> - <?= $d['buName'] ?>"></option>
          <?php foreach ($bu as $b) { ?>
          <option value="<?= $b['buCode'] ?>" label="<?= $b['buCode'] ?> - <?= $b['buName'] ?>"></option>
          <?php } ?>
          <option value="<?= $d['buCode'] ?>" label="<?= $d['buCode'] ?> - <?= $d['buName'] ?>"></option>
        </select> -->
        <!-- <?php foreach($bu2 as $b2) { ?>
        <input type="hidden" name="buName" value="<?= $b2['buName'] ?>">
        <?php } ?> -->
      </td>
      <td class="formnamaarea">
        <!-- <input type="text" name="diesName" value="<?= $d['diesName'] ?>"> -->
        <select name="diesName" onChange="opsi(this)" id="diesName" onkeyup="opsi()">
          <option value="<?= $d['diesName'] ?>" label="<?= $d['diesNo'] ?> # <?= $d['diesName'] ?>"></option>
          <?php foreach ($dies as $ds) { ?>
          <option value="<?= $ds['diesName'] ?>" label="<?= $ds['diesName'] ?> - <?= $ds['diesNo'] ?>"></option>
          <?php } ?>
          <option value="off" label="Kosong"></option>
          <!-- <option value="<?= $d['diesNo'] ?>" label="<?= $d['diesNo'] ?> - <?= $d['diesName'] ?>"></option> -->
        </select>
        <input type="hidden" value="<?= $ds['diesNo'] ?>" name="diesNo" id="diesNo">
      </td>
    </tr>
    <tr>
      <td class="namaarea">PROBLEM DATE AND TIME</td>
      <td class="namaarea">CATEGORY</td>
    </tr>
    <tr>
      <td class="formnamaarea">
        <input type="hidden" name="proDT" value="<?= $d['proDT'] ?>">
        <input type="text" value="<?= $d['proDT'] ?>" disabled>
      </td>
      <td class="formnamaarea">
        <input type="hidden" name="category" value="<?= $d['category'] ?>">
        <input type="text" value="<?= $d['category'] ?>" disabled>
      </td>
    </tr>
    <tr>
      <td class="namaarea">PROBLEM</td>
    </tr>
    <tr>
      <td class="formnamaarea">
        <input type="text" name="problem" value="<?= $d['problem'] ?>">
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
