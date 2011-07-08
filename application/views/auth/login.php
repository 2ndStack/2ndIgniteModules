<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Login Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <style type="text/css">
        #loading-mask {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 20000;
            background-color: white;
        }

        #loading {
            position: absolute;
            left: 50%;
            top: 50%;
            padding: 2px;
            z-index: 20001;
            height: auto;
            margin: -35px 0 0 -30px;
        }

        #loading .loading-indicator {
            background: url(<?php echo base_url() . 'static/'?>images/extanim32.gif) no-repeat;
            color: #555;
            font: bold 13px tahoma, arial, helvetica;
            padding: 8px 42px;
            margin: 0;
            text-align: center;
            height: auto;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'static/'?>resources/css/ext-all.css"/>


    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/ext-all-debug.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/dashboard/examples.js"></script>


    <script type="text/javascript">
        Ext.Loader.setConfig({enabled:'true'});
        Ext.Loader.setPath('Ext.app', '<?php echo base_url() . 'static/'?>js/dashboard/classes');

        Ext.require([
            'Ext.app.LoginPanel'
        ]);

        Ext.onReady(function() {


            var win = Ext.create('Ext.window.Window', {
                id: 'loginPanel',
                layout: 'fit',
                closable :false,
                plain: true,
                items: [
                    {
                        xtype : 'LoginPanel',
                        imgUrl:'<?php echo base_url() . 'static/'?>images/ewidt/logo-mod.png',
                        url:'<?php echo site_url("auth/login_json")?>',
                        successRedirect:'<?php echo site_url("/dashboard")?>'
                    }
                ]
            });
            win.show();

            Ext.getCmp('usernameForm').focus(true);

            setTimeout(function() {
                Ext.get('loading').remove();
                Ext.get('loading-mask').fadeOut({remove:true});
            }, 250);
        });


    </script>


</head>
<body>
<div id="loading-mask"></div>
<div id="loading">
    <div class="loading-indicator">
        Loading...
    </div>
</div>
</body>
</html>