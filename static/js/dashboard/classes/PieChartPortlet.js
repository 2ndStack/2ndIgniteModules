Ext.define('Ext.app.PieChartPortlet', {

    extend: 'Ext.panel.Panel',
    alias: 'widget.piechartportlet',

    requires: [
        'Ext.data.JsonStore',
        'Ext.chart.theme.Base',
        'Ext.chart.series.Series',
        'Ext.chart.series.Line',
        'Ext.chart.axis.Numeric',
        'Ext.Date'
    ],


    generateData : function(n, floor) {
        var data = [],
                p = (Math.random() * 11) + 1,
                i;

        floor = (!floor && floor !== 0) ? 20 : floor;

        for (i = 0; i < (n || 12); i++) {
            data.push({
                name: Ext.Date.monthNames[i % 12],
                data1: Math.floor(Math.max((Math.random() * 100), floor)),
                data2: Math.floor(Math.max((Math.random() * 100), floor)),
                data3: Math.floor(Math.max((Math.random() * 100), floor)),
                data4: Math.floor(Math.max((Math.random() * 100), floor)),
                data5: Math.floor(Math.max((Math.random() * 100), floor)),
                data6: Math.floor(Math.max((Math.random() * 100), floor)),
                data7: Math.floor(Math.max((Math.random() * 100), floor)),
                data8: Math.floor(Math.max((Math.random() * 100), floor)),
                data9: Math.floor(Math.max((Math.random() * 100), floor))
            });
        }
        return data;
    },

    initComponent: function() {

        var chartHeight = 220;
        var chartWidth = 510;
        var storeAtmOffline = Ext.create('Ext.data.JsonStore', {
            fields: ['name', 'value'],
            data:[
                {'name':'Online','value':24},
                {'name':'Offline','value':90}
            ]
        });

        var storeAtmWarning = Ext.create('Ext.data.JsonStore', {
            fields: ['name', 'value'],
            data:[
                {'name':'Warning','value':63},
                {'name':'Normal','value':25}
            ]
        });
        var storeAtmCashLow = Ext.create('Ext.data.JsonStore', {
            fields: ['name', 'value'],
            data:[
                {'name':'Cash Low','value':26},
                {'name':'Cash Normal','value':34}
            ]
        });
        Ext.apply(this, {
            layout: {
                type: 'table',
                columns: 1
            },
            items:[
                {
                    xtype:'panel',
                    layout:'fit',
                    title:'Atm Offline',
                    width:chartWidth,
                    height:chartHeight,
                    items: {
                        xtype: 'chart',
                        id: 'chartBosok',
                        animate: true,
                        store: storeAtmOffline,
                        shadow: true,
                        legend: {
                            position: 'right'
                        },
                        insetPadding: 15,
                        theme: 'Base:gradients',
                        series: [
                            {
                                type: 'pie',
                                field: 'value',
                                donut: false,//beri angka apabila ingin dikasih lingakaran didalam
                                tips: {
                                    trackMouse: true,
                                    width: 140,
                                    height: 28,
                                    renderer: function(storeItem, item) {
                                        //calculate percentage.
                                        var total = 0;
                                        storeAtmOffline.each(function(rec) {
                                            total += rec.get('value');
                                        });
                                        this.setTitle(storeItem.get('name') + ': ' + Math.round(storeItem.get('value') / total * 100) + '%');
                                    }
                                },
                                highlight: {
                                    segment: {
                                        margin: 20
                                    }
                                },
                                label: {
                                    field: 'name',
                                    display: 'rotate',
                                    contrast: true,
                                    font: '12px Arial'
                                },
                                renderer: function(sprite, record, attr, index, store) {
                                    var color = [ "#00FF00", "#FF0000"][index];
                                    return Ext.apply(attr, {
                                        fill: color
                                    });
                                }
                            }
                        ]
                    }
                }
                ,
                {
                    xtype:'panel',
                    layout:'fit',
                    title:'Atm Warning',
                    width:chartWidth,
                    height:chartHeight,
                    items: {
                        xtype: 'chart',
                        id: 'chartMati',
                        animate: true,
                        store: storeAtmWarning,
                        shadow: true,
                        legend: {
                            position: 'right'
                        },
                        insetPadding: 15,
                        theme: 'Base:gradients',
                        series: [
                            {
                                type: 'pie',
                                field: 'value',
                                donut: false,//beri angka apabila ingin dikasih lingakaran didalam
                                tips: {
                                    trackMouse: true,
                                    width: 140,
                                    height: 28,
                                    renderer: function(storeItem, item) {
                                        //calculate percentage.
                                        var total = 0;
                                        storeAtmWarning.each(function(rec) {
                                            total += rec.get('value');
                                        });
                                        this.setTitle(storeItem.get('name') + ': ' + Math.round(storeItem.get('value') / total * 100) + '%');
                                    }
                                },
                                highlight: {
                                    segment: {
                                        margin: 20
                                    }
                                },
                                label: {
                                    field: 'name',
                                    display: 'rotate',
                                    contrast: true,
                                    font: '12px Arial'
                                },
                                renderer: function(sprite, record, attr, index, store) {
                                    var color = [ "#FFFF00", "#00FF00"][index];
                                    return Ext.apply(attr, {
                                        fill: color
                                    });
                                }
                            }
                        ]
                    }
                },
                {
                    xtype:'panel',
                    layout:'fit',
                    title:'Atm Cash Low',
                    width:chartWidth,
                    height:chartHeight,
                    items: {
                        xtype: 'chart',
                        id: 'chartRusak',
                        animate: true,
                        store: storeAtmCashLow,
                        shadow: true,
                        legend: {
                            position: 'right'
                        },
                        insetPadding: 15,
                        theme: 'Base:gradients',
                        series: [
                            {
                                type: 'pie',
                                field: 'value',
                                donut: false,//beri angka apabila ingin dikasih lingakaran didalam
                                tips: {
                                    trackMouse: true,
                                    width: 140,
                                    height: 28,
                                    renderer: function(storeItem, item) {
                                        //calculate percentage.
                                        var total = 0;
                                        storeAtmCashLow.each(function(rec) {
                                            total += rec.get('value');
                                        });
                                        this.setTitle(storeItem.get('name') + ': ' + Math.round(storeItem.get('value') / total * 100) + '%');
                                    }
                                },
                                highlight: {
                                    segment: {
                                        margin: 20
                                    }
                                },
                                label: {
                                    field: 'name',
                                    display: 'rotate',
                                    contrast: true,
                                    font: '12px Arial'
                                },
                                renderer: function(sprite, record, attr, index, store) {
                                    var color = [ "#FFFFFF", "#00FF00"][index];
                                    return Ext.apply(attr, {
                                        fill: color
                                    });
                                }
                            }
                        ]
                    }
                }
            ]

        });

        this.callParent(arguments);
    }
})
        ;

