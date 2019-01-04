    <!-- ============================================================== -->
    <!-- Print -->
    <!-- ============================================================== -->
    <script src="../assets2/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
        $(document).ready(function() {
            $("#print").click(function() {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode,
                    popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
    </script>
    <!-- ============================================================== -->
    <!-- End Print -->
    <!-- ============================================================== -->