Ext.define('Ext.app.AtmOffline', {

    extend: 'Ext.grid.Panel',
    alias: 'widget.atmoffline',
    height: 150,
    id:'atmofflinepanel',

    myData: [
        ['001',  'BCA', 'Jogja'],
        ['002',  'BCA', 'Bekasi'],
        ['003',  'BCA', 'Bandung'],
        ['004',  'BCA', 'Jogja'],
        ['005',  'BCA', 'Bekasi'],
        ['006',  'BCA', 'Bandung']
    ],

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

            height: this.height,
            store: store,
            stripeRows: true,
            columnLines: true,
            columns: [
                {

                    text   : 'Device ID',
                    renderer:this.change,
                    width: 120,
                    flex: 1,
                    sortable : true,
                    dataIndex: 'id'


                },
                {
                    text   : 'Bank',
                    width    : 75,
                    sortable : true,
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
        })
                ;

        this.callParent(arguments);
    }
});