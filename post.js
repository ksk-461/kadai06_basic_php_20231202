// 現在時刻の設定
var time = new Date();
var second = time.getSeconds();
var minute = time.getMinutes();
var hour = time.getHours();

// 現在時刻を元にした角度の設定
var secondDeg = (second * 360 / 60) + 90 ;
var minuteDeg = (minute * 360 / 60) + ((second * 360 / 60) / 60) + 90;
var hourDeg = (hour * 360 / 12) + ((minute * 360 / 60) / 12)  + ((second * 360 / 60) / 720) + 90;

// style 要素を作り、その中に keyframes アニメーションを入れる
var animation = document.createElement("style");
animation.innerHTML = "@keyframes rotation-s2 {0% {transform: rotate(" + secondDeg + "deg)}100% {transform: rotate(" + (secondDeg + 360) + "deg)}}@keyframes rotation-m2 {0% {transform: rotate(" + minuteDeg + "deg)}100% {transform: rotate(" + (minuteDeg + 360) + "deg)}}@keyframes rotation-h2 {0% {transform: rotate(" + hourDeg + "deg)}100% {transform: rotate(" + (hourDeg + 360) + "deg)}}";
document.head.appendChild(animation);

// レスポンシブな正方形を作る
document.getElementById("clock2").style.height = document.getElementById("clock2").scrollWidth + "px";

// 規定値入れておこうと思ったけど断念
// function getSunday(){
//     var today = new Date();
//     var date_diff = today.getDay();
//     today.setDate(today.getDate() - date_diff);
//     var y = today.getFullYear();
//     var m = ('00' + (today.getMonth()+1)).slice(-2);
//     var d = ('00' + today.getDate()).slice(-2);
//     return (y + '-' + m + '-' + d);
// }

// $('#sunday').val(getSunday());
// $('.st').val(getSunday()+' 21:00');