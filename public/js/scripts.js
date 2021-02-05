
window.addEventListener('load', () => {

    // initial slide
    let slide = 1;

    // total slides
    let slides = document.querySelectorAll(".slider ul li");
    total = slides.length;

    // show first side
    showSlide(1);

    next = document.querySelector(".next");
    prev = document.querySelector(".prev")

    /**
     * event next button
     */
    next.addEventListener('click', (evt) => {
        evt.preventDefault();
        slide++;
        if (slide > total) {
            slide = 1;
        }
        showSlide(slide);
    })

    /** 
     * event prev button
     */
    prev.addEventListener("click", (evt) => {
        evt.preventDefault();
        slide--;
        if (slide < 1) {
            slide = total;
        }
        showSlide(slide);
    })

    /**
     * show slides
     * 
     * @param {number} n 
     * @return {null}
     * 
     */
    function showSlide(n) {
        n--; // decrement 1
        for (i = 0; i < slides.length; i++) {
            (i == n) ? slides[n].style.display = "block": slides[i].style.display = "none";
        }
    }

})

var mymap = L.map('mapid').setView([-38.00885, -57.56277], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWd1c2lyaSIsImEiOiJja2tuYTloazMyYjZpMm5ud2N4M2d6anRlIn0.vCENfiMBKD7bm04FceNLsw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYWd1c2lyaSIsImEiOiJja2tuYTloazMyYjZpMm5ud2N4M2d6anRlIn0.vCENfiMBKD7bm04FceNLsw'
}).addTo(mymap);

var marker = L.marker([-38.00885, -57.56277]).addTo(mymap);
marker.bindPopup("<b>Ungarelli Muebles</b><br> Av. Independencia 3244").openPopup();




// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


