<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Login Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css"  href="<?php echo base_url() . 'static/'?>resources/css/ext-all.css"/>


    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/ext-all-debug.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/dashboard/examples.js"></script>

    

    <script type="text/javascript">
        Ext.Loader.setConfig({enabled:'true'});
        Ext.Loader.setPath('Ext.app', '<?php echo base_url() . 'static/'?>js/dashboard/classes');

        Ext.require([

            'Ext.app.LoginPanel'
        ]);

        Ext.onReady(function() {
            var win = Ext.create('Ext.Window', {
                id: 'loginPanel',
                layout: 'fit',
                closable :false,
                plain: true,
                items: [
                    {xtype : 'LoginPanel'}
                ]
            });
            win.show();
        });


    </script>


</head>
<body>

</body>
</html>
