
const btns = document.querySelectorAll(".btn-filtres")

btns.forEach((btn) => {
    btn.addEventListener('click',()=>{
    document.querySelector(".active").classList.remove("active")
    btn.classList.add('active')
   })
    }
   
    
)




const btnAll = document.getElementById("btnAll");
const btnWeb = document.getElementById("btnWeb");
const btnIllu = document.getElementById("btnIllu");
const btnOthers = document.getElementById("btnOthers");


const worksIllustrations = document.querySelectorAll(".illustration");

const worksWebs = document.querySelectorAll(".web-design");

const worksOthers = document.querySelectorAll(".others");


btnWeb.addEventListener('click', (e)=>{

    projectFilter(e)

})

btnAll.addEventListener('click', (e)=>{

    projectFilter(e)

})

btnIllu.addEventListener('click', (e)=>{

    projectFilter(e)

})

btnOthers.addEventListener('click', (e)=>{

    projectFilter(e)

})

function  projectFilter(e) {

    if(e.target.id == "btnWeb"){

        worksIllustrations.forEach((worksIllustration) => {
            worksIllustration.classList.add('hide');
          });

          worksWebs.forEach((worksWeb) => {
            worksWeb.classList.remove('hide');
          });

          worksOthers.forEach((worksOther) => {
            worksOther.classList.add('hide');
          });
    }

    if(e.target.id == "btnIllu"){
        worksIllustrations.forEach((worksIllustration) => {
            worksIllustration.classList.remove('hide');
          });

          worksWebs.forEach((worksWeb) => {
            worksWeb.classList.add('hide');
          });

          worksOthers.forEach((worksOther) => {
            worksOther.classList.add('hide');
          });
       
       
    }

    if(e.target.id == "btnOthers"){
        worksIllustrations.forEach((worksIllustration) => {
            worksIllustration.classList.add('hide');
          });

          worksWebs.forEach((worksWeb) => {
            worksWeb.classList.add('hide');
          });

          worksOthers.forEach((worksOther) => {
            worksOther.classList.remove('hide');
          });
    }

    if(e.target.id == "btnAll"){
        worksIllustrations.forEach((worksIllustration) => {
            worksIllustration.classList.remove('hide');
          });

          worksWebs.forEach((worksWeb) => {
            worksWeb.classList.remove('hide');
          });

          worksOthers.forEach((worksOther) => {
            worksOther.classList.remove('hide');
          });
    }
    
}
