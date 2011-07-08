// Register namespaces and their corresponding paths to Ext.Loader
Ext.Loader.setPath({
    'atm': 'app/com/artivisi/atm/monitoring'
});

// Specify a list of classes your application your application needs
Ext.require([
    'Ext.container.Viewport',
    'atm.panel.LoginPanel'
]);

// Application's initialization
Ext.onReady(function() {
    var win = Ext.create('Ext.Window', {
        id: 'loginScreen',
        layout: 'fit',
        plain: true,
        closable: false,
        items: [
            {xtype : 'atm.panel.LoginPanel'}
        ]
    });
    win.show();
});

