<script type="text/javascript">
    var _U = '<?php print _U ?>';

    function showWait() {
        $("#waitBar").slideDown('slow');
    }

    function hideWait() {
        $("#waitBar").slideUp('slow');
    }

    var genericFun = function() {
        l(_U + delUrl);
        $("#myModal").modal("hide");
    }

    function l(url) {
        location.href = url;
    }

    function _invokeTooltips() {
        $("[data-toggle='tooltip']").tooltip();
        $(".breakdownLabel").click(function() {
            $(".breakdowns").hide();
            $(this).parent().children("div.shadow").toggle();
            return false;
        })

    }
    function doShowWakeUpInterval(id) {

    }


    $(document).ready(function() {
        _invokeTooltips();

    });


    function showPopup(content, title) {
        $("#_genericPopup .modal-body").html(content);
        $("#_genericPopup .modal-title").html(title);
        $("#_genericPopup").modal("show");
    }

    function _error(msg) {
        try {
            $("#error_msg_content").html(msg);
            $("#error_msg_jquery").show();
            setTimeout(function() {
                $("#error_msg_jquery").hide();
            }, 2000);
        } catch (e) {

        }
    }

    function _success(msg) {
        try {
            $("#success_msg_content").html(msg);
            $("#success_msg_jquery").show();
            setTimeout(function() {
                $("#success_msg_jquery").hide();
            }, 2000);
        } catch (e) {

        }
    }



</script>



