<?php
    $urls = array();
    $segments = $this->uri->segment_array();

    foreach($segments as $key=>$segment)
    {
        $urls[] = array(site_url(implode( '/',array_slice($segments,0,$key))),$segment);
    }

    if($segments[1]=='product'){

      $ci =& get_instance();  

      $cat_id=$ci->get_single_info(array('product_slug' => $segments[2]),'category_id','tbl_product');
      $sub_cat_id=$ci->get_single_info(array('product_slug' => $segments[2]),'sub_category_id','tbl_product');

      $cat_slug=$ci->get_single_info(array('id' => $cat_id),'category_slug','tbl_category');

      $sub_cat_slug=$ci->get_single_info(array('id' => $sub_cat_id),'sub_category_slug','tbl_sub_category');


      $url='<span class="breadcome-separator">></span><li>'.anchor(base_url('category/'), ucwords(strtolower('category'))).'</li><span class="breadcome-separator">></span><li>'.anchor(base_url('/category'), ucwords(strtolower($cat_slug))).'</li><span class="breadcome-separator">></span><li>'.anchor(base_url('category/'.$cat_slug.'/'.$sub_cat_slug), ucwords(strtolower($sub_cat_slug))).'</li>';

    }
?>
<div class="heading-banner-area pt-30">
</div>
