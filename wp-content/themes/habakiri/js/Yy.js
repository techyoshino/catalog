
$(function(){
      $('.section').hide();
      $('.search-machine-l-in ul li').on('click',function(){
        $('.section').not($('.'+$(this).attr('id'))).hide();
        $('.'+$(this).attr('id')).show();
        $('.search-machine-l-in ul li').removeClass('active');
        $(this).addClass('active');

      });
    });




$(function(){
  $('.big-title-one img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');
       var src = $('.big-title-one').children('img').attr('src').replace('kikai-on', 'kikai-end'); 
      $('.big-title-one').children('img').attr('src', src).addClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-two').children('img').attr('src').replace('shuhen-end', 'shuhen-on'); 
      $('.big-title-two').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
      $('.big-title-three').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      $(".machine-area").show();
      $('.shuhen-area').hide();
      $(".easy-search").show();
      $('.section').hide();

    }

     else if($(this).hasClass('open') == true){
      
      
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});


$(function(){
  $('.big-title-two img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');
       var src2 = $('.big-title-two').children('img').attr('src').replace('shuhen-on', 'shuhen-end'); 
      $('.big-title-two').children('img').attr('src', src2).addClass('open'); //書き換えたsrcをimgタグに設定する

      var src = $('.big-title-one').children('img').attr('src').replace('kikai-end', 'kikai-on'); 
      $('.big-title-one').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src3 = $('.big-title-three').children('img').attr('src').replace('maker-end', 'maker-on'); 
      $('.big-title-three').children('img').attr('src', src3).removeClass('open'); //書き換えたsrcをimgタグに設定する

      $(".machine-area").hide();
      $('.shuhen-area').show();
      $(".easy-search").show();
      $('.section').hide();


    }

     else if($(this).hasClass('open') == true){

     
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});


$(function(){
  $('.big-title-three img').click(function(e){

    if($(this).hasClass('open') == false){
      //$(this).attr('src', 'kikai-end.png').addClass('open');

       var src = $('.big-title-one').children('img').attr('src').replace('kikai-end', 'kikai-on'); 
      $('.big-title-one').children('img').attr('src', src).removeClass('open'); //書き換えたsrcをimgタグに設定する

      var src2 = $('.big-title-two').children('img').attr('src').replace('shuhen-end', 'shuhen-on'); 
      $('.big-title-two').children('img').attr('src', src2).removeClass('open'); //書き換えたsrcをimgタグに設定する

       var src3 = $('.big-title-three').children('img').attr('src').replace('maker-on', 'maker-end'); 
      $('.big-title-three').children('img').attr('src', src3).addClass('open'); //書き換えたsrcをimgタグに設定する

      $(".easy-search").hide();
     
    }

     else if($(this).hasClass('open') == true){


     
    }

    else{
     // $(this).attr('src', 'mon_gate_close.png').removeClass('open');
     // $('.big-title-one img').attr('src', 'mon_gate_close.png').removeClass('open');
    }
  });
});



