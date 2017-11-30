<div class="container">
  <div class="field">
    <p class="control">
      <button class="button is-link modal-button" type="button" data-target="modal-pop">Buat Data</button>
      <button class="button is-link modal-button" type="button" data-target="modal-map">Map</button>
    </p>
  </div>
  
  <table class="table is-bordered is-striped is-narrow is-fullwidth">
    <thead>
      <tr>
        <th>Nama POP</th>
        <th>Alamat</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Cengkareng Office</td>
        <td>Jl. Cendrawasih Raya No. 61</td>
        <td>-6.144092</td>
        <td>106.724145</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>Cengkareng Office</td>
        <td>Jl. Cendrawasih Raya No. 61</td>
        <td>-6.144092</td>
        <td>106.724145</td>
        <td>
          <a href="#" class="button is-small is-info">Lihat Detil</a>
          <a href="#" class="button is-small is-danger">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>Cengkareng Office</td>
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
          <input type="text" class="input" name="nama_pop" placeholder="POP">
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