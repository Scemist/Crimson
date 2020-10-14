const navSlide = () => {
    
    const nav = window.document.querySelector('.crimson')
    const burger = window.document.querySelector('#burger')
    const logoNav = window.document.querySelector('#logoNav')
    const itensNav = window.document.querySelector('#itensNav')
    const filtro = window.document.querySelector('.escurecer')
    const fechar = window.document.querySelector('.fechar')
    const body = window.document.querySelector('body')

    // Ouve a Nav
    function abrirNav() {

        // Expande a Nav
        nav.classList.add('nav-ativa')

        // Ajustes de estilo
        logoNav.style.animation = `logoFade 0.5 ease forwards 0.5s`
        itensNav.style.display = 'flex'
        itensNav.style.transform = 'translateX(0)'
        filtro.style.display = 'block'
        filtro.style.animation = `escurecer 0.5 ease forwards 0.5s`
    }

    function fecharNav() {

        // Retrai a Nav
        nav.classList.remove('nav-ativa') // Retrai a Nav

        // Ajustes de estilo
        itensNav.style.transform = 'translateX(-100%)'
        logoNav.style.animation = `logoFadeReverse 0.5s ease`
        filtro.style.animation = 'none'
        filtro.style.animation = `aclarar 0.5 ease 0.5s`
        setTimeout(() => {
            filtro.style.display = 'none'
        }, 300)
    }

    logoNav.addEventListener('click', abrirNav)
    fechar.addEventListener('click', fecharNav)
    body.addEventListener('touchstart', fecharNav)

}

navSlide()