$(document).ready(function() {
    let i = 0;
    while (i < 10) {
        $('#match-' + i).removeClass('match');
        i++;
    }
  AOS.init();

  $( ".loader" ).toggle();
});