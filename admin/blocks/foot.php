<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>

</script?
    <!-- AdminLTE for demo purposes -->
    <
    script src = "public/dist/js/demo.js" > </script?>

    <
    script type = "text/Javascript" >
        $(document).ready(function() {
            bsCustomFileInput.init();

            $("#datatable").DataTable({
                "responsive": true,
                "autowidth": false,
            });
        });

    function imgError(image) {
        image.onerror = "";
        image.src = "../public/image/avatar.png";
        return true;
    } <
    /script
