$( document ).ready(function() {
    function fillAllBars(){
        for(var i = 1; i <= 10; i++){
            $('.bar-skills').append("<div class='bar'></div>");
        }
    }

    function fillSkills(){
        $('.html>.bar').each(function(index, element){
            if(index < 9){
                $(element).addClass('active');
            }
        });
        $('.css>.bar').each(function(index, element){
            if(index < 9){
                $(element).addClass('active');
            }
        });
        $('.js>.bar').each(function(index, element){
            if(index < 8){
                $(element).addClass('active');
            }
        });
        $('.cs>.bar').each(function(index, element){
            if(index < 6){
                $(element).addClass('active');
            }
        });
        $('.php>.bar').each(function(index, element){
            if(index < 7){
                $(element).addClass('active');
            }
        });
        $('.sql>.bar').each(function(index, element){
            if(index < 7){
                $(element).addClass('active');
            }
        });

        $('.dutch>.bar').each(function(index, element){
            if(index < 10){
                $(element).addClass('active');
            }
        });
        $('.english>.bar').each(function(index, element){
            if(index < 8){
                $(element).addClass('active');
            }
        });
        $('.german>.bar').each(function(index, element){
            if(index < 5){
                $(element).addClass('active');
            }
        });

    }


    fillAllBars();
    fillSkills();


});
