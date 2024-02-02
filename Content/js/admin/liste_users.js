const closeModalBtn = document.getElementsByClassName("closeModal")[0];
const supprUserModal = document.getElementById("supprModal");
const supprBtn= document.getElementsByClassName("suppr");

/*supprBtn.addEventListener("click", () => {
    supprUserModal.style.display = "block";
    supprUserModal.style.opacity = "1";
    modalContent.classList.add("bounce-zoom-in");
    modalContent.classList.remove("zoom-out");
});*/

// Fermeture de la modal
const closeModalSuppr = () => {
    supprUserModal.style.opacity = "0";
    supprUserModal.style.display = "none";
};

for(var h = 0; h < supprBtn.length; h++){
    supprBtn[h].addEventListener("click", (event) => {
        /* supprBtn[h] */
        let fName=event.currentTarget.parentElement.parentElement.getElementsByClassName("userFName")[0].textContent;
        let lName=event.currentTarget.parentElement.parentElement.getElementsByClassName("userLName")[0].textContent;
        let mail=event.currentTarget.parentElement.parentElement.getElementsByClassName("userMail")[0].textContent;
        let idUser=event.currentTarget.id;
        document.getElementById("userFName").textContent=fName;
        document.getElementById("userLName").textContent=lName;
        document.getElementById("userMail").textContent=mail;
        document.getElementById("supprBtnMailUser").value=mail;
        document.getElementById("supprBtnIdUser").value=idUser;
        supprUserModal.style.opacity = "1";
        supprUserModal.style.display = "block";
    });
}

closeModalBtn.addEventListener("click", closeModalSuppr);

window.addEventListener("click", (event) => {
    if (event.target === supprUserModal) {
        closeModalSuppr();
    }
});