$(function () { $('#movie-search').keyup(function() {
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
              });

$(document).on('click', '.ac-results ul li', function() {
    $movie_id = $(this).attr("data-id");
    $('#movie_id').val($movie_id);
});
