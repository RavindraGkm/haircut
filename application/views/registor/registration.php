<!DOCTYPE html>
<html lang="en-us" id="lock-page">
<head>
    <meta charset="utf-8">
    <title> Monarch Saloon</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/smartadmin-production.min.css');
    echo link_tag('assets/css/demo.min.css');
    echo link_tag('assets/css/datepicker.css');
    echo link_tag('assets/css/datepicker.css');
    echo link_tag('assets/css/lockscreen.min.css');
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
            <header> Sign Up </header>
            <fieldset>
                <section>
                    <label class="label">Name</label>
                    <label class="input"><i class="icon-append fa fa-user"></i>
                        <input type="text" name="name" id="name" />
                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter name</b></label>
                </section>
                <section>
                    <label class="label">Date of Birth</label>
                    <label class="input"> <i class="icon-append fa fa-calendar"></i>
                        <input class="birth_date form-control" name="birth_date" id="birth_date" type="text" autocomplete="off">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-calendar txt-color-teal"></i> Enter your Date of Birth</b> </label>
                </section>
                <section>
                    <label class="label">Address</label>
                    <label class="input"> <i class="icon-append fa fa-map-marker"></i>
                        <input type="texts" name="address" id="address">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-map-marker txt-color-teal"></i> Enter your Address</b> </label>
                </section>
                <section>
                    <label class="label">Mobile</label>
                    <label class="input"> <i class="icon-append fa fa-mobile"></i>
                        <input type="text" name="mobile" id="mobile">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-mobile txt-color-teal"></i> Enter your Mobile</b> </label>
                </section>
                <section>
                    <label class="label">Email</label>
                    <label class="input"><i class="icon-append fa fa-user"></i>
                        <input type="email" name="email" id="email" />
                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address</b></label>
                </section>
                <section>
                    <label class="label">Password</label>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password" id="password">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                </section>
            </fieldset>
            <footer>
                <button type='button' class="btn btn-primary mysignup pull-left">Sign up</button>
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
echo script_tag('assets/js/bootstrap-datepicker.js');
echo script_tag('assets/js/register/register.js?v='.time());
?>
<script type="text/javascript">
    $(document).ready( function(){
        new CKE.Register("<?php echo base_url(); ?>");
    });
</script>
</body>
</html>