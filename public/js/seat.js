const container = document.querySelector('.conatiner');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

let ticketPrice  = +movieSelect.value;

function seatMovieData(){
    locakstorage.setItem('selectedMovieIndex',movieIndex);
    locakstorage.setItem('selectedMovieprice',movieprice);
}

//update total and count
function updateSelectedCount(){
    const selectedSeats = document.querySelectorAll('.row .seat.selected');

    const indexSeat = [...selectedSeats].map(function(seat){
        return [...seats].indexOf(seat);
    })

    localStorage.setItem('selectedSeats',JSON.stringify(indexSeat));

    const selectedSeatCount = selectedSeats.length;
    count.innerText = selectedSeatCount;
    total.innerText = selectedSeatCount*ticketPrice;
}

movieSelect.addEventListener('change', e=>{
    ticketPrice = +e.target.value;
    seatMovieData(e.target.indexSeat,e.target.value);
    updateSelectedCount();
})


function populateUi(){
     const selectedSeats = JSON.parse( localStorage.getItem('selectedSesats'));

     if(selectedSeats !== NULL && selectedSeats.length>0){
         seats.forEach((seat,index)=>{
                if(selectedSeats.indexOf(index) > -1){
                    seat.classList.add('selected');
                }
         })
     }
     const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

     if(selectedMovieIndex !=null){
        movieSelect.selctedIndex = selectedMovieIndex;
     }
}

window.onload=function(){
container.addEventListener('click', (e)=>{
    if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied')){
        console.log(e.target.value);
        e.target.classList.toggle('selected');

    }

    updateSelectedCount();
})
}

updateSelectedCount();