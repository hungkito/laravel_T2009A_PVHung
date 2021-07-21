// Get the modal
var modal = document.getElementById('myModal-img');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-modal")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

function validateForm() {
    var fName = document.forms["register-form"]["fName"].value;
    var lName = document.forms["register-form"]["lName"].value;
    var email = document.forms["register-form"]["email-register"].value;
    var pwd = document.forms["register-form"]["password-register"].value;
    var cfPwd = document.forms["register-form"]["cfPassword"].value;
    if (fName == "" || fName == null) {
        alert("First name must be filled out");
        return false;
    }
    if (lName == "" || lName == null) {
        alert("Last name must be filled out");
        return false;
    }
    if (email == "" || email == null) {
        alert("Email must be filled out");
        return false;
    }
    if (pwd == "" || pwd == null) {
        alert("Password must be filled out");
        return false;
    }
    if (cfPwd == "" || cfPwd == null) {
        alert("Repeat password must be filled out");
        return false;
    }
}

/* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}




