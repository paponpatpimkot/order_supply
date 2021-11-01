<?php require_once 'connect.php'; ?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">  
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Aircraft Maintenance Store
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
        <link href="assets/css/.min.css?v=2.1.1" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
    </head>
    <body onload="document.frmMain.txtUser.focus();">
        <div class="container" style="margin:100px auto;">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <div style="float:left">
                                <p class="card-title" style="font-size:1rem">ระบบสั่งซื้อเครื่องแบบนักศึกษาและอุปกรณ์การเรียน</p>
                                <p class="card-category">วิทยาลัยเทคนิคสัตหีบ</p>
                            </div>    
                            
                        </div>
                        <div class="card-body">
                            <form action="chk_login.php" method="POST" name="frmMain">
                                <div class="form-group">                                    
                                    <label class="bmd-label-floating col-md-12">
                                        <i class="material-icons">person</i>
                                        username
                                    </label>
                                    <div class="col-md-12">                                    
                                        <input type="text" class="form-control" name="username" id="txtUser" placeholder="รหัสประจำตัวผู้สมัคร">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="bmd-label-floating col-md-12">
                                        <i class="material-icons">lock</i>
                                        password
                                    </label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password" placeholder="รหัสประจำตัวประชาชน">
                                    </div>
                                </div>                                
                                <div class="form-group">                                
                                    <div class="col-md-0"></div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-info" name="login">เข้าสู่ระบบ</button>
                                    </div>
                                </div>                                 
                            </form>                            
                        </div>                                                
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
                    
    </body>
</html>