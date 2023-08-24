var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("topnav_hamburger_icon");

openBtn.addEventListener('click', function(){
    if(this.classList.contains("open")){
        this.classList.remove("open")
        sidenav.classList.remove("active");
    }else{
        this.classList.add("open")
        sidenav.classList.add("active");
        
    }
})