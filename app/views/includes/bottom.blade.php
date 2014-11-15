</div>


        {{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
        {{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
        {{HTML::script('js/bootstrap-select.js')}}

        {{HTML::script('js/scripts.js')}}
        {{HTML::script('js/jquery.lockfixed.js')}}
<!-- <script>
(function($) {
	$.lockfixed("#sidebar ",{offset: {top: 100, bottom: 100}});

})(jQuery);
</script>-->

 <script>
 $( document ).ready(function() {
     $('#formen').on('change', function(e){
         $(this).closest('form').submit();
     });
 });
 </script>
</body>
</html>