const body = document.querySelector("body")
const BookingBtn = document.querySelectorAll(".booking-btn")
const BookingPop = document.querySelector(".booking-pop")
const close = document.querySelector(".close-btn")
const comment = document.querySelector(".comments")

const info = document.querySelector(".info")
const continueBtn = document.querySelector(".continue")
const endBtn = document.querySelector(".end")
const up = document.querySelector(".up-container")
const down = document.querySelector(".down-container")

const names = document.querySelector(".name-input")


BookingBtn.forEach(BookingBtn => {
    BookingBtn.addEventListener('click', () => {
        body.classList.add("block-scroll")
        BookingPop.classList.remove("disable")

        comment.value = ""
        names.value = ""
    })
});

close.addEventListener('click', () => {
    body.classList.remove("block-scroll")
    BookingPop.classList.add("disable")

    up.classList.remove("disable")
    down.classList.remove("disable")
    continueBtn.classList.remove("disable")

    endBtn.classList.add("disable")
    info.classList.add("disable")

})

continueBtn.addEventListener('click', () => {
    up.classList.add("disable")
    down.classList.add("disable")
    continueBtn.classList.add("disable")

    endBtn.classList.remove("disable")
    info.classList.remove("disable")
})

endBtn.addEventListener('click', () => {

    if (names.value == "") {
        alert ("Введите имя")
    } 
    else{
        body.classList.remove("block-scroll")
        BookingPop.classList.add("disable")
    
        up.classList.remove("disable")
        down.classList.remove("disable")
        continueBtn.classList.remove("disable")
    
        endBtn.classList.add("disable")
        info.classList.add("disable")

    }
})


