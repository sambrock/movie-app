$( document ).ready(function() {
    //configure animations
    //    $count = 0;
    //    $('.poster-list>div').each(function(){
    //        $count = $count+0.08;
    //        $(this).css('animation-delay', $count+'s');
    //    });

    var source = document.getElementById('movie-poster');
    console.log(source);
    var colorThief = new ColorThief();
    //var color = colorThief.getColor($src);
    $pal = colorThief.getPalette(source, 8);
//    $('.movie-container').css('background', 'rgb('+$pal[0][0]+','+$pal[0][1]+','+$pal[0][2]+')');
//    $('.movie-title').css('color', 'rgb('+$pal[1][0]+','+$pal[1][1]+','+$pal[1][2]+')');

//    for (i = 0; i < $pal.length; i++) {
//        $('.color.'+i).css('background', 'rgb('+$pal[i][0]+','+$pal[i][1]+','+$pal[i][2]+')');
//    }

});

$('#movie-search').keyup(function() {
    //    if($(this).val().length > 1){
    //        $searchTerm = $(this).val();
    //        $(".patient").hide();
    //        $(".pagination").hide();
    //    }else{
    //        $searchTerm = "none";
    //        $(".patient").show();
    //        $(".pagination").show();
    //    }

    $searchTerm = $(this).val();

    $.ajax({
        method: 'get',
        url: 'search/'+ $searchTerm,
        dataType: "json",
        success: function(data){
            //console.log(data);
            $('.ac-results ul').empty();
            //            if($searchTerm != "none"){
            //                $("#display-count").html(data.patients.length);
            //            }else{
            //                $("#display-count").html("55");
            //            }
            //
            if(data.results != 0){
                $movies = '<ul>';
                $.each(data.results, function(index, movie) {
                    $movies += '<li data-id="'+movie.id+'">'+movie.title+'</li>';
                });
                $movies += '</ul>';
                $('.ac-results').html($movies);
            }
        }
    });
});


$(document).on('click', '.ac-results ul li', function() {
    $movie_id = $(this).attr("data-id");
    $('#movie_id').val($movie_id);
});

$('#menu-btn').on('click', function(){
    $('#nav').show(400);
    $('#nav .content').slideDown(400);
});

$('#menu-btn-active').on('click', function(){
    console.log("click");
    $('#nav').fadeOut(200);
    $('#nav .content').fadeOut(200);
});

Barba.Pjax.start();

var transitionAnimation = Barba.BaseTransition.extend({
    start: function() {

        // As soon the loading is finished and the old page is faded out, let's fade the new page
        Promise
            .all([this.newContainerLoading, this.startTransition()])
            .then(this.fadeIn.bind(this));
    },

    startTransition: function() {

        var transitionPromise = new Promise(function(resolve){

            var outTransition = new TimelineMax();

            outTransition
            //.to('.movie-title', 0.3, {y: -10, autoAlpha: 0}  )
                .to(".screen-wipe", 0.5, {x:"-100%",onComplete: function(){resolve();}})
                .to(".screen-wipe", 0.5, {x:"-200%"})
                .to(".screen-wipe", 0, {x:"300%"})
        })

        return transitionPromise;

    },

    fadeIn: function() {

        var _this = this;
        var $el = $(this.newContainer);

        TweenMax.set($(this.oldContainer), {display: "none"});
        //TweenMax.fromTo('.movie-title', 1, {y: -20, autoAlpha: 0}, {y: 0, autoAlpha: 1});
        TweenMax.fromTo(".backdrop-container", 0.5, {scaleX:1.5, scaleY:1.5}, {scaleX:1, scaleY:1})
        TweenMax.to($el, 0.1,{opacity:1, onComplete: function(){_this.done();}
                             });
    }
});


Barba.Pjax.getTransition = function() {
    return transitionAnimation;
};


//Get colours

