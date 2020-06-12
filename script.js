$(document).ready(function(){
    $("#btn-save").on("click",function(){
        var data = $("#input-form").serialize();
        console.log("ok");
        $.ajax({
            url:"save.php",
            type:"post",
            data: data,
            success: function(data){
                $("#dataInput").load("tampilData.php");
            }
        });
    });
    $.ajax({
		url: "tampilData.php",
		type: "POST",
		cache: false,
		success: function(data){
			// alert(data);
			$('#dataInput').html(data); 
		}
    });
    $.ajax({
        url: "MiuUmur.php",
        type: "GET",
        success: function (data) {
            $('#MiuUmur').html(data);
        }
    });
    $.ajax({
        url: "MiuMasaKerja.php",
        type: "GET",
        success: function (data) {
            $('#MiuMasaKerja').html(data);
        }
    });
    $.ajax({
        url: "MiuGaji.php",
        type: "GET",
        success: function (data) {
            $('#MiuGaji').html(data);
        }
    });
});