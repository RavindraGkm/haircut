<!DOCTYPE html>
<html lang="en-us" id="lock-page">
<head>
    <meta charset="utf-8">
    <title>Monarch Saloon</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/smartadmin-production.min.css');
    echo link_tag('assets/css/demo.min.css');
    echo link_tag('assets/css/lockscreen.min.css');
    echo link_tag('assets/css/bootstrap-social.css');
    echo link_tag('assets/css/custom.css');
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body>
<div id="main" role="main" style="margin-top: -10px;">
    <form action="#" id="login-form" class="lockscreen animated flipInY smart-form client-form">
        <div class="logo">
            <h1 class="semi-bold"><img src="<?php echo base_url('assets/img/logo-o.png')?>" alt="" /> Monarch Saloon</h1>
        </div>
        <div>
            <header class="mytext"> Logout Succcessfully </header>
            <br/>
            <footer>
                <button class="btn btn-primary mysignup mytext">
                    <?php
                    echo anchor('login/login-page','Sign In');
                    ?>
                </button>
                
            </footer>
            
        </div>
        <p class="font-xs margin-top-5">
            Copyright Monarch Saloon 2014-2020.
        </p>
    </form>
</div>
<?php
echo script_tag('assets/js/jquery.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/plugin/jquery-validate/jquery.validate.min.js');
echo script_tag('assets/js/notification/SmartNotification.min.js');
echo script_tag("https://connect.facebook.net/en_US/all.js");
echo script_tag('assets/js/login/login.js');
?>
<script type="text/javascript">
    $(document).ready( function(){
        //new HSS.Login("<?php echo base_url(); ?>");
    });
</script>
</body>
</html>