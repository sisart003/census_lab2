<script src="lib/js/jquery.js"></script>
<script src="lib/js/bootstrap.js"></script>
<script src="lib/js/datatables.min.js"></script>
<script>
    $('.feat-btn').click(function() {
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });

    $('.serv-btn').click(function() {
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });

    $('nav ul li').click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });

    // Datatables
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollY": "70vh",
            "bFilter": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bInfo": false,
            "bAutoWidth": false,
            "bsort": false,
            "order": []
        });
    });
</script>
</body>

</html>