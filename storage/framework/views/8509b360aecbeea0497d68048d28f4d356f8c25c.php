<html>
    <head>
    	<title>Demo 2 : NicEdit Configuration</title>
    </head>
    <body>
        
        <div id="sample">
            <script src="<?php echo e(asset('js/nicEdit.js')); ?>" type="text/javascript"></script>
            <script type="text/javascript">
            bkLib.onDomLoaded(function() {
            	new nicEditor({iconsPath : '<?php echo e(asset("images/nicEditorIcons.gif")); ?>'}).panelInstance('area3');
            });
            </script>

            <textarea cols="150" id="area3"></textarea>
        </div>
    </body>
</html><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/test.blade.php ENDPATH**/ ?>