<script src="myfunc.js"></script>
(function myFunction() {
    document.getElementById("otherInformation").style.display = "none";
})();

function myFunction() {
    var checkBox = document.getElementById("otherInfo");
    var other = document.getElementById("otherInformation");
    if (checkBox.checked == true) {
        other.style.display = "block";
    } else {
        other.style.display = "none";
    }
}