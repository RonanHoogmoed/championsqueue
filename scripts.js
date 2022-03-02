$(document).ready(function() {
    // Show more games
    let i = 0;
    var testvalue = 10;

    while (i < testvalue) {
        $('#match-' + i).removeClass('match');
        i++;
    }
    $('.load-more').click(function (){
        testvalue = testvalue + 10;
        while (i < testvalue) {
            $('#match-' + i).removeClass('match');
            i++;
        }
    });
    
    // Other
    $( ".loader" ).toggle();
    AOS.init();
});