$(function(){
$("#pass").blur(function(){
var pass = $(this).val();
/* var email = $("#email").val(); */
$.ajax({
method: "post",
url: "includes/script.php",
data: {pass:pass/* , email: email */}
}).done(function(data){
if(data=="Incorrect Pass Code. Please try again"){
$("#hapa").css({color: "red"});
}
else{
$("#hapa").css({color: "green"});
$("#votebutton").css({display: "none"});
$("#imefichwa").slideDown("slow");
}
$("#hapa").html(data);
});
});
});

