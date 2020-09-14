const navSlide = () => {
    const nav = window.document.querySelector('.crimson')
    const logoNav = window.document.querySelector('.nav-logo')
    const navLinks = window.document.querySelector('#nav-itens')
    const filtro = window.document.querySelector('.escurecer')
    const fechar = window.document.querySelector('.fechar')

    // Ouve a Nav
    logoNav.addEventListener('click', () => {

        // Expande a Nav
        nav.classList.add('nav-ativa')

        // Some o logo
        logoNav.style.animation = `logoFade 0.5 ease forwards 0.5s`

        // Aparece os links
        navLinks.style.display = 'flex'

        // Escurece a tela
        filtro.style.display = 'block'
        filtro.style.animation = `escurecer 0.5 ease forwards 0.5s`

        // Demais características
        nav.style.cursor = 'auto'
    })

    fechar.addEventListener('click', () => {
        nav.classList.remove('nav-ativa')

        navLinks.style.display = 'none'

        filtro.style.animation = 'none'

        logoNav.style.animation = `logoFade 0.5 ease 0.5s reverse`
            // logoNav.style.
    })
}

navSlide()