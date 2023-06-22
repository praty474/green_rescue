// Parallex Animation

let text = document.getElementById("text");
let leaf = document.getElementById("leaf");
let hill1 = document.getElementById("hill1");
let hill4 = document.getElementById("hill4");
let hill5 = document.getElementById("hill5");

window.addEventListener("scroll", () => {
  let value = window.scrollY;
  text.style.marginTop = value * 2.5 + "px";
  leaf.style.top = value * -1.5 + "px";
  leaf.style.left = value * 1.5 + "px";
  hill1.style.top = value * 1.2 + "px";
  hill4.style.left = value * -1.5 + "px";
  hill5.style.left = value * 1.5 + "px";
});

// For login

const inputs = document.querySelectorAll(".input");

function addcl() {
  var parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}

function remcl() {
  var parent = this.parentNode.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", addcl);
  input.addEventListener("blur", remcl);
});

// For contact

const contact_inputs = document.querySelectorAll(".contact_input");

function addcon() {
  var parent = this.parentNode;
  parent.classList.add("focus");
}

function remcon() {
  var parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

contact_inputs.forEach((input) => {
  input.addEventListener("focus", addcon);
  input.addEventListener("blur", remcon);
});

//Send email from form

function send_email() {
  Email.send({
    SecureToken: "35aa791f-3786-4875-870a-05748e3be5ce",
    To: "gamerztech232@gmail.com",
    From: "greenrescue@gamerzchoices.com",
    Subject: "[Green Rescue] You have been contacted!",
    Body:
      "<b>Name:</b> " +
      document.getElementById("con_name").value +
      "<br><b>Email:</b> " +
      document.getElementById("con_email").value +
      "<b><br>Phone Number:</b> " +
      document.getElementById("con_phone").value +
      "<b><br><br>Message:</b> " +
      document.getElementById("con_message").value,
  }).then((message) =>
    alert(
      "Your message has been sent. We'll get back to you shortly. Thank you"
    )
  );
}
