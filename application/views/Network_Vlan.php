<div class="container">
  <div class="field">
    <p class="control">
      <button class="button is-link" type="button">Buat VLAN Baru</button>
    </p>
  </div>

  <nav class="level" style="margin-bottom: 5px;">
    <div class="level-left">
      <div class="level-item">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Tampilkan
            </a>
          </p>
          <p class="control">
            <div class="select">
              <select name="show_row">
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
          </p>
          <p class="control">
            <a class="button is-static">
              Halaman
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="level-right">
      <div class="level-item">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Filter
            </a>
          </p>
          <p class="control">
            <input class="input" type="text" name="filter">
          </p>
          
        </div>
      </div>
    </div>
  </nav>
  
  <table class="table is-bordered is-striped is-narrow is-fullwidth">
    <thead>
      <tr>
        <th>VLAN ID</th>
        <th>VLAN Vendor</th>
        <th>Kapasitas</th>
        <th>POP</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>131</td>
        <td>Powertel</td>
        <td>500Mbps</td>
        <td>Cengkareng Office</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>

      <tr>
        <td>302</td>
        <td>Fibermedia</td>
        <td>1Gbps</td>
        <td>Trias</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>

      <tr>
        <td>204</td>
        <td>Iforte</td>
        <td>1Gbps</td>
        <td>Priuk</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
    </tbody>
  </table>      
</div>