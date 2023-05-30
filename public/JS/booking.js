var form = document.getElementById("availabilityForm");
var modal = document.getElementById("availabilityModal");
var aceptBtn = document.getElementById("modalBtn");
form === null || form === void 0 ? void 0 : form.addEventListener("submit", function (e) {
    e.preventDefault();
    setTimeout(function () {
        modal === null || modal === void 0 ? void 0 : modal.classList.remove("pageDetailsAvailability__modalContainer-hidden");
    }, 500);
    aceptBtn === null || aceptBtn === void 0 ? void 0 : aceptBtn.addEventListener("click", function () {
        modal === null || modal === void 0 ? void 0 : modal.classList.add("pageDetailsAvailability__modalContainer-hidden");
    });
});
