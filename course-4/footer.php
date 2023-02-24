</div>
<script>
    hangman(<?php echo $_SESSION['lives'] ?>);
</script>
<script src="/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
<script>
    $(".alphabetButton").click(function() {
        var id = $(this).attr("id");
        $.ajax({
                method: "POST",
                url: "/functions.php",
                data: {
                    guess: id
                }
            })

            .done(function(data) {
                // alert(id);
                location.reload();
            });
    });
</script>

<script>
    $(function(){
        $("#box").hide();
        $(".fa-2x").click(function(){
            $("#box").slideToggle();
        });
    });
</script>

</body>

</html>