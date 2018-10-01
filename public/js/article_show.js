$(document).ready(function(){
    var nclick = 0;

    $('.js-like-article').on('click', function(e){
        e.preventDefault();

        var $link = $(e.currentTarget);
        // $('.js-like-article').html(function(){
        //     $link.toggleClass('fa-heart-o').toggleClass('fa-heart');
        // });

        nclick += 1;
        $('.js-like-article-count').html(nclick + ' ').append($link.toggleClass('fa-heart-o').toggleClass('fa-heart'));

    });
});