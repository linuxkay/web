$(function(){
myTime=(new Date()).getHours();
if(myTime>=5 && myTime<10){
myBack="image/snowtrails.jpg";
}else if(myTime>=10 && myTime<17){
myBack="image/snowybirdhouse.jpg";
}else if(myTime>=17 && myTime<23){
myBack="image/snowtrails.jpg";
}else if(myTime<5 || myTime>=23){
myBack="image/snowybirdhouse.jpg";
}
document.write("<body background='"+myBack+"'>");*/
});
/*
<SCRIPT LANGUAGE="JavaScript">
function updateBackgroundPos(){
  var pos = $('#test').offset();
  $('#test').css('background-position', 
                            -pos.left + 'px' + " " + (-pos.top + 'px'));
};
updateBackgroundPos();
$(window).resize(updateBackgroundPos);
</SCRIPT>
*/
