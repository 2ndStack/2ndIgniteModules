Ext.require('Ext.chart.*');
Ext.require('Ext.layout.container.Fit');

Ext.define('Ext.app.AtmGraphics', {

    extend: 'Ext.panel.Panel',
    alias: 'widget.atmgraphics',

    width: 800,
    height: 600,
    layout :'fit',

    initComponent: function() {


        //this.callParent(arguments);


    }
});


//        var store = Ext.create('Ext.data.JsonStore', {
//            fields: ['name', 'data1', 'data2', 'data3', 'data4', 'data5'],
//            data: [
//                {
//                    'name': 'January',
//                    'data1': 10
//                },
//                {
//                    'name': 'February',
//                    'data1': 10
//                },
//                {
//                    'name': 'March',
//                    'data1': 10
//                },
//                {
//                    'name': 'April',
//                    'data1': 10
//                },
//                {
//                    'name': 'May',
//                    'data1': 20
//                }
//            ]
//        });


//        Ext.apply(this, {
//
//
//
//            items :[{
//                    //Ext.create('Ext.chart.Chart', {
//                        xtype :'chart',
//
//                        animate: true,
//                        //store: store,
//                        theme: 'Category1',
//                        legend: { // Pie Chart Legend Position
//                            position: 'right'
//                        },
//                        series: [
//                            {
//                                type: 'pie',
//                                field: 'data1',
//                                showInLegend: true,
//                                tips: {
//                                    trackMouse: true,
//                                    width: 140,
//                                    height: 28
//                                },
//                                highlight: {
//                                    segment: {
//                                        margin: 5
//                                    }
//                                }
//
//
//                            }
//                        ]
//
//            }]
//                 //   })
//        });


//            items:[
//                {
//                    xtype: 'chart',
//                    id: 'chartCmp',
//                    animate: true,
//                    shadow: true,
//
//                    store: store,
//                    theme: 'Category1',
//                    legend: { // Pie Chart Legend Position
//                        position: 'right'
//                    },
//                    series: [
//                        {
//                            type: 'pie',
//                            field: 'data1',
//                            showInLegend: true,
//                            tips: {
//                                trackMouse: true,
//                                width: 140,
//                                height: 28
//                            },
//                            highlight: {
//                                segment: {
//                                    margin: 5
//                                }
//                            }
//
//
//                        }
//                    ]
//
//                }
//            ]


// });


