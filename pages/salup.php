<?php
    $date = date("Y-m-d");
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment_returned</i>
          </div>
          <p class="card-category">Borrowed today</p>
          <h3 class="card-title"><?php
            $sql3 = "SELECT * FROM borrow WHERE Datetime_borrow LIKE '$date%'";
            $query3 = $connect->query($sql3);
            $num3 = mysqli_num_rows($query3);
            echo $num3;
          ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">update</i>
            Last Update <?php echo date("Y:m:s H:i:s")?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment_return</i>
          </div>
          <p class="card-category">Returned today</p>
          <h3 class="card-title"><?php 
              $sql2 = "SELECT * FROM givback WHERE Datetime_return LIKE '$date%'";
              $query2 = $connect->query($sql2);
              $num2 = mysqli_num_rows($query2);
              echo $num2;
          ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">update</i>
            Last Update <?php echo date("Y:m:s H:i:s")?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <p class="card-category">All Borrowing</p>
          <h3 class="card-title"><?php 
              $sql1 = "SELECT * FROM borrow";
              $query1 = $connect->query($sql1);
              $num1 = mysqli_num_rows($query1);
              echo $num1;
          ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">update</i>
            Last Update <?php echo date("Y:m:d H:i:s")?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="material-icons">hourglass_top</i>
          </div>
          <p class="card-category">All Return</p>
          <h3 class="card-title"><?php
            $sql4 = "SELECT * FROM givback";
            $query4 = $connect->query($sql4);
            $num4 = mysqli_num_rows($query4);
            echo $num4; 
          ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">update</i>Last Update <?php echo date("Y:m:d H:i:s")?>
          </div>
        </div>
      </div>
    </div>
  </div>    

  <!-- ตารางแสดงรายการอุปกรณ์ -->
  <div class="row">                        
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header card-header-info">
          <div style="font-size:1.25rem;">รายการชุดเครื่องแบบและอุปกรณ์การเรียนของนักศึกษาระดับชั้น <?php echo ' '.$row['level'].' สาขาวิชา '.$row['major'];?></div>
        </div>
        <div class="card-body table-responsive container">
          <table class="table table-hover text-center">                                    
            <?php        
                $i=1;
                if($row['g_id']==1){               
                  $eq=$connect->query("SELECT * FROM equipment eq, eq_list1 eq1 where eq.eq_id=eq1.eq_id");
                }elseif($row['g_id']==2){
                  $eq=$connect->query("SELECT * FROM equipment eq, eq_list2 eq2 where eq.eq_id=eq2.eq_id");
                }
                while($row2=mysqli_fetch_array($eq)){ 
            ?>
            <tbody>
            <tr style="text-align:left">
                <td><?php echo $i;?></td>                        
                <td><?php echo $row2['eq_name']?></td>
                  <input type="hidden" name="eq_id[<?php echo $i?>]" value="<?php echo $row2['eq_id']?>">
                <td><?php echo $row2['qty']?></td>
                  <input type="hidden" name="qty[<?php echo $i?>]" value="<?php echo $row2['qty']?>">                 
                <td>                            
                  <select name="size[<?php echo $i?>]" class="form-control">
                      <option value="0" class="text-center">ระบุขนาด</option>
                      <option value="s" class="text-center">s</option>
                      <option value="m" class="text-center">m</option>
                      <option value="L" class="text-center">L</option>
                      <option value="xl" class="text-center">xL</option>
                  </select>
                </td>                                  
                <?php 
                  $i++;
                  } ?>
              </tr>
            </tbody>            
          </table>
        </div>
      </div>
    </div>
  </div>
  
</div>