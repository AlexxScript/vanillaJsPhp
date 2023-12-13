const button = document.querySelector(".buttonNav");
const nav = document.getElementById("nav")

button.addEventListener("click", function(e) {
  nav.classList.toggle("ulActive")
});

document.addEventListener("mousemove", function (e) {
  this.querySelectorAll(".mainContainerHome").forEach((element) => {
    const x = (window.innerWidth - e.pageX *5) / 90;
    const y = (window.innerHeight - e.pageY *5) / 90;

    element.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
})

