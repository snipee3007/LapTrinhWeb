$(document).ready(function(){
    $("#items").hide();
    $("#rating").hide();
    $("#news").hide();

    $("#usersButton").click(function(){
        $("#users").show();
        $("#items").hide();
        $("#rating").hide();
        $("#news").hide();
    });

    $("#itemsButton").click(function(){
        $("#users").hide();
        $("#items").show();
        $("#rating").hide();
        $("#news").hide();
    });

    $("#ratingButton").click(function(){
        $("#users").hide();
        $("#items").hide();
        $("#rating").show();
        $("#news").hide();
    });

    $("#newsButton").click(function(){
        $("#users").hide();
        $("#items").hide();
        $("#rating").hide();
        $("#news").show();
    });
});