var modal = document.getElementById("myModal");
var btn = document.getElementById("openModal");
var span = document.getElementsByClassName("close")[0];
var submitBtn = document.getElementById("submitTestimonial");

// Ação para abrir a modal
btn.onclick = function() {
  modal.style.display = "block";
};

// Ação para fechar a modal
span.onclick = function() {
  modal.style.display = "none";
};

// Ação para fechar a modal clicando fora dela
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// Ação para enviar o depoimento
submitBtn.onclick = function() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Aqui você pode fazer o que quiser com os dados (enviar para um servidor, exibir, etc.)

  // Fechar a modal
  modal.style.display = "none";
};