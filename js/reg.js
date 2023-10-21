const login = document.querySelector(".login-container")
const reg = document.querySelector(".reg-container")
const regBTN = document.querySelector(".register")
const loginBTN = document.querySelector(".enter")

regBTN.addEventListener('click', () => {
    login.classList.add("disable")
    reg.classList.remove("disable")

})

loginBTN.addEventListener('click', () => {
    login.classList.remove("disable")
    reg.classList.add("disable")
})