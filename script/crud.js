var button = document.querySelectorAll("button");
// var edit = document.querySelectorAll(".edit");

for (let i = 0; i < button.length; i++) {
    button[i].addEventListener("click", showEdit => {
        console.log("hello");
        var edit = document.querySelectorAll(".edit");
        console.log(edit);
        if (edit[i].style.display == "none") {
            edit[i].style.display = "block";
            console.log(edit[i]);
        } else {
            edit[i].style.display = "none";
        }
    });
}