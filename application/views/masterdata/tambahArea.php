  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>FORM ADD AREA</span>
    </div>
    <div class="table">
    <table>
    <form action="<?= base_url('MasterData/tambahArea2'); ?>" method="post">
      <tr>
        <td class="kodearea">AREA CODE</td>
        <td class="namaarea">AREA NAME</td>
      </tr>
      <tr>
        <td class="formkodearea">
          <input type="text" name="areaCode" placeholder="Kode Area">
        </td>
        <td class="formnamaarea">
          <input type="text" name="namaArea" placeholder="Nama Area">
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
