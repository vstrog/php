$("#sendMail").on("click", function(){
    let email = $("#email").val().trim();
    let name = $("#name").val().trim();
    let phone = $("#phone").val().trim();
    let message = $("#message").val().trim();

    if(email == ""){
        $("#errorMess").text("הזינו דואר אלקטרוני")
        return false;
    } else if(name == ""){
        $("#errorMess").text("הזינו שם")
        return false;
    } else if(phone == ""){
        $("#errorMess").text("הזינו מספר טלפון")
        return false;
    } else if(message.length< 5){
        $("#errorMess").text("הזינו את טקסט ההודאה יותר מ-5 תווים")
        return false;
    }

    $("#errorMess").text();

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'phone': phone, 'message': message },
        dataType: 'html',
        beforeSend: function() {
            $("#sendMail").prop("disabled", true);
        },
        success: function(data) {
            if(!data) {
                alert("אירעה טעות, ההודאה לא נשלחה");
            } else {
                $("#mailForm").trigger("reset");
            }
            $("#sendMail").prop("disabled", false);
        }
    });


});