const width = window.innerWidth;
const height = window.innerHeight;
const mobile = width < height;

const links = document.querySelectorAll("a.anchor");

links.forEach((link) => {
  function clickHandler(e) {
    e.preventDefault();
    const href = link.getAttribute("href");
    const offsetTop = document.querySelector(href).offsetTop;     
    window.scroll({
      top: offsetTop - 150,
      behavior: "smooth"
    });
  }
  link.addEventListener("click", clickHandler);
});


const menuBtn = document.querySelector('.menuBtn');
const menuBtn2 = document.querySelector('.menuBtn2');        

menuBtn.addEventListener("click", function () {
    menuBtn.classList.toggle("act");
    menuBtn2.classList.toggle("act");
    if (menuBtn.classList.contains("act")) {            
        document.body.classList.add('act');
    } else {           
        document.body.classList.remove('act');
    }
});
menuBtn2.addEventListener("click", function () {
    menuBtn.classList.toggle("act");
    menuBtn2.classList.toggle("act");
    if (menuBtn2.classList.contains("act")) {            
        document.body.classList.add('act');
    } else {           
        document.body.classList.remove('act');
    }
});

if(mobile){
  links.forEach((link) => {
    link.addEventListener("click", function () {
      menuBtn.classList.remove("act");
      menuBtn2.classList.remove("act");
      document.body.classList.remove('act');
    });
  });
}