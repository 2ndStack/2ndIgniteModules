Ext.define('Ext.app.Dashboard', {

    extend: 'Ext.app.PortalPanel',
    alias: 'widget.dashboard',
    

    getTools: function() {
        return [
            {
                xtype: 'tool',
                type: 'gear',
                handler: function(e, target, panelHeader, tool) {
                    console.log(e.button);
                    var portlet = panelHeader.ownerCt;
                    portlet.setLoading('Working...');
                    Ext.defer(function() {
                        portlet.setLoading(false);
                    }, 2000);
                }
            }
        ];
    },

    initComponent: function() {
        
        Ext.apply(this, {
            title:'Dashboard',
            id:'dashboard',
            items: [
                {
                    id: 'col-1',
                    items: [
                        {
                            //xtype:'atmoffline',
                            id: 'portlet-1',
                            title: 'Atm Offline',
                            tools: this.getTools(),
                            items: Ext.create('Ext.app.AtmOffline'),

                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        },
                        {
                            id: 'portlet-2',
                            title: 'Atm Cash Flow',
                            tools: this.getTools(),
                            items: Ext.create('Ext.app.AtmCashFlow'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }
                    ]
                },
                {
                    id: 'col-2',
                    items: [
                        {
                            id: 'portlet-3',
                            title: 'Atm Warning',
                            tools: this.getTools(),
                            //html: '<div class="portlet-content">' + Ext.example.bogusMarkup + '</div>',
                            items: Ext.create('Ext.app.AtmWarning'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        },
                        {
                            id: 'portlet-9',
                            title: 'Atm History',
                            tools: this.getTools(),
                            //html: '<div class="portlet-content">' + Ext.example.bogusMarkup + '</div>',
                            items: Ext.create('Ext.app.AtmHistory'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }

                        }

                    ]
                },


                {
                    id: 'col-3',
                    //xtype :'chart',
                    //store :store
                    items: [
                        {
                            id: 'portlet-4',
                            title: 'SLE ATM Graphics',
                            tools: this.getTools(),
                            items: Ext.create('Ext.app.PieChartPortlet'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }

                    ]
                }
            ]
        });

        this.callParent(arguments);
    },

    onPortletClose: function(portlet) {
        this.showMsg('"' + portlet.title + '" was removed');
    },

    showMsg: function(msg) {
        var el = Ext.get('app-msg'),
                msgId = Ext.id();

        this.msgId = msgId;
        el.update(msg).show();

        Ext.defer(this.clearMsg, 3000, this, [msgId]);
    },

    clearMsg: function(msgId) {
        if (msgId === this.msgId) {
            Ext.get('app-msg').hide();
        }
    }
});