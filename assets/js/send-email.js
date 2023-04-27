const form = document.querySelector('form');

form.addEventListener('submit', function(e) {
  e.preventDefault(); // detener el envío del formulario

  const formData = new FormData(form);

  fetch('send-email.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log(data); // mostrar la respuesta del servidor
  })
  .catch(error => {
    console.error(error); // mostrar errores en la consola del navegador
  });
});
