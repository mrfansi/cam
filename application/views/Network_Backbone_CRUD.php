<div class="container">
  <?php if($validasi): ?>
    <?php if(validation_errors()): ?>
      <div class="notification is-warning" id="notif">
        <?php echo validation_errors(); ?>
      </div>
    <?php
      $nama_link         = set_value('nama_link');
      $kapasitas_link    = set_value('kapasitas_link');
      $ip_addr_link       = set_value('ip_addr_link');
      $product_link      = set_value('product_link');
      $txfreq_link     = set_value('txfreq_link');
      $rxfreq_link     = set_value('rxfreq_link');
      $signal_link     = set_value('signal_link');
      $ssid_link       = set_value('ssid_link');
      $mse_link        = set_value('mse_link');
      $mrmc_link       = set_value('mrmc_link');
      $linkid_link     = set_value('linkid_link');
      $range_link      = set_value('range_link');
      $txrange_link    = set_value('txrange_link');
      $rxrange_link    = set_value('rxrange_link');
    ?>
    <?php else: ?>
    <?php
      $nama_link         = '';
      $kapasitas_link    = '';
      $ip_addr_link      = '';
      $product_link      = '';
      $txfreq_link     = '';
      $rxfreq_link     = '';
      $signal_link     = '';
      $ssid_link       = '';
      $mse_link        = '';
      $mrmc_link       = '';
      $linkid_link     = '';
      $range_link      = '';
      $txrange_link    = '';
      $rxrange_link    = '';
    ?>
    <?php endif; ?>
  <?php else: ?>
    <?php
      if ($action == base_url('manage/backbone/ubah/' . $record->kode_link)) {
        $nama_link         = $record->nama_link;
        $kapasitas_link    = $record->kapasitas_link;
        $ip_addr_link      = $record->ip_addr_link;
        $product_link      = $record->product_link;
        $txfreq_link     = $record->txfreq_link;
        $rxfreq_link     = $record->rxfreq_link;
        $signal_link     = $record->signal_link;
        $ssid_link       = $record->detail->ssid_link;
        $mse_link        = $record->detail->mse_link;
        $mrmc_link       = $record->detail->mrmc_link;
        $linkid_link     = $record->detail->linkid_link;
        $range_link      = $record->detail->range_link;
        $txrange_link    = $record->detail->txrange_link;
        $rxrange_link    = $record->detail->rxrange_link;
      } elseif ($action == base_url('manage/backbone/tambah')) {
        $nama_link         = '';
        $kapasitas_link    = '';
        $ip_addr_link      = '';
        $product_link      = '';
        $txfreq_link     = '';
        $rxfreq_link     = '';
        $signal_link     = '';
        $ssid_link       = '';
        $mse_link        = '';
        $mrmc_link       = '';
        $linkid_link     = '';
        $range_link      = '';
        $txrange_link    = '';
        $rxrange_link    = '';
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
    <input type="hidden" name="kode_link" value="<?php echo $kode_link; ?>">
    <header class="card-header">
      <p class="card-header-title">Data Link (<b><?php echo $kode_link; ?></b>)</p>
    </header>
    <section class="card-content">
      <div class="field is-grouped">
        <div class="control is-expanded">
          <label class="label">Nama Link (Wajib diisi)</label>
          <input type="text" class="input" name="nama_link" placeholder="Link" autofocus="yes" value="<?php echo $nama_link ?>">
        </div>

        <div class="control is-expanded">
          <label class="label">IP Address (Wajib diisi)</label>
          <input type="text" class="input" name="ip_addr_link" placeholder="IP Address" autofocus="yes" value="<?php echo $ip_addr_link ?>">
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control is-expanded">
          <div class="field has-addons">
            <div class="control">
              <label class="label">Kapasitas (Wajib diisi)</label>
              <input class="input" type="text" name="kapasitas_link" placeholder="Kapasitas" value="<?php echo $kapasitas_link ;?>">
            </div>

            <div class="control">
              <label class="label">#</label>
              <a class="button is-static">
                Mbps
              </a>
            </div>
          </div>
        </div>

        <div class="control is-expanded">
          <label class="label">Hardware (Wajib diisi)</label>
          <div class="select is-fullwidth">
            <select name="product_link">
              <option value="" selected disabled>Pilih Hardware</option>
              <option value="Huawei" <?= $product_link == 'Huawei' ? 'selected' : '' ?>>Huawei</option>
              <option value="Ceragon" <?= $product_link == 'Ceragon' ? 'selected' : '' ?>>Ceragon</option>
              <option value="ZTE" <?= $product_link == 'ZTE' ? 'selected' : '' ?>>ZTE</option>
              <option value="Ubiquity" <?= $product_link == 'Ubiquity' ? 'selected' : '' ?>>Ubiquity</option>
              <option value="Mikrotik" <?= $product_link == 'Mikrotik' ? 'selected' : '' ?>>Mikrotik</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control is-expanded">
          <label class="label">TX Freq (Wajib diisi)</label>
          <input class="input" type="text" name="txfreq_link" placeholder="TX Freq" value="<?php echo $txfreq_link; ?>">
        </div>

        <div class="control is-expanded">
          <label class="label">RX Freq (Wajib diisi)</label>
          <input class="input" type="text" name="rxfreq_link" placeholder="RX Freq" value="<?php echo $rxfreq_link; ?>">
        </div>

        <div class="control is-expanded">
          <label class="label">Signal (Wajib diisi)</label>
          <input class="input" type="text" name="signal_link" placeholder="Signal" value="<?php echo $signal_link ;?>">
        </div>

        <div class="control is-expanded">
          <label class="label">SSID</label>
          <input class="input" type="text" name="ssid_link" placeholder="SSID" value="<?php echo $ssid_link ;?>">
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control is-expanded">
          <label class="label">MSE Link</label>
          <input class="input" type="text" name="mse_link" placeholder="MSE Link" value="<?php echo $mse_link ;?>">
        </div>
        <div class="control is-expanded">
          <div class="field has-addons">
            <div class="control">
              <label class="label">MRMC</label>
              <input class="input" type="text" name="mrmc_link" placeholder="MRMC" value="<?php echo $mrmc_link ?>">
            </div>
            <div class="control">
              <label class="label">#</label>
              <a class="button is-static">
                Mbps
              </a>
            </div>
          </div>
        </div>
        
        <div class="control is-expanded">
          <label class="label">Link ID</label>
          <input class="input" type="text" name="linkid_link" placeholder="Link ID" value="<?php echo $linkid_link ?>">
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control is-expanded">
          <div class="field has-addons">
            <div class="control">
              <label class="label">Jarak</label>
              <input class="input" type="text" name="range_link" placeholder="Jarak" value="<?php echo $range_link ?>">
            </div>

            <div class="control">
              <label class="label">#</label>
              <a class="button is-static">
                Km
              </a>
            </div>
          </div>
        </div>
        <div class="control is-expanded">
          <label class="label">TX Range Freq</label>
          <input class="input" type="text" name="txrange_link" placeholder="TX Range Freq" value="<?php echo $txrange_link ?>">
        </div>
        <div class="control is-expanded">
          <label class="label">RX Range Freq</label>
          <input class="input" type="text" name="rxrange_link" placeholder="RX Range Freq" value="<?php echo $rxrange_link ?>">
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
        window.location = '<?php echo base_url('manage/backbone'); ?>';
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
