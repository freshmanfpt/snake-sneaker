<footer>
</footer>
    <style type="text/css">
      .radio-group{
        position: relative;
      }
      .radio_btn{
        display: inline-block;
        width: auto;
        height: auto;
        background-color: #eee;
        border: 2px solid #ddd;
        cursor: pointer;
        margin: 2px 1px;
        text-align: center;
        padding: 5px 15px;
        border-radius: 5px;
      }
      .radio_btn.selected{
        border-color: #ff5252;
      }
    </style>

    <div id="cartModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>
    <?php
    if($this->session->flashdata('cart_msg')) {
      $message = $this->session->flashdata('cart_msg');
      unset($_SESSION['cart_msg']);
      ?>
      <script type="text/javascript">
        var _msg="<?=$message['message']?>";
        _msg=_msg.replace(/(<([^>]+)>)/ig,"");
        myAlert(_msg);
      </script>
        <?php
      }
      ?>

      <?php

      if($this->session->flashdata('response_msg')) {
        $message = $this->session->flashdata('response_msg');
        unset($_SESSION['response_msg']);
        ?>
        <script type="text/javascript">
          var _msg="<?=$message['message']?>";
          var _class='<?=($message['class']) ? $message['class'] : 'success'?>';

          if(_class=='error'){
            _class='danger';
          }
          _msg=_msg.replace(/(<([^>]+)>)/ig,"");
          myAlert(_msg,'myalert-'+_class);
        </script>
        <?php
      }
      ?>

      <?php 
      if($this->web_settings->libraries_load_from=='local'){
        ?>

        <script defer src="<?=base_url('assets/site_assets/js/bootstrap.min.js')?>"></script>

        <script type="text/javascript" src="<?=base_url('assets/site_assets/js/jquery.scrollUp.min.js')?>"></script>

        <script type="text/javascript" src="<?=base_url('assets/site_assets/js/jquery.meanmenu.min.js')?>"></script>

        <script defer type="text/javascript" src="<?=base_url('assets/site_assets/js/owl.carousel.min.js')?>"></script>

      <?php }else if($this->web_settings->libraries_load_from=='cdn'){ ?>

        <script defer type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>

        <script defer type="text/javascript" src="<?=base_url('assets/site_assets/js/jquery.meanmenu.min.js')?>"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
      <?php } ?>

      <?php
      echo put_cdn_footers();
      echo put_footers();
      ?>

      <script defer type="text/javascript" src="<?=base_url('assets/site_assets/js/jquery-ui.min.js')?>"></script>

      <script defer type="text/javascript" src="<?=base_url('assets/sweetalert/sweetalert.min.js')?>"></script>

      <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

      <script defer type="text/javascript" src="<?=base_url('assets/site_assets/js/plugins.js')?>"></script>

      <script defer type="text/javascript" src="<?=base_url('assets/site_assets/js/custom_jquery.js')?>"></script>

      <script defer src="<?=base_url($this->vendor_dir.'duDialog-master/duDialog.min.js')?>"></script>

      <script defer src="<?=base_url('assets/site_assets/js/custom.js')?>"></script>

      <?=html_entity_decode($this->web_settings->footer_code)?>

    </body>
    </html>