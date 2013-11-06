// ---------- Scripts aside ----------
function start(){
$("#1a").click({
	var materia_txt = $("#1a").value();
	var dataPost = $.post("getTemas.php", {materia: materia_txt});
	alert("penis");
	dataPost.done(
            function (data){
                $( data ).appendTo($("aside"));
            });
});
	
$("#temas").hover(
	function (){
		$(".tema").css("display","visible");
    	$(".tema").animate({width: "20%"}, 700, "easeOutBounce");
	});

}

// ---------- On document ready ----------
$.(document).ready(start);