// Obtén todos los contenedores de imágenes e información
const imagenContenedores = document.querySelectorAll(".imagen-contenedor");
const informaciones = document.querySelectorAll('.informacion');

// Agrega un evento de pasar el mouse a cada contenedor de imágenes
imagenContenedores.forEach((imagenContenedor, index) => {
  imagenContenedor.addEventListener('mouseover', () => {
    informaciones[index].style.right = '-200px';
    imagenContenedor.style.transform = 'scale(1)';
    informaciones[index].style.zIndex = '1';
  });
//   pasa el mouse y se cierra todo
  imagenContenedor.addEventListener("mouseleave", () => {
    informaciones[index].style.right = '-8px';
    informaciones[index].style.zIndex = '0';
     });

  // Agrega un evento al pasar para la información que se mantiene abierta
  informaciones[index].addEventListener('mouseover', () => {
    informaciones[index].style.right = '-200px';
    informaciones[index].style.zIndex = '1';

  });

  // Agrega un evento al pasar el mouse para cuando sales de la información y se cierra
  informaciones[index].addEventListener('mouseout', () => {
    informaciones[index].style.right = '-8px';
    informaciones[index].style.zIndex = '0';
  });
});
