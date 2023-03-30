<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, maruti admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, maruti design, maruti dashboard bootstrap 4 dashboard template">
    <meta name="description"
    content="Maruti is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>ອົງການໄອຍາການປະຊາຊົນເຂດ</title>
    <link rel="stylesheet" href="admin/css/myFonts.css" />
    <link rel="canonical" href="https://www.wrappixel.com/templates/maruti-admin/" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/maruti-login.css" />
	<link rel="stylesheet" href="admin/css/myFonts.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="admin/img/bbbb.png">

    <style>
    body {
     background-color: #9933ff;
    }
</style>
	
</head>

<body>
    <div id="loginbox" style='border: 2px solid #ffffff; border-radius: 8px;'>
        <form action="check_login.php" method="POST" id="loginform" class="form-vertical">
            <div class="control-group normal_text">
                <h3><img src="admin/img/bbbb.png" width="80" height="80" alt="Logo" /></h3>
				<h2>ອົງການໄອຍາການປະຊາຊົນເຂດ</h2>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-user"></i></span><input type="text"
                            placeholder="Username" name = "user" id="user" required />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-lock"></i></span><input type="password"
                            placeholder="Password" name="password" id="password" required />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                
                <span class="pull-right"><input type="submit" name="login" class="btn btn-success" value="LOGIN"/></span>
                  <div id="show" align="center"></div>
            </div>
        </form>
        
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/maruti.login.js"></script>
</body>

</html>