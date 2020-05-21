function navigateToEdit(id) {
    location = "edit.php?id=" + id;
}
function navigateToDelete(id, name) {
    // const affirmations = prompt("Are you sure you want to delete ID: " + id + " Name : " + name + "yes or no...");
    const answer = confirm("Are you sure you want to delete ID: " + id + " Name" + name);
    if (!answer) {
        return;
    }
    $.ajax({
        method: "POST",
        url: "products-controller.php",
        data: `id=${id}&command=deleteProduct`,
        error: err => alert(err.message),
        success: result => alert("success")
    })
    // if (affirmations === "yes") {
    //     location = "edit.php?id=" + id;

    // }
    return;
}