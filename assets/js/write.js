const text = "Desbloqueie seu potencial em inglês!";
  const delay = 100; 

  function typeWriterEffect(element, text, delay) {
    let i = 0;

    function type() {
      if (i < text.length) {
        element.innerHTML += text.charAt(i);
        i++;
        setTimeout(type, delay);
      }
    }

    type();
  }

  const typewriterElement = document.getElementById("typewriter");
  typeWriterEffect(typewriterElement, text, delay);

