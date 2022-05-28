$(document).ready(() => {
  $("#button1").click((e) => {
    e.preventDefault();
    window.open("form.php");
  });
  $("#button2").click(() => {
    window.open("stack.html");
  });
});
$("#sea").keypress((e) => {
  if (e.key == "Enter") {
    alert("No items yet registered!");
  }
});
