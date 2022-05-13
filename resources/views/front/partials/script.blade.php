<script>
    $(document).ready(function() {
        $('#btn-nav').click(function() {

            $('#nav').toggleClass('hidden');
        });


        $('.md_nav ul li').click(function(e) {
            e.preventDefault();
            var target = $(this).index();
            $('.md_nav ul li ul').eq(target).fadeToggle('hidden')
                .parent().siblings().find('ul').hide();
        });






    });
</script>