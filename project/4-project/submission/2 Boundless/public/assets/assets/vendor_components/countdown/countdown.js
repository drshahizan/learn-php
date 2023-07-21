//[countdown Javascript]

//Project:	Divine Art - Multipage Html Responsive Template
//Version:	1.1
//Primary use:	Divine Art - Multipage Html Responsive Template 

//add your script here

	
// countdown

(function($) {
    /**
    * Set your date here  (YEAR, MONTH (0 for January/11 for December), DAY, HOUR, MINUTE, SECOND)
    * according to the GMT+0 Timezone
    **/
    var launch = new Date(2017, 05, 14, 09, 00);
    /**
    * The script
    **/
    
    var days = $('#days');
    var hours = $('#hours');
    var minutes = $('#minutes');
    var seconds = $('#seconds');

    setDate();
    function setDate(){
        var now = new Date();
        if( launch < now ){
            days.html('<h1>0</H1><p>Day</p>');
            hours.html('<h1>0</h1><p>Hour</p>');
            minutes.html('<h1>0</h1><p>Minute</p>');
            seconds.html('<h1>0</h1><p>Second</p>');
        }
        else{
            var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
            var d = Math.floor(s/86400);
            days.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
            s -= d*86400;

            var h = Math.floor(s/3600);
            hours.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
            s -= h*3600;

            var m = Math.floor(s/60);
            minutes.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');

            s = Math.floor(s-m*60);
            seconds.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
            setTimeout(setDate, 1000);
        }
    }
})(jQuery);

// countdown

(function($) {
    /**
    * Set your date here  (YEAR, MONTH (0 for January/11 for December), DAY, HOUR, MINUTE, SECOND)
    * according to the GMT+0 Timezone
    **/
    var launch = new Date(2017, 05, 14, 09, 00);
    /**
    * The script
    **/
    
    var days_1 = $('#days_2');
    var hours_1 = $('#hours_2');
    var minutes_1 = $('#minutes_2');
    var seconds_1 = $('#seconds_2');

    setDate();
    function setDate(){
        var now = new Date();
        if( launch < now ){
            days_1.html('<h1>0</H1><p>Day</p>');
            hours_1.html('<h1>0</h1><p>Hour</p>');
            minutes_1.html('<h1>0</h1><p>Minute</p>');
            seconds_1.html('<h1>0</h1><p>Second</p>');
        }
        else{
            var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
            var d = Math.floor(s/86400);
            days_1.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
            s -= d*86400;

            var h = Math.floor(s/3600);
            hours_1.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
            s -= h*3600;

            var m = Math.floor(s/60);
            minutes_1.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');

            s = Math.floor(s-m*60);
            seconds_1.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
            setTimeout(setDate, 1000);
        }
    }
})(jQuery);


// countdown

(function($) {
    /**
    * Set your date here  (YEAR, MONTH (0 for January/11 for December), DAY, HOUR, MINUTE, SECOND)
    * according to the GMT+0 Timezone
    **/
    var launch = new Date(2017, 05, 14, 09, 00);
    /**
    * The script
    **/
    
    var days_3 = $('#days_3');
    var hours_3 = $('#hours_3');
    var minutes_3 = $('#minutes_3');
    var seconds_3 = $('#seconds_3');

    setDate();
    function setDate(){
        var now = new Date();
        if( launch < now ){
            days_3.html('<h1>0</H1><p>Day</p>');
            hours_3.html('<h1>0</h1><p>Hour</p>');
            minutes_3.html('<h1>0</h1><p>Minute</p>');
            seconds_3.html('<h1>0</h1><p>Second</p>');
        }
        else{
            var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
            var d = Math.floor(s/86400);
            days_3.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
            s -= d*86400;

            var h = Math.floor(s/3600);
            hours_3.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
            s -= h*3600;

            var m = Math.floor(s/60);
            minutes_3.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');

            s = Math.floor(s-m*60);
            seconds_3.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
            setTimeout(setDate, 1000);
        }
    }
})(jQuery);
