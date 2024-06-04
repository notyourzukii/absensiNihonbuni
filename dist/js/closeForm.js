const formAbsen = document.getElementById("formAbsen");
const formIzin = document.getElementById("formIzin");
if (formAbsen) {
    if (localStorage.getItem("formOpen") === "true") {
        console.log("tes");
        formAbsen.checked = true;
        
    } else {
            formAbsen.checked = false;
    }
formAbsen.addEventListener("change", function() {
    localStorage.setItem("formOpen", this.checked);
    });
};
if (formIzin) {
    if (localStorage.getItem("formIzinOpen") === "true") {
        console.log("tesIzin");
        formIzin.checked = true;
        
    } else {
            formIzin.checked = false;
    }
formIzin.addEventListener("change", function() {
    localStorage.setItem("formIzinOpen", this.checked);
    });
};
