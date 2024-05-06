$(document).ready(function(){
    $("#changeEmail").click(function(){
        var emailInput = '<input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="email" name="email" placeholder="Email">';
        $("#defaultEmail").replaceWith(emailInput);
        $(this).remove();
    });
});

$(document).ready(function(){
    $("#changePhone").click(function(){
        var phoneInput = '<input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="phone" name="phone" placeholder="Số điện thoại">';
        $("#defaultPhone").replaceWith(phoneInput);
        $(this).remove();
    });
});