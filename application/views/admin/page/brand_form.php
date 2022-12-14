<?php
  define('IMG_PATH', base_url().'assets/images/brand/');
  $redirect=$_GET['redirect'].(isset($_GET['page']) ? '&page='.$_GET['page'] : '');
?>
<div class="row card_item_block" style="padding-left: 30px;padding-right: 30px">
  <div class="col-md-12">
    <?php 
      if(isset($_GET['redirect'])){
        echo '<a href="'.$redirect.'"><h4 class="pull-left btn_back" style=""><i class="fa fa-arrow-left"></i> Back</h4></a>';
      }
      else{
        echo '<a href="'.base_url('admin/brand').'"><h4 class="pull-left btn_back" style=""><i class="fa fa-arrow-left"></i> Back</h4></a>'; 
      }
    ?>
    <div class="card">
      <div class="page_title_block">
        <div class="col-md-5 col-xs-12">
          <div class="page_title"><?=$page_title?></div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="card-body mrg_bottom"> 
        <form action="<?php if(!isset($brand)){ echo site_url('admin/brand/addForm').'?redirect='.$redirect;}else{  echo site_url('admin/brand/editForm/'.$brand[0]->id).'?redirect='.$redirect;} ?>" method="post" id="categoryForm" class="form form-horizontal" enctype="multipart/form-data">
          <div class="section">
            <div class="section-body">

              <div class="form-group">
                <label class="col-md-3 control-label"><?=$this->lang->line('title_lbl')?> :-
                </label>
                <div class="col-md-6">
                  <input type="text" placeholder="<?=$this->lang->line('title_place_lbl')?>" id="title" name="title" class="form-control" value="<?php if(isset($brand)){ echo $brand[0]->brand_name;} ?>">
                </div>
              </div>

              <div class="form-group" style="display:none">
                <?php 
                  if(isset($brand)){
                    $cat_id=explode(',', $brand[0]->category_id);
                  }
                ?>
                <label class="col-md-3 control-label"><?=$this->lang->line('select_cats_lbl')?> :-</label>
                <div class="col-md-6">
                  <select name="category_id[]" class="select2">
                      <?php 
                          foreach ($category_list as $key => $value)
                          {
                            ?>
                            <option selected value="<?=$value->id?>" <?php if(isset($brand) && in_array($value->id,$cat_id)){ echo 'selected'; } ?>><?=$value->category_name?></option>
                            <?php
                          }
                      ?>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                  <label class="col-md-3 control-label"><?=$this->lang->line('select_image_lbl')?> :-
                  </label>
                  <div class="col-md-6">
                    <div class="fileupload_block">
                      <input type="file" name="file_name" value="fileupload" id="fileupload" accept=".jpg, .png, jpeg, .PNG, .JPG, .JPEG">
                      
                      <div class="fileupload_img"><img type="image" src="<?php 
                        if(!isset($brand)){ echo base_url('assets/images/no-image-1.jpg'); }else{ if($brand[0]->brand_image!=''){ echo IMG_PATH.$brand[0]->brand_image;}else{ echo base_url('assets/images/no-image-1.jpg'); } } 
                      ?>" alt="image" style="width: 150px;height: 90px" /></div>
                         
                    </div>
                  </div>
                </div>
              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button type="submit" name="btn_submit" class="btn btn-primary"><?=$this->lang->line('save_btn')?></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $("input[name='file_name']").next(".fileupload_img").find("img").attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("input[name='file_name']").change(function() { 
    readURL(this);
  });

</script> 