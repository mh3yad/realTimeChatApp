$(document).ready(function(){
// alert('2')
// $(':not(.container > )').hide()
$('.container').show()
$('.after').hide()
$('.afterLogin').hide()


$('.error').hide()
$('#login').submit(function(){
    let username = $("#username").val()
    if(username == ""){
        $('.error').show()
       
    }else{  
        data = {
            'username':username
        }
        $.ajax({
            url: 'signinout.php',
            method: "POST",
            dataType: "json",
            data: data,
            accepts: "application/json; charset=utf-8",

        }).done(function () {
           
               console.log('retrieved')
               return 1;
        })
        $('.beforeLogin').hide()
        $('.before').hide()
        $('.afterLogin').show()
        $('#username_text').text("welcome "+username)
        $('.after').show()
      
        $('.error').hide()

    }
    return false
})
$('#logout').submit(function(){
    $('.after').hide()
    $('.afterLogin').hide()
    $('.before').show()
    $('.beforeLogin').show()
    return false
})

$('#sendMessage').submit(function(){
    let name = $("#username").val()
    let message = $('#msg').val()
    let date = new Date($.now());
    let time = date.getHours() + ":" + date.getMinutes() ;
    if(message == ""){
        alert("message can't be empty")
        return false
    }else{
    let data = {
        'name':name,
        'content':message,
        'time':time
    }
    $.ajax({
        url:'insertM.php',
        method:'POST',
        dataType: "json",
        data: data,
        accepts: "application/json; charset=utf-8",
    }).done(function () {
           
        console.log('retrieved')
        return 1;
    })

    $('#messages').css('color',"red")

    $('.messages').append('<li>'+
    '<b> - <span class="mUsername">'+
    name +'</span></b><span class="mBody">'+
    message +'</span><span class="mTime">'+
    time +'</span>'+
    '</li>')
    $('#sendMessage').trigger("reset");
    return false
    }
}


);

setInterval(function() {
    $.ajax({
        url:'realtime.php',
        method:'GET',
    }).done(function(data){
        $('.messages').html(data)
    })
}, 5000);

})