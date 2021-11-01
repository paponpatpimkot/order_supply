<?php
    $date = date("Y-m-d");
?>
<style>
  .heading{
    font-size:1.25rem;
    text-align:center;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">เสื้อฝึกงาน</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/phug.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">เสื้อนักศึกษา</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/yaw.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">กางเกงสแลค</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/kang.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">เสื้อยืดคอกลมสีเลือดหมู</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/red.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
  </div>      
  <!-- แถวที่ 2 -->
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">เสื้อยืดคอกลมสีดำ (ลูกเสือ)</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/black.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">กางเกงกีฬา</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/pala.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">รองเท้าผ้าใบ</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/nanyang.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-nav-tabs">
        <div class="card-header card-header-info">
          <div class="heading">รองเท้าคัทชู</div>                              
        </div>
        <div class="card-body" style="display:flex;justify-content:center">          
          <img src="../assets/img/nang.png" >
        </div>
        <div class="card-footer" style="display:flex;justify-content:center">
          <div class="stats">
            <button class="btn btn-primary">ระบุขนาด</button>
          </div>
        </div>
      </div>
    </div>
  </div>      
</div>
<!-- size modal -->
<div class="modal fade" id="sizeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body">
        <div class="row">
        <form action="">
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                2S
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
          </div>
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                S
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
          </div>
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                M
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
          </div>
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                L
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
          </div>
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                XL
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
          </div>
        </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>