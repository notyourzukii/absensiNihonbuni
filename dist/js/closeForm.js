const checkbox = document.getElementById("checkbox");
if (checkbox) {
    if (localStorage.getItem("formOpen") === "true") {
        console.log("tes");
        checkbox.checked = true;
        
    } else {
            checkbox.checked = false;
    }
checkbox.addEventListener("change", function() {
    localStorage.setItem("formOpen", this.checked);
    });
}
