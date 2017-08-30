/**
 * Created by carlos on 27/07/17.
 */
$('.toggle').on('click', function() {
    $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
    $('.container').stop().removeClass('active');
});
