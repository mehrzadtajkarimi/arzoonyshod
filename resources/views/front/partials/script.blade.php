<script>
    $(document).ready(function() {
        $('#btn-nav').click(function() {
            $('#nav').removeClass('hidden');
        });
        $('#btn-nav-close , #background_nav').click(function() {
            $('#nav').addClass('hidden');
        });


        $('#md_nav ul li').click(function(e) {
            e.preventDefault();
            var target = $(this).index();
            $('#md_nav ul li ul').eq(target).fadeToggle('hidden')
                .parent().siblings().find('ul').hide();
        });
        $('#lg_nav ul li').click(function(e) {
            e.preventDefault();
            var target = $(this).index();
            $('#lg_nav ul li ul').eq(target).fadeToggle('hidden')
                .parent().siblings().find('ul').hide();
        });






    });
</script>