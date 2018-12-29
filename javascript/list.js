<script type="text/javascript" src="../../lib/jPaginate/jquery-1.3.2.js"></script>
    <script src="../../lib/jPaginate/jquery.paginate.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
      $("#demo5").paginate({
        count     : {$resto},
        start     : 1,
        display     : 3,
        border          : true,
        border_color      : '#fff',
        text_color        : '#fff',
        background_color      : 'black',  
        border_hover_color    : '#ccc',
        text_hover_color      : '#000',
        background_hover_color  : '#fff', 
        images          : false,
        mouse         : 'press',
        onChange          : function(page){
                      $('._current','#paginationdemo').removeClass('_current').hide();
                      $('#p'+page).addClass('_current').show();
                      }
      });
    });
    </script>