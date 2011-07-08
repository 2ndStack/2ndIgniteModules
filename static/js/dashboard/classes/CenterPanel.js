Ext.define('Ext.app.CenterPanel', {
    extend : 'Ext.tab.Panel',
    alias : 'widget.centerpanel',
    id : 'centerpanel',
    layout : {
        type : 'hbox',
        align : 'stretch'
    },
    items : [
        {
            xtype:'dashboard'
        }
    ],

    initComponents: function() {
        this.callParent(arguments);
    },


    displayScreen : function(screenType) {
        var screen = Ext.getCmp(screenType);
        if (screen) {
            this.setActiveTab(screen);
        } else {
            this.add({
                xtype : screenType,
                closable : true
            }).show();
        }
    }

});