<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">DIES DAILY ACTIVITY</span>
  </div>
  <div class="text2">
    <span>FORM DAILY ACTIVITY</span>
  </div>
  <div class="table">
  <table>
  <form action="<?= base_url('maintainMenu/tambahDaily'); ?>" method="post">
    <tr>
      <td class="kodearea">DEPARTEMENT</td>
      <td class="namaarea">DIES NAME</td>
      <td class="namaarea">DIES No</td>
    </tr>
    <tr>
      <td class="formkodearea">
        <select name="departement">
          <option label="Choose"></option>
          <?php foreach ($bu as $b) { ?>
          <option value="<?= $b['buCode'] ?>" label="<?= $b['buCode'] ?> - <?= $b['buName'] ?>"></option>
          <?php } ?>
        </select>
      </td>
      <td class="formkodearea">
        <select name="diesName" id="diesName" onChange="opsi(this)" onkeyup="opsi()">
          <option label="Choose" value="off"></option>
          <?php foreach ($dies as $d) { ?>
          <option value="<?= $d['diesName'] ?>" label="<?= $d['diesNo'] ?> - <?= $d['diesName'] ?>"></option>
          <?php } ?>
        </select>
        <!-- <input type="text" name="" value="" id="title" class="form-control"> -->
      </td>
      <td class="formkodearea">
        <!-- <select name="diesNo" id="diesNo" disabled>
          <option label="Choose"></option>
          <?php foreach ($dies as $d) { ?>
          <option value="<?= $d['diesNo'] ?>" label="<?= $d['diesNo'] ?> - <?= $d['diesName'] ?>"></option>
          <?php } ?>
        </select> -->
        <input type="text" name="diesNo" id="diesNo" disabled>
      </td>
    </tr>
    <tr>
      <td class="namaarea">PROBLEM DATE AND TIME</td>
      <td class="namaarea">CATEGORY</td>
    </tr>
    <tr>
      <td class="formnamaarea">
        <input type="datetime-local" name="proDT">
      </td>
      <td class="formnamaarea">
        <select name="category">
          <option label="Choose"></option>
          <option value="PM" label="PM"></option>
          <option value="BM" label="BM"></option>
          <option value="CM" label="CM"></option>
          <option value="MARKING" label="MARKING"></option>
          <option value="BALANCING" label="BALANCING"></option>
          <option value="CHANGE INSERT" label="CHANGE INSERT"></option>
          <option value="CHOKOTEI" label="CHOKOTEI"></option>
          <option value="BURR" label="BURR"></option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="namaarea">PROBLEM</td>
    </tr>
    <tr>
      <td class="formnamaarea">
        <input type="text" name="problem" placeholder="Problem">
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
