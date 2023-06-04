function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  $(".input_text").focus(function(){
    $(this).prev('.fa').addclass('glowIcon')
})
$(".input_text").focusout(function(){
    $(this).prev('.fa').removeclass('glowIcon')
})

function submitForm(event) {
	event.preventDefault(); // Prevent form from refreshing the page

	// Get input values
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;

	// Create mailto link
	var mailtoLink = "https://www.facebook.com/profile.php?id=100090866011142";

	// Open mail client
	window.location.href = mailtoLink;

	// Alert user that their information has been sent
	alert("Vui long doi xu ly . Chung toi se tra loi nhanh nhat.");
}