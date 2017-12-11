<div class="container">
  <?php if($validasi): ?>
    <?php
      if ($action == base_url('manage/switch/tambah')) {
        $hostname_switch = '';
        $ip_addr_switch = '';
        $tipe_switch = '';
        $jenis_switch = '';
        $kode_pop = '';
      } else {
        $hostname_switch = set_value('hostname_switch');
        $ip_addr_switch = set_value('ip_addr_switch');
        $tipe_switch = set_value('tipe_switch');
        $jenis_switch = set_value('jenis_switch');
        $kode_pop = set_value('kode_pop');
      }
    ?>
    <?php if(validation_errors()): ?>
      <div class="notification is-warning" id="notif">
        <?php echo validation_errors(); ?>
      </div>
    <?php endif; ?>
  <?php else: ?>
    <?php
      if ($action == base_url('manage/switch/ubah/' . $record->kode_switch)) {
        $hostname_switch = $record->hostname_switch;
        $ip_addr_switch = $record->ip_addr_switch;
        $tipe_switch = $record->tipe_switch;
        $jenis_switch =$record->jenis_switch;
        $kode_pop = $record->kode_pop;
      } else {
        $hostname_switch = '';
        $ip_addr_switch = '';
        $tipe_switch = '';
        $jenis_switch = '';
        $kode_pop = '';
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
    <input type="hidden" name="kode_switch" value="<?php echo $kode_switch; ?>">
    <header class="card-header">
      <p class="card-header-title">Data Switch (<b><?php echo $kode_switch; ?></b>)</p>
    </header>
    <section class="card-content">
      <div class="field">
        <label class="label">POP</label>
          <div class="select is-fullwidth">
            <select name="kode_pop" autofocus="yes">
              <option value="" selected disabled>Pilih POP</option>
              <?php foreach ($pops as $pop): ?>
              <option value="<?php echo $pop->kode_pop; ?>" <?= $kode_pop == $pop->kode_pop ? 'selected' : ''; ?>><?php echo $pop->nama_pop; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
      </div>

      <div class="field is-grouped">
        <p class="control is-expanded">
          <label class="label">Hostname (Wajib diisi)</label>
          <input type="text" class="input" name="hostname_switch" placeholder="Hostname" value="<?php echo $hostname_switch ?>">
        </p>

        <p class="control is-expanded">
          <label class="label">IP Address (Wajib diisi)</label>
          <input type="text" class="input" name="ip_addr_switch" placeholder="IP Address" value="<?php echo $ip_addr_switch ?>">
        </p>
      </div>

      <div class="field">
        <div class="control">
          <label class="label">Tipe (Wajib diisi</label>
          <div class="select is-fullwidth">
            <select name="tipe_switch">
              <option value="" selected disabled>Pilih Tipe</option>
              <option value="Cisco" <?= $tipe_switch == 'Cisco' ? 'selected' : '' ?>>Cisco</option>
              <option value="Mikrotik" <?= $tipe_switch == 'Mikrotik' ? 'selected' : '' ?>>Mikrotik</option>
              <option value="HP" <?= $tipe_switch == 'HP' ? 'selected' : '' ?>>HP</option>
              <option value="TP-Link" <?= $tipe_switch == 'TP-Link' ? 'selected' : '' ?>>TP-Link</option>
              <option value="Juniper" <?= $tipe_switch == 'Juniper' ? 'selected' : '' ?>>Juniper</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <label class="label">Jenis Kegunaan (Wajib diisi</label>
          <div class="select is-fullwidth">
            <select name="jenis_switch">
              <option value="" selected disabled>Pilih Tipe</option>
              <option value="Backbone" <?= $jenis_switch == 'Backbone' ? 'selected' : '' ?>>Backbone</option>
              <option value="Distribusi" <?= $jenis_switch == 'Distribusi' ? 'selected' : '' ?>>Distribusi</option>
            </select>
          </div>
        </div>
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
        window.location = '<?php echo base_url('manage/switch'); ?>';
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

      $('select').keypress(function (e) {
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