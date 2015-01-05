
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeTaxi - Bigcommerce Import</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

      
        <!-- Bootstrap core CSS -->
        <link href="<?php print _MEDIA_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php print _MEDIA_URL ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


        <!-- Color box -->
        <link href="<?php print _MEDIA_URL ?>css/colorbox/colorbox.css" rel="stylesheet">

        <!-- Morris -->
        <link href="<?php print _MEDIA_URL ?>css/morris.css" rel="stylesheet"/>	
        
        <!-- Endless -->
        <link href="<?php print _MEDIA_URL ?>css/endless.css" rel="stylesheet">
        <link href="<?php print _MEDIA_URL ?>css/endless-skin.css" rel="stylesheet">
       <link  href="<?php print _MEDIA_URL ?>css/jquery.dataTables_themeroller.css" rel="stylesheet">


    <body class="overflow-hidden">
        <div class="">

            <?php if ($no_visible_elements) : ?>
                <?php include $modulePage; ?>
            <?php else: ?>

                <?php
                if ($_SESSION['user']['user_name'] != '') :

                    include_once('left.php');
                    include "breadcrumb.php";

                endif;
                ?>
                <div class=" col-md-12" >

                    <div class="mainContent" style="margin-left: 185px;">
                        <?php if (!(@include $modulePage)) : ?>
                            <?php include "404.php"; ?>
                        <?php endif; ?>
                    </div>
                </div>	
            <?php endif; ?>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
		
        <?php include "scripts.php"; ?>
        <?php include $jsInclude; ?>
        <a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>






        <!--Modal-->
        <div class="modal fade" id="newFolder">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Create new folder</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="folderName">Folder Name</label>
                                <input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
                        <a href="#" class="btn btn-danger btn-sm">Save changes</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- Jquery -->
        <script src="<?php print _MEDIA_URL ?>js/jquery-1.10.2.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php print _MEDIA_URL ?>bootstrap/js/bootstrap.js"></script>
        <script src="<?php print _MEDIA_URL ?>bootstrap/js/bootstrap.min.js"></script>

        <!-- Morris -->
        <script src='<?php print _MEDIA_URL ?>js/rapheal.min.js'></script>	
        <script src='<?php print _MEDIA_URL ?>js/morris.min.js'></script>	

        <!-- Colorbox -->
        <script src='<?php print _MEDIA_URL ?>js/jquery.colorbox.min.js'></script>	

        <!-- Sparkline -->
        <script src='<?php print _MEDIA_URL ?>js/jquery.sparkline.min.js'></script>

        <!-- Cookie -->
        <script src='<?php print _MEDIA_URL ?>js/jquery.cookie.min.js'></script>

        <!-- Endless -->
        <script src="<?php print _MEDIA_URL ?>js/endless/endless_dashboard.js"></script>
        <script src="<?php print _MEDIA_URL ?>js/endless/endless.js"></script>

         <?php if ($error): ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    setTimeout(function() {
                        $('#error_msg_div').fadeOut(1200);
                    }, 3500);	
                });   
            </script>
        <?php endif; ?>

        <?php if ($greetings): ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    setTimeout(function() {
                        $('#success_msg_div').fadeOut(1200);
                    }, 3500);
                });
            </script>
        <?php endif; ?>

       
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-error" style="">
                            Are you sure you want to take this action ?
                        </div>
                        </br>
                        <div style="text-align:right;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-success btn-sm" onclick="genericFun()">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>