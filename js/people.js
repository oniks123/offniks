const plus = document.getElementById("plus")
const minus = document.getElementById("minus")
const count = document.getElementById("count")


plus.addEventListener('click', () => {
    count.value ++
})

minus.addEventListener('click', () => {
    if (count.value <= 1) {
        
    }
    else {
        count.value --
    }
})