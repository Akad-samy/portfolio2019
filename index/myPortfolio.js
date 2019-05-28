

setInterval(() => {
    document.querySelector('.lds-circle').classList.add('d-none')
    document.querySelector('.iam').classList.remove('d-none')
}, 2000);




var nav = document.querySelectorAll(".container .topnav");
var about = nav[0];
var portfolio = nav[1];
var contact = nav[2];



if(window.innerWidth < 768){
    document.querySelector(".topnav").classList.toggle("d-none")
}
window.onresize = function(){
    console.log(window.innerWidth)
    if(window.innerWidth < 768){
        document.querySelector(".topnav").classList.add("d-none")
        document.querySelector(".bars").classList.add("d-block")
        // document.querySelector(".bars").addEventListener("click", function(){
        //     document.querySelector(".nav-mob").classList.toggle("d-block")
        //     document.querySelector(".bars").classList.add("d-none")
        // })
        document.querySelector(".close").addEventListener("click", function(){
            document.querySelector(".nav-mob").classList.remove("d-block")
            document.querySelector(".bars").classList.add("d-block")
        })
    }else{
        document.querySelector(".topnav").classList.remove("d-none")
        document.querySelector(".bars").classList.add("d-none")
    }
}



document.querySelectorAll('.nav-mob a').forEach(item => {
    item.onclick = function(e){
        e.preventDefault()
        console.log(e)
        let dest = e.target.attributes.href.nodeValue

        document.querySelectorAll(".mySlides").forEach(slide => {
            slide.classList.add("d-none")
        })
        document.querySelector(dest).classList.remove("d-none")
    }
})

document.querySelectorAll('.container .topnav a').forEach(item => {
    item.onclick = function(e){
        e.preventDefault()
        console.log(e)
        let dest = e.target.attributes.href.nodeValue
        
        if( document.querySelector(".container .topnav a.active") != null )
            document.querySelector(".container .topnav a.active").classList.remove("active")
        
        item.classList.add("active")

        document.querySelectorAll(".mySlides").forEach(slide => {
            slide.classList.add("d-none")
        })
        document.querySelector(dest).classList.remove("d-none")
    }
})

document.querySelector(".hero").onclick = function(e){
    e.preventDefault()
    if( document.querySelector(".container .topnav a.active") != null )
        document.querySelector(".container .topnav a.active").classList.remove("active")

    document.querySelectorAll(".mySlides").forEach(slide => {
        slide.classList.add("d-none")
    })
    document.querySelector("#home").classList.remove("d-none")
}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.querySelectorAll(".myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

for(let i = 0 ; i < img.length ; i++){
    img[i].onclick = function(e){
        modal.classList.add("d-block")
        modalImg.setAttribute("src", img[i].getAttribute("data-image"))
        captionText.innerHTML = e.target.alt;
        // console.log(e.target.alt)
    }
}


function fermer() {
    modal.classList.remove("d-block")
}


console.log(document.querySelector('nav'))

if(document.querySelector('.pages').innerHTML === "1"){
    document.querySelector('nav').style.opacity="0"
    // console.log('oiui')
}else{
    document.querySelector('nav').style.opacity="1"
}

