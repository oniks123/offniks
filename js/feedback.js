const claimBTN = document.querySelectorAll(".claim-svg")
const claimCONT = document.querySelectorAll(".claim-container")
const other = document.querySelectorAll(".other")
const otherBTN = document.querySelectorAll(".otherCONT")

claimBTN.forEach(claimBTN => {
    claimBTN.addEventListener("click", () =>{
        claimCONT.forEach(element => {
            element.classList.toggle("active")
        });
    })
});

otherBTN.forEach(otherBTN => {
    otherBTN.addEventListener("click", () =>{
        other.forEach(other => {
            if (otherBTN.checked) {
                other.classList.add("active")
            }
            else {
                other.classList.remove("active")
            }
        });
    })
});
