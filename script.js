function validateForm() {
    let input = document.getElementById("keyword").value;

    if (input.trim() === "") {
        alert("Please enter a keyword");
        return false;
    }

    return true;
}