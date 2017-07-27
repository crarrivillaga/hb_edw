$(document).ready(function(){

    $('.result-y').hide();
    $('.result-n').hide();

    $('.yes').on('click', function(){
        var yes = true;
        if (yes) {
            alert ('Sigue bajando :D');
            yes = false;
        }
        $('.result-n').hide();
        $('.result-y').toggle('medium');        
    });

    $('.no').on('click', function(){
        var no = true;
        if (no) {
            alert ('Porque eres así? :(');
            no = false;
        }
        $('.result-y').hide();
        $('.result-n').toggle('medium');
    });

});