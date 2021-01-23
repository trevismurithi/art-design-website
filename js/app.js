var container = document.querySelector('.container');
var wrap = document.querySelector('.wrap');
var logo = document.querySelector('.img');


container.addEventListener("mousemove",(e)=>{
    let yAxis = (window.innerHeight / 2 - e.pageY) / 15;
    let xAxis = (window.innerWidth / 2 - e.pageX) / 15;
    wrap.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;   
});

//enter animator
container.addEventListener("mouseenter",e=>{
    wrap.style.transition = "none";
    logo.style.transition = "1s ease-in";
    logo.style.transform = "translateZ(150px)";
});

//leave animator
container.addEventListener("mouseleave", e=>{
    wrap.style.transition = "all 1s ease";
    wrap.style.transform = `rotateY(0deg) rotateX(0deg)`;
    logo.style.transition = "1s ease-out";
    logo.style.transform = "translateZ(0px)";
});