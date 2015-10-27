var timr = {
    stamp : 0,
    time : {
        s : 00,
        m : 00,
        t : 00,
        d : 00,
    },
    words : {
        s : 'sekund',
        m : 'minut',
        t : 'time',
        d : 'dag',
    }
};

timr.timerDone = function(){
    if(timr.interval){
        clearTimeout(timr.interval);
    }
} 

timr.zerofy = function(input){
	if(input < 10){return "0"+input}   // hvis input er under 10 tilføjer vi et nul 
	else{return input}                 // ellers sender vi bare input retur
	}

timr.doTick = function(){
	
    // Indstil tid //
    var sec = Math.round((timr.stamp - $.now()) / 1000);
	
    
    // Hvis tid er gået, kør timerDone() //
    if(sec <= 0){timr.timerDone();}
	
    else{
        
        // Indstil minutter, timer og dage //
        var minute = Math.floor(sec/60),
            hour = Math.floor(sec/3600),
            day = Math.floor(hour/24);

        // Opdater ord //
        if((sec - (minute*60)) === 1){  timr.words.s = 'sekund';}
        else{                           timr.words.s = 'sekunder';}

        if((minute - (hour*60)) === 1){ timr.words.m = 'minut';}
        else{                           timr.words.m = 'minutter';}

        if((hour -(day*24)) === 1){     timr.words.t = 'time';}
        else{                           timr.words.t = 'timer';}

        if(day === 1){                  timr.words.d = 'dag';}
        else{                           timr.words.d = 'dage';}

        // zerofy og træk fra //
        timr.time.d   = String(timr.zerofy(day));
        timr.time.t   = String(timr.zerofy(hour -(day*24)));
        timr.time.m   = String(timr.zerofy(minute - (hour*60)));
        timr.time.s   = String(timr.zerofy(sec - (minute*60)));
        
        timr.make();
    }
}

timr.make = function(){
    var sek = '<div><span class="time-t">'+timr.time.s+'</span><span class="time-w">'+timr.words.s+'</span></div>',
        min = '<div><span class="time-t">'+timr.time.m+'</span><span class="time-w">'+timr.words.m+'</span></div>',
        tim = '<div><span class="time-t">'+timr.time.t+'</span><span class="time-w">'+timr.words.t+'</span></div>',
        dag = '<div><span class="time-t">'+timr.time.d+'</span><span class="time-w">'+timr.words.d+'</span></div>';
    
    timr.container.empty().append(dag,tim,min,sek);
}
    
$(function(){
    
    timr.input = $('input[name=timr]');
    timr.container = $('.time-container .time-box');
    
    if(timr.input.length){
    
        timr.stamp = timr.input.val() * 1000;
        timr.input.remove();
        
        timr.doTick();
        timr.interval = setInterval(function(){
            timr.doTick();
        },1000);
    }
});
