setInterval(function () {time();}, 1000);
function time(){
var date = new Date();

day = date.getDate();
month = date.getMonth();
year = date.getUTCFullYear();
hours = date.getHours();
minutes = date.getMinutes();
seconds = date.getUTCSeconds();

if (day < 10) day = "0" + day;
if (month < 10) month = "0" + month;
if (hours < 10) hours = "0" + hours;
if (minutes < 10) minutes = "0" + minutes;
if (seconds < 10) seconds = "0" + seconds;

var output = day + "." + month + "." + year + "  " + hours + ":" + minutes + ":" + seconds +  " <b>Uhr</b>  ";

document.getElementById("footer-text-time").innerHTML = output;
}