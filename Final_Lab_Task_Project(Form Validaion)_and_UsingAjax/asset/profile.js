document.addEventListener("DOMContentLoaded", function () {
    fetchProfileData();
});

function fetchProfileData() {
    let xhttp = new XMLHttpRequest();

    xhttp.open('GET', '../Controller/getProfileData.php', true);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Update the profile container with the fetched data
            document.getElementById('profile-container').innerHTML = this.responseText;
        }
    }

    xhttp.send();
}
