// Register namespaces and their corresponding paths to Ext.Loader
Ext.Loader.setPath({
    'atm': 'app/com/artivisi/atm/monitoring'
});

// Specify a list of classes your application your application needs
Ext.require([
    'Ext.container.Viewport'
]);

// Application's initialization
Ext.onReady(function() {
	
	Ext.create('Ext.Button', {
	x: 10,
	y: 10,
    text    : 'Go To Application',
    renderTo: Ext.getBody(),
    handler : function() {
        window.location = 'ewidt.php';
    }
	}).show;
	
    Ext.create('Ext.Window', {
        title: 'Contact Person',
        width: 420,
        height: 200,
        x: 10,
        y: 40,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><table style=margin-left:10px;><tr><td width=80>Yudi Nusdal</td><td width=10>:</td><td width=100></td></tr><tr><td colspan=3>&nbsp;</td></tr><tr><td>Agus Salim</td><td>:</td><td>0812 83621500</td></tr><tr><td colspan=3>&nbsp;</td></tr><tr><td>Ikhwan</td><td>:</td><td>0819 32309419</td></tr></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'MR Transaction Info',
        width: 420,
        height: 330,
        x: 10,
        y: 250,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table width="98%" style=margin:5px;><tr style="background-color:#E6E6FA"><td colspan=3><center><b>Transaction info for today : 20 May 2011</b></center></td></tr><tr><td colspan=3>&nbsp;</td></tr><tr style="background-color:#E6E6FA"><td colspan=3><b>AutoTopup Transaction</b></td></tr><tr><td width=100>AutoTopup Registered</td><td width=10>:</td><td width=100>60</td></tr><tr><td>AutoTopup Triggered</td><td>:</td><td>57</td></tr><tr><td>AutoTopup</td><td>:</td><td>28</td></tr><tr><td colspan=3>&nbsp;</td></tr><tr style="background-color:#E6E6FA"><td colspan=3><b>MR Transaction Status</b></td></tr><tr><td width=100>Success</td><td width=10>:</td><td width=100>1018</td></tr><tr><td>Failed</td><td>:</td><td>517</td><tr><td colspan=3>&nbsp;</td></tr><tr style="background-color:#E6E6FA"><td colspan=3><b>MR Transaction Status Failed By Operator</b></td></tr><tr><td width=100>AXS</td><td width=10>:</td><td width=100>1</td></tr><tr><td>EBT</td><td>:</td><td>10</td><tr><td>EXL</td><td>:</td><td>147</td><tr><td>FLX</td><td>:</td><td>2</td><tr><td>HUT</td><td>:</td><td>7</td></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'Mobile Recharge Module',
        width: 420,
        height: 220,
        x: 450,
        y: 10,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table border=1 width="98%" style=margin:5px;><tr style="background-color:#E57171"><td width=10><center>13-May-2011 14:08:41</center></td><td width=20>&nbsp;ESI01</td><td width=100>&nbsp;ESIA Postpaid Module</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr style="background-color:#E57171"><td width=10><center>13-May-2011 14:08:41</center></td><td width=20>&nbsp;TCESI</td><td width=100>&nbsp;TCP/IP to Esia testing</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr style="background-color:#E57171"><td width=10><center>04-May-2011 09:46:31</center></td><td width=20>&nbsp;TCTLM</td><td width=100>&nbsp;TCP/IP to Telkomsel testing</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr style="background-color:#E57171"><td width=10><center>04-May-2011 09:46:42</center></td><td width=20>&nbsp;TLM01</td><td width=100>&nbsp;Telkomsel Postpaid Module</td><td width=40>&nbsp;<b>OFF</b></td></tr></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'Mobile Recharge Node',
        width: 420,
        height: 160,
        x: 450,
        y: 240,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table border=1 width="98%" style=margin:5px;><tr style="background-color:#E57171"><td width=10><center>19-May-2011 14:51:32</center></td><td width=15>&nbsp;ESI</td><td width=100>&nbsp;ESIA Testing</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr style="background-color:#E57171"><td width=10><center>04-May-2011 09:45:51</center></td><td width=15>&nbsp;TLM</td><td width=100>&nbsp;Telkomsel Postpaid</td><td width=40>&nbsp;<b>OFF</b></td></tr></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'ITM ATM Node',
        width: 420,
        height: 130,
        x: 450,
        y: 410,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table border=1 width="98%" style=margin:5px;><tr"><td width=55><center>19-May-2011 02:38:46</center></td><td width=15>&nbsp;EBB</td><td width=150>&nbsp;ID - H2H Interface with Switch</td><td width=40>&nbsp;<b>Recovery</b></td></tr></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'ITM ATM Status',
        width: 460,
        height: 270,
        x: 890,
        y: 10,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table border=1 width="98%" style=margin:5px;><tr style="background-color:#E57171"><td width=10><center>11-May-2011 16:10:51</center></td><td width=15>&nbsp;BTP0031</td><td width=100>&nbsp;RIAU-PEKANBARU</td><td width=40>&nbsp;<b>OFFLINE</b></td></tr><tr style="background-color:#E57171"><td width=10><center>10-May-2011 17:00:29</center></td><td width=15>&nbsp;BTP0032</td><td width=100>&nbsp;B.BATU BANDUNG</td><td width=40>&nbsp;<b>OFFLINE</b></td></tr><tr style="background-color:#E57171"><td width=10><center>10-May-2011 13:21:53</center></td><td width=15>&nbsp;BTP0033</td><td width=100>&nbsp;MEDAN ASIA, MEDAN</td><td width=40>&nbsp;<b>OFFLINE</b></td></tr><tr style="background-color:#FFFF00"><td width=10><center>20-May-2011 13:15:36</center></td><td width=15>&nbsp;BTP0034</td><td width=100>&nbsp;SUKABUMI, JABAR</td><td width=40>&nbsp;<b>CASH LOW</b></td></tr><tr style="background-color:#E57171"><td width=10><center>10-May-2011 13:21:53</center></td><td width=15>&nbsp;BTP0036</td><td width=100>&nbsp;CIREBON, JABAR</td><td width=40>&nbsp;<b>OFFLINE</b></td></tr><tr style="background-color:#E57171"><td width=10><center>20-May-2011 12:36:02</center></td><td width=15>&nbsp;BTP0038</td><td width=100>&nbsp;KEDIRI, JATENG</td><td width=40>&nbsp;<b>OFFLINE</b></td></tr></table>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'Mobile Recharge Module History',
        width: 460,
        height: 270,
        x: 890,
        y: 290,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false,
            html: '<br><center>data update every 10 second(s), last check : 20 May 2011 13:57:30</center><br><table border=1 width="98%" style=margin:5px;><tr style="background-color:#E6E6FA"><td width=10><center><b>DATE</b></center></td><td width=15><center><b>NAME</b></center></td><td width=100><center><b>DESCRIPTION</b></center></td><td width=40><center><b>STATUS</b></center></td></tr><tr><td width=10><center>13-May-2011 23:52:31</center></td><td width=15>&nbsp;BPR01</td><td width=100>&nbsp;Bank Pengkreditan Rakyat</td><td width=40>&nbsp;<b>Processing</b></td></tr><tr><td width=10><center>13-May-2011 23:52:31</center></td><td width=15>&nbsp;TCP11</td><td width=100>&nbsp;TCP/IP to BPR</td><td width=40>&nbsp;<b>Processing</b></td></tr><tr><td width=10><center>13-May-2011 23:50:50</center></td><td width=15>&nbsp;BPR01</td><td width=100>&nbsp;Bank Pengkreditan Rakyat</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr><td width=10><center>13-May-2011 23:50:50</center></td><td width=15>&nbsp;TCP11</td><td width=100>&nbsp;TCP/IP to BPR</td><td width=40>&nbsp;<b>OFF</b></td></tr><tr><td width=10><center>13-May-2011 14:08:41</center></td><td width=15>&nbsp;ESI01</td><td width=100>&nbsp;Esia PostPaid Module</td><td width=40>&nbsp;<b>OFF</b></td></tr></table><center>Row Count&nbsp;<select name="rowsc"><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option></select></center>'
        }
    }).show();
    
    Ext.create('Ext.Window', {
        title: 'Mobile Recharge Node History',
        width: 420,
        height: 10,
        x: 450,
        y: 550,
        plain: true,
        headerPosition: 'top',
        layout: 'fit',
        collapsible : true,
        items: {
            border: false
        }
    }).show();
    
    Ext.create('Ext.')
});

