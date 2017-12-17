<div class="container">
  <?php if($validasi): ?>
    <?php
      if ($action == base_url('manage/router/tambah')) {
        $hostname_router = '';
        $ip_addr_router = '';
        $tipe_router = '';
        $jenis_router = '';
        $kode_pop = '';
      } else {
        $hostname_router = set_value('hostname_router');
        $ip_addr_router = set_value('ip_addr_router');
        $tipe_router = set_value('tipe_router');
        $jenis_router = set_value('jenis_router');
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
      if ($action == base_url('manage/router/ubah/' . $record->kode_router)) {
        $hostname_router = $record->hostname_router;
        $ip_addr_router = $record->ip_addr_router;
        $tipe_router = $record->tipe_router;
        $jenis_router =$record->jenis_router;
        $kode_pop = $record->kode_pop;
      } else {
        $hostname_router = '';
        $ip_addr_router = '';
        $tipe_router = '';
        $jenis_router = '';
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

  <form method="POST" autocomplete="off" action="<?php echo $action; ?>" id="post-data">
    <input type="hidden" name="kode_router" value="<?php echo $kode_router; ?>">
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
        <input type="text" class="input" name="hostname_router" placeholder="Hostname" value="<?php echo $hostname_router ?>">
      </p>

      <p class="control is-expanded">
        <label class="label">IP Address (Wajib diisi)</label>
        <input type="text" class="input" name="ip_addr_router" placeholder="IP Address" value="<?php echo $ip_addr_router ?>">
      </p>
    </div>

    <div class="field">
      <div class="control">
        <label class="label">Tipe (Wajib diisi)</label>
        <div class="select is-fullwidth">
          <select name="tipe_router">
            <option value="" selected disabled>Pilih Tipe</option>
            <option value="Cisco" <?= $tipe_router == 'Cisco' ? 'selected' : '' ?>>Cisco</option>
            <option value="Mikrotik" <?= $tipe_router == 'Mikrotik' ? 'selected' : '' ?>>Mikrotik</option>
            <option value="JunOS" <?= $tipe_router == 'JunOS' ? 'selected' : '' ?>>JunOS</option>
          </select>
        </div>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <label class="label">Jenis Kegunaan (Wajib diisi)</label>
        <div class="select is-fullwidth">
          <select name="jenis_router">
            <option value="" selected disabled>Pilih Tipe</option>
            <option value="Private" <?= $jenis_router == 'Private' ? 'selected' : '' ?>>Private</option>
            <option value="Public" <?= $jenis_router == 'Public' ? 'selected' : '' ?>>Public</option>
          </select>
        </div>
      </div>
    </div>

    <div class="field">
      <p class="control is-expanded">
        <button type="submit" class="button is-link is-fullwidth">Simpan</button>
      </p>
    </div>
  </form>
  <script type="text/javascript">
    $(document).ready(function(){

      $('#simpan').click(function(){
        $('#post-data').submit();
      });

      $('#kembali').click(function(){
        window.location = '<?php echo base_url('manage/router'); ?>';
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