$("#btnLogin").click(function() {
    checkLogin();
});

function checkLogin() {
    $.ajax({
        type: "post",
        url: "../controller/IndexController.php?checkLogin",
        dataType: "json",
        data: {
            Username: $("#txtUsername").val(),
            Password: $("#txtPassword").val()
        },
        success: function(data) {
            console.log(data);
        }
    });
    
}