<?php
define('APP_NAME', $this->web_settings->site_name);
define('APP_FAVICON', $this->web_settings->web_favicon);
define('APP_LOGO', $this->web_settings->web_logo_1);
define('APP_LOGO_2', $this->web_settings->web_logo_1);

$sharing_img = base_url('assets/images/facebook_share_banner.png');
$sharing_wp_img = base_url('assets/images/wp_share_banner.png');

$ci = &get_instance();

$array_items = array('single_pre_url');

$this->session->unset_userdata($array_items);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php if (isset($current_page)) { echo $current_page . ' | ';} ?><?php echo $this->settings->app_name; ?></title>

  <meta name="description" content="<?=$this->web_settings->site_description ?>">
  <meta name="keywords" content="<?=$this->web_settings->site_keywords ?>">
  <meta name="theme-color" content="#ff5252">

  <link rel="canonical" href="<?=base_url()?>" />

  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/images/'.$this->web_settings->web_favicon)?>" />

  <meta property="og:type" content="article" />
  
  <meta property="og:title" content="<?=(isset($current_page)) ? $current_page.' | ' : ''?><?php echo APP_NAME; ?>" />

  <meta property="og:description" content="<?= $this->web_settings->site_description ?>" />

  <meta property="og:image" itemprop="image" content="<?=$sharing_wp_img?>" />
  <meta property="og:url" content="<?= current_url() ?>" />
  <meta property="og:image:width" content="1024" />
  <meta property="og:image:height" content="1024" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="<?= $sharing_img ?>">
  <link rel="image_src" href="<?= $sharing_wp_img ?>">

  <meta name="theme-color" content="#ff5252">

  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/font-awesome.min.css') ?>">

  <?php
  echo put_headers();
  echo put_cdn_headers();
  ?>

  <?php
  if ($this->web_settings->libraries_load_from == 'local') {
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/jquery-ui.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/bootstrap.min.css') ?>">

    <script src="<?= base_url('assets/site_assets/js/vendor/jquery-3.4.1.min.js') ?>"></script>

  <?php } else if ($this->web_settings->libraries_load_from == 'cdn') { ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
  }
  ?>

  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/meanmenu.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/default.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/style.min.css') ?>">

  <link rel="stylesheet" href="<?=base_url($this->vendor_dir.'/duDialog-master/duDialog.min.css')?>">

  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/cust_style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/site_assets/css/responsive.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert/sweetalert.css') ?>">

  <script src="<?= base_url('assets/site_assets/js/notify.min.js') ?>"></script>

  <link rel="stylesheet" href="<?=base_url($this->vendor_dir.'/myalert/css/myalert.min.css')?>">
  <link rel="stylesheet" href="<?=base_url($this->vendor_dir.'/myalert/css/myalert-theme.min.css')?>">

  <script src="<?=base_url($this->vendor_dir.'/myalert/js/myalert.min.js')?>"></script>

  <?= html_entity_decode($this->web_settings->header_code) ?>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <script type="text/javascript">
    var Settings = {
      base_url: '<?= base_url() ?>',
      currency_code: '<?= CURRENCY_CODE ?>',
      hour: '<?= $this->lang->line('hour_lbl') ?>',
      minute: '<?= $this->lang->line('minute_lbl') ?>',
      second: '<?= $this->lang->line('second_lbl') ?>',
      confirm_msg: '<?= $this->lang->line('are_you_sure_msg') ?>',
      ord_cancel_confirm: '<?= $this->lang->line('ord_cancel_confirm_lbl') ?>',
      product_cancel_confirm: '<?= $this->lang->line('product_cancel_confirm_lbl') ?>',
      err_cart_item_buy: '<?= $this->lang->line('err_cart_item_buy_lbl') ?>',
      err_shipping_address: '<?= $this->lang->line('no_shipping_address_err') ?>',
      err_something_went_wrong: '<?= $this->lang->line('something_went_wrong_err') ?>',
      please_wait: '<?= $this->lang->line('please_wait_lbl') ?>'
    }
  </script>
</head>

<body>
  <header>
</header>