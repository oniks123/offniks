const open = document.querySelector(".open")
const MenuConteiner = document.querySelector(".menu-container")
const MenuClose = document.querySelector(".close")
const cont = document.querySelector(".cont-btn")

MenuClose.addEventListener('click', () => {
    body.classList.remove("block-scroll")
    MenuConteiner.classList.add("hide-menu")
})

open.addEventListener('click', () => {
    body.classList.add("block-scroll")
    MenuConteiner.classList.remove("hide-menu")
})

cont.addEventListener('click', () => {
    body.classList.remove("block-scroll")
    MenuConteiner.classList.add("hide-menu")
})