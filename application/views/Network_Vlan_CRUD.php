<div class="container">
  <?php if($validasi): ?>
    <?php
      if ($action == base_url('manage/vlan/tambah')) {
        $vlan_id = '';
        $vlan_vendor = '';
        $vlan_kapasitas = '';
        $vlan_satuan = '';
        $kode_pop = '';
      } else {
        $vlan_id = set_value('vlan_id');
        $vlan_vendor = set_value('vlan_vendor');
        $vlan_kapasitas = set_value('vlan_kapasitas');
        $vlan_satuan = set_value('vlan_satuan');
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
      if ($action == base_url('manage/vlan/ubah/' . $record->kode_vlan)) {
        $vlan_id = $record->vlan_id;
        $vlan_vendor = $record->vlan_vendor;
        $vlan_kapasitas = $record->vlan_kapasitas;
        $vlan_satuan = $record->vlan_satuan;
        $kode_pop = $record->kode_pop;
      } else {
        $vlan_id = '';
        $vlan_vendor = '';
        $vlan_kapasitas = '';
        $vlan_satuan = '';
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
    <input type="hidden" name="kode_vlan" value="<?php echo $kode_vlan; ?>">
    <header class="card-header">
      <p class="card-header-title">Data Vlan (<b><?php echo $kode_vlan; ?></b>)</p>
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
          <label class="label">VLAN ID (Wajib diisi)</label>
          <input type="text" class="input" name="vlan_id" placeholder="VLAN ID" value="<?php echo $vlan_id ?>">
        </p>

        <p class="control is-expanded">
          <label class="label">VLAN Vendor (Wajib diisi)</label>
          <input type="text" class="input" name="vlan_vendor" placeholder="VLAN Vendor" value="<?php echo $vlan_vendor ?>">
        </p>
      </div>

      <div class="field has-addons">
        <div class="control">
          <label class="label">VLAN Kapasitas (Wajib diisi</label>
          <input type="text" class="input" name="vlan_kapasitas" placeholder="VLAN Kapasitas" value="<?php echo $vlan_kapasitas; ?>">
        </div>

        <div class="control">
          <label class="label">)</label>
          <div class="select is-fullwidth">
            <select name="vlan_satuan">
              <option value="" selected disabled>Pilih Satuan</option>
              <option value="Kbps" <?= $vlan_satuan == 'Kbps' ? 'selected' : ''; ?>>Kbps</option>
              <option value="Mbps" <?= $vlan_satuan == 'Mbps' ? 'selected' : '' ?>>Mbps</option>
              <option value="Gbps" <?= $vlan_satuan == 'Gbps' ? 'selected' : '' ?>>Gbps</option>
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
        window.location = '<?php echo base_url('manage/vlan'); ?>';
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