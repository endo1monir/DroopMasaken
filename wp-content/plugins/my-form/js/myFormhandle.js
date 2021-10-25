function submit_my_form() {
    var fd = new FormData();
    fd.append('contactSubmit', 1);
    fd.append('Fname', $("#Fname").val());
    fd.append('Sname', $("#Sname").val());
    fd.append('email', $("#email").val());
    fd.append('message', $("#mess").val());
    js_submit(fd, myFuncCallback);
}

function myFuncCallback(data) {
    var jdata = JSON.parse(data);
    if (jdata.success == "1") {
        $('#myres').html(jdata.mess);
        $('#myres').css('background', 'green');
        $('#myres').css('color', 'white');
        $('#myres').css('padding', '10px');
       
        $("#Fname").val('');
        $("#Sname").val('');
        $("#email").val('');
        $('textarea').val('');
    }
}

function js_submit(fd, callback) {
    let submit_url = 'http://localhost/droopElmasaken/wordpress//wp-content/plugins/my-form/process/index.php';
    $.ajax({ url: submit_url, type: 'post', data: fd, contentType: false, processData: false, success: function(response) { callback(response) } });
}