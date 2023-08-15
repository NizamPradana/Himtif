document.addEventListener("DOMContentLoaded", function () {
    let successAlert = document.querySelector(".alert-success");

    if (successAlert) {
        let successMessage = successAlert.textContent.trim();
        if (successMessage) {
            let checkIcon = document.createElement("i");
            checkIcon.classList.add("fa", "fa-check-circle", "mr-2");
            successAlert.innerHTML = "";
            successAlert.appendChild(checkIcon);
            successAlert.appendChild(document.createTextNode(successMessage));
        }
    }
});
