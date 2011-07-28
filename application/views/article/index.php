<script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/tiny_mce/tiny_mce.js"></script>




<script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
            {title : 'Bold text', inline : 'b'},
            {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
            {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
            {title : 'Example 1', inline : 'span', classes : 'example1'},
            {title : 'Example 2', inline : 'span', classes : 'example2'},
            {title : 'Table styles'},
            {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        // Replace values for the template plugin
//        template_replace_values : {
//            username : "Some User",
//            staffid : "991234"
//        }
    });
</script>
<div id="contentwrap">
    <div id="page-title">
        <h1>Create <span> Article</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form method="post" action="article/save">
                        <div class="blocksection">
                            <!--                            <h2>Article</h2>-->

                            <div class="blockcontent">
                                <h3>Fill Content</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_1">Title:</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_1" name="title" value=""/>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>

                                <dl class="form-select">
                                    <dt>
                                        <label for="category">Category :</label>
                                    </dt>
                                    <dd>
                                        <select name="category" id="category">
                                            <option value="java">Java</option>
                                            <option value="C/C++">C/C++</option>
                                            <option value="Ruby">Ruby</option>
                                            <option value="Go">Go</option>
                                        </select> &nbsp; <a href="#"> New Category</a>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>

                                    <dl class="form-textarea">
                                        <dt>
                                            <label for="textarea_1">Content:</label>
                                        </dt>
                                        <dd>
                                            <textarea rows="5" cols="10" id="textarea_1" name="contents"></textarea>

                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.</p>
                                        </dd>
                                    </dl>

                            </div>
                        </div>

                        <div class="form-button">
                            <input type="submit" value="Submit" name="submit" id="submit"/>
                            <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>






