let bin;

$(document).ready(function() {
    $("#url").html(document.URL.substr(0,document.URL.lastIndexOf("/")+1)+"bin.php");
    load();
})

function load() {
    $.ajax({
        url: 'readbin.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            bin = data;
            $("#list").html("");
            for (let i = 0; i < bin.length; i++) {
                let header = bin[i].split("\r\n\r\n")[0];
                let body = bin[i].split("\r\n\r\n")[1];
                $("#list").append(`
                    <div class="jumbotron py-4" style="background-color: rgba(255,135,0,0.3);background-image: url('/HaeBin/img/pumpkin-512.png'); background-size:70px;">
                        <span class="text-light">
                        ${header.split("\r\n").map( x => x.replace('script','tprics') ).join("<br>")}
                        <br><br>
                        ${body.split("\r\n").map( x => x.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')).join("<br>")}
                        </span>
                    </div>
                `);
            }
        },
        error: function (data) {
            $("#sign").html("<h1>Error! report to imnotkind</h1>");
            console.log(data);
        }
    });
}

function clean() {
    $.ajax({
        url: 'readbin.php',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            console.assert(data == "cleared!");
            load();
        },
        error: function (data) {
            $("#sign").html("<h1>Error! report to imnotkind</h1>");
            console.log(data);
        }
    });
}

