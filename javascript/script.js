const toggleModal = () => {
    var modal = document.querySelector("modal");
    modal.style.display = modal.style.display === "block" ? "none" : "block";
}

const processPicture = () => {
    setTimeout(() =>  toggleModal()  , 2000);
}