Ext.define('Ext.app.OmenkPortlet', {

    extend: 'Ext.grid.Panel',
    alias: 'widget.omenkportlet',
    height: 300,
    myData: [
    ['13 May 2011',                         'BPR', 'Bank Perkreditan Rakyat',  'Proccessing',  '9/1 12:00am'],
    ['13 May 2011',                           29.01, 'TCP/IP to BPR',  'Proccessing',  '9/1 12:00am'],
    ['13 May 2011',                    83.81, 'Esia Pos Paid Modul', 'Proccessing', '9/1 12:00am'],
    ['13 May 2011',            52.55, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am'],
    ['13 May 2011',  64.13, 'Bank Perkreditan Rakyat',  'OFF',  '9/1 12:00am']
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

    initComponent: function(){

        var store = Ext.create('Ext.data.ArrayStore', {
            fields: [
            {
                name: 'company'
            },
            {
                name: 'name'
            },

            {
                name: 'change'
            },

            {
                name: 'pctChange'
            },

            {
                name: 'bajigor'
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
            columns: [{
               // id       :'company',
                text   : 'Date',
                //width: 120,
                flex: 1,
                sortable : true,
                dataIndex: 'company'
            },{
                text   : 'Name',
                width    : 75,
                sortable : true,
                renderer : this.name,
                dataIndex: 'name'
            },{
                text   : 'Description',
                width    : 75,
                sortable : true,
                renderer : this.change,
                dataIndex: 'change'
            },{
                text   : 'Status',
                width    : 75,
                sortable : true,
                renderer : this.pctChange,
                dataIndex: 'pctChange'
            },{
                text   : 'Status',
                width    : 75,
                sortable : true,
                renderer : this.pctChange,
                dataIndex: 'bajigor'
            }]
        });

        this.callParent(arguments);
    }
});
