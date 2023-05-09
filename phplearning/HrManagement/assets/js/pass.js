function showPass(){

let x = document.getElementById("password");
let y = document.getElementById("show_eye")
let z = document.getElementById("hide_eye");
if (x.type === "password") {
  x.type = "text";
  y.style.display='none';
  z.style.display='block';
} else {
  x.type = "password";
  y.style.display='block';
  z.style.display='none';
}
}