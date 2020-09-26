const navSlide = () => {
    const nav = window.document.querySelector('.crimson')
    const logoNav = window.document.querySelector('#nav-logo')
    const navLinks = window.document.querySelector('#nav-itens')
    const filtro = window.document.querySelector('.escurecer')
    const fechar = window.document.querySelector('.fechar')


    // Ouve a Nav
    logoNav.addEventListener('click', () => {
        // Expande a Nav
        nav.classList.add('nav-ativa')

        // Ajustes de estilo
        logoNav.style.animation = `logoFade 0.5 ease forwards 0.5s`
        navLinks.style.display = 'flex'
        navLinks.style.transform = 'translateX(0)'
        filtro.style.display = 'block'
        filtro.style.animation = `escurecer 0.5 ease forwards 0.5s`
    })


    function fecharNav() {
        // Retrai a Nav
        nav.classList.remove('nav-ativa') // Retrai a Nav

        // Ajustes de estilo
        navLinks.style.transform = 'translateX(-50%)'
        filtro.style.animation = 'none'
        filtro.style.animation = `aclarar 0.5 ease 0.5s`
        logoNav.style.animation = `logoFadeReverse 0.5 ease 1s`
        setTimeout(() => {
            filtro.style.display = 'none'
        }, 300)
    }

    fechar.addEventListener('click', fecharNav)

}

navSlide()