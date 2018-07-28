var screenHeight = parseFloat(window.screen.availHeight)
var screenWidth = parseFloat(window.screen.availWidth)
var smallestWidth = parseFloat(696)
var otherSmallestWidth = parseFloat(600)

var initLog = {
    "screenHeight": screenHeight,
    "screenWidth": screenWidth,
    "smallestWidth": smallestWidth,
    "otherSmallestWidth": otherSmallestWidth
}

function toggleDisplay(id)
            {
                var el = document.getElementById(id);
                if(el.style.display == "none") el.style.display = "block";
                else el.style.display = "none";
            }
console.log(initLog)
if(screenHeight < screenWidth) {
    console.log('Height '+ initLog.screenHeight + ' is less than Width ' + initLog.screenWidth)
// If device is in landscape mode

if((screenWidth < smallestWidth) && (screenWidth > otherSmallestWidth)) {
    console.log('Width ' + initLog.screenWidth + ' is greater than ' + initLog.smallestWidth + ' and Width ' + initLog.screenWidth + ' is greater than the Override Width ' + initLog.otherSmallestWidth)
    $('#displayNotSupported').show()
}

}