$(document).ready(function(){

    /*  Testimonials Slider  */
	$('#tslider').carouFredSel({
            circular : true,
            infinite: false,
            responsive : true,
            scroll : {
                items : 1,
                fx : "fade"
            },
            pagination: {
				container:	"#t_navigation",
				anchorBuilder:	function(nr){
					return '<a href="#'+nr+'"></a>';
				}
			}
    });


    /*  hide-show mobile menu  */
    $("#menu_icon").click(function(){
        $("#nav_menu").toggleClass("show_menu");
        return false;
    });
	
	$('#nav_menu a:first').bind( "mouseenter mouseleave", function() {
		$('header').toggleClass( "entered" );
	});
	/*  console log #id */
	var fx = {
	'initModal':function(){
		if($('.modal-window').length == 0){
			$('<div>').attr('id', 'jquery-overlay').css({'background':'#000', 'opacity':'0.7'}).fadeIn(200).appendTo('body');
			return $('<div>').addClass('modal-window').appendTo('body')
			 
				   
		}else{
			return $('.modal-window');
		}
	}
			
	}
	
	$('.tovar_a').bind("click", function(event){
		event.preventDefault();
		var data = $(this).attr("data");
		modal = fx.initModal();
		$.ajax({
			type:'GET',
			url: 'ajax',
			data: 'id='+data,
			success:function(data){
				modal.append(data);
			},
			error:function(err){
				modal.append(err);
			}
			});
			
		
		$('<a>').attr('href','#').addClass('modal-close-btn').html('&times').click(function(event2){
			event2.preventDefault();
			$('.modal-window').remove();
			$('#jquery-overlay').fadeOut(200, function(){
				$(this).remove();
			});
		}).appendTo(modal);
		
		$('#jquery-overlay').click(function(){
		$('.modal-window').remove();
		$('#jquery-overlay').fadeOut(200, function(){
				$(this).remove();
			});
		});
	});
	
});



