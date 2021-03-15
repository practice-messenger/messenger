var from=null, start=0, url='http://127.0.0.1:8080/users_list.php';
load();
function load() {
    $.get(url + '?start=' + start, function (result) {

        if (result.items) {
            result.items.forEach(item=>{
                start=item.id;
                $('#messages').append(renderMessage(item));
            })
        };
    });
}

function renderMessage(item){
    return `<a href="chat.php"><div class="msg"><p>${item.first_name} ${item.last_name}</p></div></a>`;
}
