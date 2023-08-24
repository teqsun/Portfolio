
//new test modal
const portfolioContainer = document.querySelector('.portfolio-items')

portfolioContainer.addEventListener('click', e => {
    e.preventDefault()

    const modaltoggle = e.target.closest('.portfolio-link')

    if (!modaltoggle) return

    const modal = modaltoggle.parentNode.nextElementSibling
    const closeButton = modal.querySelector('.modal-close')

    const modalOpen = () => {
        modal.classList.add('is-open')
        modal.style.animation = 'modalIn 500ms forwards'
        document.body.style.overflowY = 'hidden'

        let btnsModal = modal.querySelectorAll('.media-format')
        for (let btnModal of btnsModal) {
            btnModal.addEventListener('click', stopPropagation)
        }
        
    }

    const modalClose = () => {
        modal.classList.remove('is-open')
        modal.removeEventListener('animationend' , modalClose)
    }

    closeButton.addEventListener('click', () => {
        modal.style.animation = 'modalOut 500ms forwards'
        modal.addEventListener('animationend', modalClose)
        document.body.style.overflowY = 'scroll'
    })

    document.addEventListener('keydown', e => {
        if (e.keyCode === 27) {
            modal.style.animation = 'modalOut 500ms forwards'
            modal.addEventListener('animationend', modalClose)
            document.body.style.overflowY = 'scroll'
        }
    })
    var stopPropagation = function (e) {
        e.stopPropagation()
    }
   modalOpen()
   
})