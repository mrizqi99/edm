  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">DIES DAILY ACTIVITY</span>
    </div>
    <div class="text2">
      <span>FORM ADD BU</span>
    </div>
    <div class="table">
    <table>
    <form action="<?= base_url('MasterData/tambahSection2'); ?>" method="post">
      <tr>
        <td class="kodearea">BU CODE</td>
        <td class="namaarea">BU NAME</td>
      </tr>
      <tr>
        <td class="formkodearea">
          <input type="text" name="buCode" placeholder="Kode BU">
        </td>
        <td class="formnamaarea">
          <input type="text" name="buName" placeholder="Nama BU">
        </td>
      </tr>
      <tr>
        <td class="namaarea">FACTORY</td>
        <td class="namaarea">DEPARTMENT</td>
      </tr>
      <tr>
        <td class="formnamaarea">
          <select name="pabrik">
            <option label="Choose"></option>
            <option value="BEKASI" label="BEKASI"></option>
            <option value="FAJAR" label="FAJAR"></option>
            <option value="SUNTER" label="SUNTER"></option>
          </select>
        </td>
        <td class="formnamaarea">
          <input type="text" name="departemen" placeholder="Departemen">
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
