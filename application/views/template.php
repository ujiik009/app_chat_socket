
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Whatsapp web chat template - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>my_folder/style.css" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
      <div class="side-one">
        <div class="row heading">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </div>
          </div>
          <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
          </div>
          <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="row searchBox">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
              <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row sideBar">

        <?php foreach ($user as $key => $user_item) { ?>
          <!-- content  -->
          <div class="row sideBar-body person" m_id="<?=$user_item['m_id']?>">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="<?=base_url()?>/profile/<?=$user_item["uimg"]?>" m_id="<?=$user_item['m_id']?>">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta name_user" m_id="<?=$user_item['m_id']?>"><?=$user_item["m_name"]?>
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
           <!-- content  -->
           <?php } ?>
        </div>
      </div>

      <div class="side-two">
        <div class="row newMessage-heading">
          <div class="row newMessage-main">
            <div class="col-sm-2 col-xs-2 newMessage-back">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>
            <div class="col-sm-10 col-xs-10 newMessage-title">
              New Chat
            </div>
          </div>
        </div>

        <div class="row composeBox">
          <div class="col-sm-12 composeBox-inner">
            <div class="form-group has-feedback">
              <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <!-- content -->
        <div class="row compose-sideBar">
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content -->

      </div>
    </div>

    <div class="col-sm-8 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon" >
            <img id="heading-avatar-icon" src="https://bootdey.com/img/Content/avatar/avatar6.png">
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a class="heading-name-meta" id="heading-name-meta">John Doe
          </a>
          <span class="heading-online">Online</span>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row message" id="conversation">
        <div class="row message-previous">
          <div class="col-sm-12 previous">
            <a onclick="previous(this)" id="ankitjain28" name="20">
            Show Previous Message!
            </a>
          </div>
        </div>

        <!-- // content conversation

        // content conversation -->

      </div>

      

      <div class="row reply">
        <div class="col-sm-1 col-xs-1 reply-emojis">
          <i class="fa fa-smile-o fa-2x"></i>
        </div>
        <div class="col-sm-9 col-xs-9 reply-main">
          <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="col-sm-1 col-xs-1 reply-recording">
          <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-1 col-xs-1 reply-send">
          <i class="fa fa-send fa-2x" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.socket.io/socket.io-1.3.3.js"></script>
<script type="text/javascript">
	$(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
})

// var socket = io.connect('http://192.168.100.238:81');

// socket.emit('subscribe', conversation_id);

// socket.emit('send message', {
//     room: conversation_id,
//     message: "Some message"
// });

// socket.on('conversation private post', function(data) {
//     //display data.message
// });


var template_sender =      
        '<div class="row message-body">'+
          '<div class="col-sm-12 message-main-sender">'+
                '<div class="sender">'+
                    '<div class="message-text">'+
                    ' {message}'+
                    '</div>'+
                    '<span class="message-time pull-right">'+
                        '{date}'+
                    '</span>'+
                '</div>'+
          '</div>'+
       '</div>';

var template_receiver =
       '<div class="row message-body">'+
         '<div class="col-sm-12 message-main-receiver">'+
            '<div class="receiver">'+
              '<div class="message-text">'+
              ' {message}'+
              '</div>'+
              '<span class="message-time pull-right">'+
                '{date}'+
              '</span>'+
            '</div>'+
          '</div>'+
        '</div>';      

$(".reply-send").click(function(){
    var content = template_sender.replace("{message}",$("#comment").val()).replace("{date}",new Date());
    
    $("#conversation").append(content);
});

$("#comment").keyup(function(event){
    if (event.which == 13){
        var content = template_sender.replace("{message}",$(this).val()).replace("{date}",new Date());
        $("#conversation").append(content);
        $(this).val(''); 
       
    }
});

$(".person").click(function(event) {
 
  var m_id = $(this).attr("m_id");
  var avt = $("img[m_id='"+m_id+"']").attr("src");
  var user_name = $(".name_user[m_id='"+m_id+"']").text();
  
  $("#heading-avatar-icon").attr("src",avt);
  $("#heading-name-meta").text(user_name);


});

</script>
</body>
</html>