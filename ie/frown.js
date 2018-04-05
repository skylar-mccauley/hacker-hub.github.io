window.onload = function() {
    var labels = document.getElementsByTagName('p');
    for (var i = 0; i < labels.length; i++) {
        disableSelection(labels[i]);
    }
};
function disableSelection(element) {
    if (typeof element.onselectstart != 'undefined') {
        element.onselectstart = function() { return false; };
    } else if (typeof element.style.MozUserSelect != 'undefined') {
        element.style.MozUserSelect = 'none';
    } else {
        element.onmousedown = function() { return false; };
    }
}
window.onload = function() {
    var labels = document.getElementsByTagName('body');
    for (var i = 0; i < labels.length; i++) {
        disableSelection(labels[i]);
    }
};
function disableSelection(element) {
    if (typeof element.onselectstart != 'undefined') {
        element.onselectstart = function() { return false; };
    } else if (typeof element.style.MozUserSelect != 'undefined') {
        element.style.MozUserSelect = 'none';
    } else {
        element.onmousedown = function() { return false; };
    }
}
window.onload = function() {
    var labels = document.getElementsByTagName('html');
    for (var i = 0; i < labels.length; i++) {
        disableSelection(labels[i]);
    }
};
function disableSelection(element) {
    if (typeof element.onselectstart != 'undefined') {
        element.onselectstart = function() { return false; };
    } else if (typeof element.style.MozUserSelect != 'undefined') {
        element.style.MozUserSelect = 'none';
    } else {
        element.onmousedown = function() { return false; };
    }
}
window.onload = function() {
    var labels = document.getElementsByTagName('div');
    for (var i = 0; i < labels.length; i++) {
        disableSelection(labels[i]);
    }
};
function disableSelection(element) {
    if (typeof element.onselectstart != 'undefined') {
        element.onselectstart = function() { return false; };
    } else if (typeof element.style.MozUserSelect != 'undefined') {
        element.style.MozUserSelect = 'none';
    } else {
        element.onmousedown = function() { return false; };
    }
}

//var badbrowser = ['Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko','Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv 11.0) like Gecko','Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko', 'MSIE', 'MSIE 8.0']

function redirect() {
    window.location.href='../index.html'
}
var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
        console.log(':(')
    }
    else  // If another browser, return 0
    {
       redirect()
    }