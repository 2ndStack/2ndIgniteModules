Ext.define('Ext.app.Portal', {


    extend: 'Ext.container.Viewport',

    uses: ['Ext.app.CenterPanel','Ext.app.PieChartPortlet','Ext.app.PortalPanel','Ext.app.Dashboard','Ext.app.PortalColumn','Ext.app.DuaPortlet', 'Ext.app.SatuPortlet','Ext.app.GridPortlet','Ext.app.OmenkPortlet',  'Ext.app.ChartPortlet'],

    imgLink:'',
    logoutLink:'',
    loggedUser:'',

    initComponent: function() {
        var content = '<div class="portlet-content">' + Ext.example.shortBogusMarkup + '</div>';

        Ext.apply(this, {
            id: 'app-viewport',
            layout: {
                type: 'border',
                padding: '0 5 5 5' // pad the layout from the window edges
            },
            items: [
                {
                    id: 'app-header',
                    xtype: 'box',
                    region: 'north',
                    height: 85,
                    html :'<div align="left"><img src="' + this.imgLink + '"/>' +
                            'Euronet WorldWide Information Distribution Tool' +
                            '<div align="right" class="loginText" style="float:right;margin-top:53px;">login as ' + this.loggedUser + ' <a href="' + this.logoutLink + '">[log out]</a></div></div>'

                },
                {
                    xtype: 'container',
                    region : 'center',
                    layout : 'border',
                    items  :
                            [
                                {
                                    xtype:'toolbar',
                                    region:'north',
                                    items:[
                                        {
                                            xtype:'button',
                                            text: 'System'

                                        },
                                        {
                                            xtype:'button',
                                            text: 'Dashboard',
                                            handler : function(item) {
                                                Ext.getCmp('centerpanel').displayScreen(item.screenType);
                                            },
                                            screenType : 'dashboard'
                                        }
                                    ]

                                },
                                {
                                    id : 'centerpanel',
                                    xtype : 'centerpanel',
                                    region : 'center'
                                }
                            ]
                }
            ]
        })
                ;
        this.callParent(arguments);
    }
})
        ;
