$(document).load(function(){
    $(setInterval(function(){
        $('.messages').load('realtime.php')
    } ,5000  ))
})