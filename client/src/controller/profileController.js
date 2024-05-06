$(document).ready(function(){
    $("#address").hide();
    $("#order").hide();
    $("#recent").hide();

    $("#profileButton").click(function(){
        $("#profile").show();
        $("#address").hide();
        $("#order").hide();
        $("#recent").hide();
    });

    $("#addressButton").click(function(){
        $("#address").show();
        $("#order").hide();
        $("#recent").hide();
        $("#profile").hide();
    });

    $("#orderButton").click(function(){
        $("#address").hide();
        $("#order").show();
        $("#recent").hide();
        $("#profile").hide();
    });

    $("#recentButton").click(function(){
        $("#address").hide();
        $("#order").hide();
        $("#recent").show();
        $("#profile").hide();
    });
});