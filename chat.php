<HTML lang="en">
<HEAD>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat</title>
	<link rel="stylesheet" href="style/chat.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        var from=null, start=0, url='http://127.0.0.1/chat1.php';
        $(document).ready(function (){
            from = prompt ("Please enter your name");
            load();

        $('form').submit(function (e){
            $.post(url,{
                messege: $('#message').val(),
                from: from
            });
            $('#message').val();
            return false;
        })
        });

        function load() {
            $.get(url + '?start=' +start, function (result){
                if (result.items){
                    result.items.forEach(item=>{
                        start=item.id;
                        $('#messages').append(renderMessage(item));
                    });
                    $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
                }
                load();
            });
        }

        function renderMessage(item){
            let time= new Date(item.created);
            time=`${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
            return `<div class="msg"><p>${item.form}</p>${item.messege}<span>${time}</span></div>`;
        }
    </script>
</HEAD>
<body>
	<div id="messages"></div>
    <form>
        <input type="text" id="message" autocomplete="off" autofocus placeholder="Type messege...">
        <input type="submit" value="Send">
    </form>
</body>
</HTML>