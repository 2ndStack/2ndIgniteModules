Ext.define('Ext.app.AtmCashFlow', {

    extend: 'Ext.grid.Panel',
    alias: 'widget.atmcashflow',
    height: 150,
    id:'atmcashflow',
    myData: [
        ['001',  'BCA', 'Jogja'],
        ['002',  'BCA', 'Bekasi'],
        ['003',  'BCA', 'Bandung'],
        ['004',  'BCA', 'Jogja'],
        ['005',  'BCA', 'Bekasi'],
        ['006',  'BCA', 'Bandung']


    ],

    /**
     * Custom function used for column renderer
     * @param {Object} val
     */
    change: function(val) {
        if (val > 0) {
            return '<span style="color:green;">' + val + '</span>';
        } else if (val < 0) {
            return '<span style="color:red;">' + val + '</span>';
        }
        return val;
    },

    /**
     * Custom function used for column renderer
     * @param {Object} val
     */
    pctChange: function(val) {
        if (val > 0) {
            return '<span style="color:green;">' + val + '%</span>';
        } else if (val < 0) {
            return '<span style="color:red;">' + val + '%</span>';
        }
        return val;
    },

    initComponent: function() {

        var store = Ext.create('Ext.data.ArrayStore', {
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'bank'
                },
                {
                    name: 'lokasi'
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
                    text   : 'Device ID',
                    width: 120,
                    flex: 1,
                    sortable : true,
                    dataIndex: 'id'
                },
                {
                    text   : 'Bank',
                    width    : 75,
                    sortable : true,
                    renderer : this.name,
                    dataIndex: 'bank'
                },
                {
                    text   : 'Lokasi',
                    width    : 75,
                    sortable : true,
                    renderer : this.change,
                    dataIndex: 'lokasi'
                }

            ]
        });

        this.callParent(arguments);
    }
});
