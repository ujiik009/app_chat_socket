<!DOCTYPE html>
<html>
    <head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        #input-chat {
            position: fixed;
            bottom: 0;
            width: 98%;
            margin-top:20px;
            
        }
    </style>
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.3.js"></script>
    </head>
    <body>
        <div class="col-sm-12 frame">
            <ul></ul>
            <div>
                <div id="input-chat" class="msj-rta macro" >                        
                    <div class="text text-r" style="background:whitesmoke !important">
                        <input  class="mytext form-control" placeholder="Type a message"/>
                    </div> 
                </div>
            </div>
        </div>        
    </body>
    <script>
     var socket = io.connect('http://192.168.1.46:81');
        $(".mytext").on("keyup", function(e){
            if (e.which == 13){
               var message = $(this).val(); 
                //$('ul').append("<li>"+message+"</li>");
                $(this).val(''); 
                socket.emit('chat', message);
            }
        });

        socket.on('chat',function(data){
            $('ul').append("<li>"+data+"</li>");
        })
    </script>
</html>
