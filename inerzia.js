$(document).ready(function(){
	$(".btnav").click(function(){
		$(".ocultar").hide();
		var cs = $(this).data("val");
		$("#"+cs).fadeIn(1200);
		$("#navbar01").removeClass("show");
	});

	$(".btnav2").click(function(){
		$(".ocultar").hide();
		var cs = $(this).data("val");
		var form = $(this).data("formu");
		$("#"+cs).fadeIn(1200);
		$("#navbar01").removeClass("show");
		$("#ccont").fadeIn(1200);
		alert(form);
		$("#landing").val(form);
	});
});

function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
  $(".cardiconcx").click(function(){
		var ic = $(this).data("icon");
		var flag = $(this).data("flag");
		if(flag == 0){
			$("#btnicc" + ic).attr("src","chevron-up.png");
			$(this).data("flag",1);
		}
		else{
			$("#btnicc" + ic).attr("src","chevron-down.png");
			$(this).data("flag",0);
		}
		
	});
}