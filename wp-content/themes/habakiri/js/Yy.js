
$(function(){
      $('.section').hide();
      $('.search-machine-l-in ul li').on('click',function(){
        $('.section').not($('.'+$(this).attr('id'))).hide();
        $('.'+$(this).attr('id')).show();
        $('.search-machine-l-in ul li').removeClass('active');
        $(this).addClass('active');

      });
    });