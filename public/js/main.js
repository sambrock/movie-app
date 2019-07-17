function getPopularMovies(){
    $.ajax({
        method: 'get',
        url: 'popular',
        dataType: "json",
        success: function(data){
            console.log(data);
            if(data.results != 0){
                $movies = '<div class="poster-container-head">';
                $.each(data.results, function(index, movie) {
                    if(index < 6){
                        $movies += '<div class="poster-container"><div class="poster-img-container"><img src="https://image.tmdb.org/t/p/w500'+movie.poster_path+'" class="poster-img"></div></div>';
                    }

                });
                $movies += '</div>';
                $('.popular-films').html($movies);
            }
        }
    });
}

$( document ).ready(function() {
    getPopularMovies();
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
