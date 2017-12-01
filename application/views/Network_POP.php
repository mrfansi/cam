<div class="container">
  <div class="field">
    <p class="control">
      <button class="button is-link modal-button" type="button" data-target="modal-pop">Buat POP Baru</button>
      <button class="button is-link modal-button" type="button" data-target="modal-map">Map</button>
    </p>
  </div>
  
  <table class="table is-bordered is-striped is-narrow is-fullwidth">
    <thead>
      <tr>
        <th>Kode POP</th>
        <th>Nama POP</th>
        <th>Jenis Gedung</th>
        <th>Tinggi Tower</th>
        <th>Alamat</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>POP-20170109-230001</td>
        <td>Cengkareng Office</td>
        <td>Kantor</td>
        <td>15 Meter</td>
        <td>Jl. Cendrawasih Raya No. 61</td>
        <td>-6.144092</td>
        <td>106.724145</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>POP-20170109-230001</td>
        <td>Cengkareng Office</td>
        <td>Kantor</td>
        <td>15 Meter</td>
        <td>Jl. Cendrawasih Raya No. 61</td>
        <td>-6.144092</td>
        <td>106.724145</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>POP-20170109-230001</td>
        <td>Cengkareng Office</td>
        <td>Kantor</td>
        <td>15 Meter</td>
        <td>Jl. Cendrawasih Raya No. 61</td>
        <td>-6.144092</td>
        <td>106.724145</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
    </tbody>
  </table>      
</div>

<div class="modal" id="modal-pop">
  <div class="modal-background"></div>
  <form class="modal-card" method="POST" autocomplete="off">
    <header class="modal-card-head">
      <p class="modal-card-title">Data POP</p>
      <button class="delete" type="button" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <div class="field">
        <p class="control">
          <input type="text" class="input" name="nama_pop" placeholder="POP" autofocus="yes">
        </p>
      </div>

      <div class="field is-grouped">
        <div class="select is-fullwidth">
            <select name="jenis_gedung_pop">
              <option value="" selected disabled>Jenis Gedung</option>
              <option value="Perumahan">Perumahan</option>
              <option value="Apartement">Apartement</option>
              <option value="Hotel">Hotel</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
        <p class="control is-expanded">
          <div class="field has-addons">
            <p class="control">
              <input type="text" class="input" name="tinggi_tower_pop" placeholder="Tinggi Tower">
            </p>
            <p class="control">
              <a class="button is-static">
                Meter
              </a>
            </p>
          </div>
        </p>
      </div>

      <div class="field">
        <p class="control">
          <textarea class="textarea" placeholder="Alamat"></textarea>
        </p>
      </div>

      <div class="field is-grouped">
        <p class="control is-expanded">
          <input type="text" class="input" name="latitude_pop" placeholder="Latitude">
        </p>
        <p class="control is-expanded">
          <input type="text" class="input" name="longitude_pop" placeholder="Longitude">
        </p>
      </div>

    </section>
    <footer class="modal-card-foot">
      <button class="button is-link" type="submit">Simpan</button>
      <button class="button" type="button">Cancel</button>
    </footer>
  </form>
</div>