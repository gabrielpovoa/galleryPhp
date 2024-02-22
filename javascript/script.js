function toggleModal() {
    var modal = document.querySelector("modal");
    modal.style.display = modal.style.display === "block" ? "none" : "block";
}

function processPicture() {
    setTimeout(function() {
        toggleModal();
    }, 2000);
}