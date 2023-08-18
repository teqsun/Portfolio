//fonctions modales 
const openModal = async function (e) {
  
    e.preventDefault()

    let target = e.target
    let href = target.getAttribute("href")
    
    let modal = document.querySelector(href)


    modal.style.display = "flex"
    modal.removeAttribute('aria-hidden')
    modal.setAttribute('aria-modal', 'true')
    modal.addEventListener('click', closeModal)
    
    let btnsModal = modal.querySelectorAll('.js-close-modal')
    for (let btnModal of btnsModal) {
        btnModal.addEventListener('click', closeModal)
    }
    modal.querySelector('.js-stop-modal').addEventListener('click', stopPropagation)


}

const closeModal = async function (info) {
    let modalInfo
    if (info instanceof Event) {
        info.preventDefault()
        let target = info.target

        modalInfo = target.closest("aside")
    } else {
        modalInfo = document.querySelector("#modal"+info)
    }

    modalInfo.setAttribute('aria-hidden', 'true')
    modalInfo.removeAttribute('aria-modal')
    let hideModal = function () {
        modalInfo.style.display = "none"
        modalInfo.removeEventListener('animationend', hideModal)
    }
    modalInfo.addEventListener('animationend', hideModal)

}


const stopPropagation = function (e) {
    e.stopPropagation()

}

document.querySelectorAll('.js-modal').forEach(a => {
    a.addEventListener('click', openModal)

})

const modalContainer = document.querySelector(".format-a-modal")
const modalTrigger = document.querySelectorAll(".js-modal-trigger")

modalTrigger.forEach(trigger => trigger.addEventListener("click", triggerOpenModal))

function triggerOpenModal(){
    modalContainer.classList.toggle("active")
}



const portfolioContainer = document.querySelector('.portfolio-items')

portfolioContainer.addEventListener('click', e => {
    e.preventDefault()

    const modaltoggle = e.target.closest('.portfolio-link')

    if (!modaltoggle) return

    const modal = modaltoggle.parentNode.nextElementSibling

    modal.classList.add('is-open')
})