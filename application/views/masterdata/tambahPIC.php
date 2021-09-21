  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>FORM ADD PIC</span>
    </div>
    <div class="table">
    <table>
    <form action="<?= base_url('MasterData/tambahPIC2'); ?>" method="post">
      <tr>
        <td class="kodearea">NPK</td>
        <td class="namaarea">NAME</td>
      </tr>
      <tr>
        <td class="formkodearea">
          <input type="text" name="npk" placeholder="Npk">
        </td>
        <td class="formnamaarea">
          <input type="text" name="nama" placeholder="Nama">
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
