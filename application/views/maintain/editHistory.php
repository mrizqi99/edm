<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">DIES DAILY ACTIVITY</span>
  </div>
  <div class="text2">
    <span>EDIT HISTORY BREAKDOWN</span>
  </div>
  <div class="table">
  <table border="1">
    <tr>
      <td class="headernamaarea">REQUEST NO</td>
      <td class="headernamaarea">CATEGORY</td>
      <td class="headernamaarea">DIES NO</td>
      <td class="headerareacode">DIES NAME</td>
      <td class="headerareacode">BU</td>
      <td class="headerareacode">PROBLEM & TIME</td>
    </tr>
    <?php foreach($dda as $d) { ?>
    <tr>
      <td class="areacode"><a href="<?= base_url('maintainMenu/ubahHistory/').$d['requestNo'];?>"><?= $d['requestNo'] ?></a></td>
      <td class="areacode"><?= $d['category'] ?></td>
      <td><?= $d['diesNo'] ?></td>
      <td><?= $d['diesName'] ?></td>
      <td><?= $d['buCode'] ?></td>
      <?php foreach ($bu as $b) { ?>
      <input type="hidden" name="buName" value="<?= $d['buName'] ?>">
      <?php } ?>
      <td><?= $d['proDT'] ?></td>
    </tr>
    <?php } ?>
  </table>
  </div>
</section>
