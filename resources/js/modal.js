const button = document.querySelector("open-modal");
const modal = document.querySelector("dialog");

button.onclick = function () {
    modal.showModal();
};