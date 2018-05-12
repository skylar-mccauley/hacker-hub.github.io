//var badbrowser = ['Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko','Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv 11.0) like Gecko','Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko', 'MSIE', 'MSIE 8.0']

function redirect() {
    window.location.replace='https://hacker-hub.github.io/ie'
}
var ifIE = null
var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
        ifIE = true;
         
    }
    else  // If another browser, return 0
    {
       console.log(':)')
       ifIE = false;
        
    }

  

