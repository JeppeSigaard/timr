// @koala-append 'assets/js.cookie.js';
// @koala-append 'assets/styledselect.js';
// @koala-append 'assets/autosize.js';

// @koala-append 'components/form.js';

// @koala-append 'modules/timr.js';

$(function(){
    
    setTimeout(function(){
        
        $('body').addClass('editor-open');
        
    },1500);
    
    $('.editor-toggle').click(function(e){
        e.preventDefault();
        $('body').toggleClass('editor-open');
        
    });
    
});