<div class="container">
  <?php if($validasi): ?>
    <?php
      $nama_pop = set_value('nama_pop');
      $jenis_gedung_pop = set_value('jenis_gedung_pop');
      $tinggi_tower_pop = set_value('tinggi_tower_pop');
      $alamat_pop = set_value('alamat_pop');
      $latitude_pop = set_value('latitude_pop');
      $longitude_pop = set_value('longitude_pop');
    ?>
    <?php if(validation_errors()): ?>
      <div class="notification is-warning" id="notif">
        <?php echo validation_errors(); ?>
      </div>
    <?php endif; ?>
  <?php else: ?>
    <?php
      if ($action == base_url('manage/pop/ubah/' . $record->kode_pop)) {
        $nama_pop = $record->nama_pop;
        $jenis_gedung_pop = $record->jenis_gedung_pop;
        $tinggi_tower_pop = $record->tinggi_tower_pop;
        $alamat_pop = $record->alamat_pop;
        $latitude_pop = $record->latitude_pop;
        $longitude_pop = $record->longitude_pop;
      } else {
        $nama_pop = '';
        $tinggi_tower_pop = '';
        $alamat_pop = '';
        $latitude_pop = '';
        $longitude_pop = '';
      }
      
    ?>
  <?php endif; ?>

  <?php if(isset($berhasil)): ?>
  <div class="notification is-success" id="notif">
    <?php echo $berhasil; ?>
  </div>
  <?php endif; ?>

  <?php if(isset($gagal)): ?>
  <div class="notification is-danger" id="notif">
    <?php echo $gagal; ?>
  </div>
  <?php endif; ?>

  <form class="card" method="POST" autocomplete="off" action="<?php echo $action; ?>" id="post-data">
    <input type="hidden" name="kode_pop" value="<?php echo $kode_pop; ?>">
    <header class="card-header">
      <p class="card-header-title">Data Backbone (<b><?php echo $kode_pop; ?></b>)</p>
    </header>
    <section class="card-content">
      <div class="field">
        <p class="control">
          <label class="label">Nama POP (Wajib diisi)</label>
          <input type="text" class="input" name="nama_pop" placeholder="POP" autofocus="yes" value="<?php echo $nama_pop ?>">
        </p>
      </div>

      <div class="field is-grouped">
        <div class="control is-expanded">
          <label class="label">Jenis Gedung (Wajib diisi)</label>
          <div class="select is-fullwidth">
            <select name="jenis_gedung_pop">
              <option value="" selected disabled>Jenis Gedung</option>
              <option value="Perumahan" <?= $jenis_gedung_pop == 'Perumahan' ? 'selected' : ''; ?>>Perumahan</option>
              <option value="Apartement" <?= $jenis_gedung_pop == 'Apartement' ? 'selected' : '' ?>>Apartement</option>
              <option value="Hotel" <?= $jenis_gedung_pop == 'Hotel' ? 'selected' : '' ?>>Hotel</option>
              <option value="Kantor" <?= $jenis_gedung_pop == 'Kantor' ? 'selected' : '' ?>>Kantor</option>
              <option value="Sekolah" <?= $jenis_gedung_pop == 'Sekolah' ? 'selected' : '' ?>>Sekolah</option>
              <option value="Universitas" <?= $jenis_gedung_pop == 'Universitas' ? 'selected' : '' ?>>Universitas</option>
              <option value="Lainnya" <?= $jenis_gedung_pop == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
            </select>
          </div>
        </div>
        <p class="control is-expanded">
          <div class="field has-addons">
            
            <div class="control">
              <label class="label">Tinggi Tower (Wajib diisi</label>
              <input type="text" class="input" name="tinggi_tower_pop" placeholder="Tinggi Tower" value="<?php echo $tinggi_tower_pop; ?>">
              
            </div>
            <div class="control">
              <label class="label">)</label>
              <a class="button is-static">
                Meter
              </a>
            </div>
          </div>
        </p>
      </div>

      <div class="field">
        <p class="control">
          <label class="label">Alamat POP</label>
          <textarea class="textarea" placeholder="Alamat Lengkap" name="alamat_pop"><?php echo $alamat_pop; ?></textarea>
        </p>
      </div>

      <div class="field is-grouped">
        <p class="control is-expanded">
          <label class="label">Latitude</label>
          <input type="text" class="input" name="latitude_pop" placeholder="Latitude" value="<?php echo $latitude_pop; ?>">
        </p>
        <p class="control is-expanded">
          <label class="label">Longitude</label>
          <input type="text" class="input" name="longitude_pop" placeholder="Longitude" value="<?php echo $longitude_pop; ?>">
        </p>
      </div>

    </section>
    <footer class="card-footer">
      <a class="card-footer-item" id="simpan">Simpan</a>
      <a class="card-footer-item" id="kembali">Kembali</a>
    </footer>
  </form>
  <script type="text/javascript">
    $(document).ready(function(){

      $('#simpan').click(function(){
        $('#post-data').submit();
      });

      $('#kembali').click(function(){
        window.location = '<?php echo base_url('manage/pop'); ?>';
      });

      // hide notif ketika waktu habis
      if ($('#notif').length) {
        setTimeout(function(){
          $('#notif').fadeOut();
        }, 5000);
      };


      $('.input').keypress(function (e) {
        if (e.which == 13) {
          $('#post-data').submit();
          return false;
        }
      });

      if ($('#simpankembali').data("clicked")) {
        $('#kembali').click();
      }
    });
  </script>
</div>
