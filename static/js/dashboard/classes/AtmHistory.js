Ext.define('Ext.app.AtmHistory', {

    extend: 'Ext.grid.Panel',
    alias: 'widget.atmhistory',
    id:'atmhistory',
    height: 150,
    myData: [
        ['001',  'Apr 29 2011 14:36:21', 'TI', '61'],
        ['002',  'Apr 29 2011 14:36:21', 'TI', '61'],
        ['003',  'Apr 29 2011 14:36:21', 'TI', '00'],
        ['004',  'Apr 29 2011 14:36:21', 'TI', '00'],
        ['005',  'Apr 29 2011 14:36:21', 'TI', '61'],
        ['006',  'Apr 29 2011 14:36:21', 'TI', '61'],
        ['007',  'Apr 29 2011 14:36:21', 'TI', '00'],
        ['008',  'Apr 29 2011 14:36:21', 'TI', '00']

    ],

    change: function(val) {
        if (val != 00) {
            return '<b><span style="color:yellow; font-weight: bold;">' + val + '</span></b>';
        }
        return val;
    },


    initComponent: function() {

        var store = Ext.create('Ext.data.ArrayStore', {
            fields: [
                {
                    name: 'date'
                },
                {
                    name: 'time'
                },
                {
                    name: 'type'
                },
                {
                    name :'response'
                }
            ],
            data: this.myData
        });

        Ext.apply(this, {
            //height: 300,
            height: this.height,
            store: store,
            stripeRows: true,
            columnLines: true,
            columns: [
                {
                    //id       :'company',
                    text   : 'Device Id',
                    width: 50,
                    flex: 1,
                    sortable : true,
                    // renderer : this.change,
                    dataIndex: 'date'
                },
                {
                    text   : 'Date Time',
                    width    : 150,
                    sortable : true,
                    // renderer : this.change,
                    dataIndex: 'time'
                },
                {
                    text   : 'Type',
                    width    : 75,
                    sortable : true,

                    dataIndex: 'type'
                },
                {
                    text   : 'Response',
                    width    : 75,
                    sortable : true,
                    renderer : this.change,
                    dataIndex: 'response'
                }

            ]
        });

        this.callParent(arguments);
    }
});
