<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking</title>
    <link href="{{ asset('css/ind.css') }}" rel="stylesheet">
</head>

    <h2> Seat Booking System</h2>

    <div class="movie-container">
        <!-- <div class="card-header">{{ __('seat_booking') }}</div> -->
        <form method="post" action="{{ route('create') }}">
            @csrf

        <!-- <div class="form-group"> -->
                <label>Name :-</label>
                <input id="nameField" type="text" name="name"  placeholder="Name" required="">
                <!-- </div> -->



            <br>
            <br>


        <label> Pick a Movie </label>
        <select name="movie" id="movie">
            <option value="The Avenger" > The Avenger </option>
            <option value="Captain America"> Captain America </option>
            <option value="Gardiance of galaxy 1 "> Gardiance of galaxy 1 </option>
            <option value="Mary Kom"> Mary Kom </option>
            <option value="The Avenger : Endgame"> The Avenger : Endgame </option>
            <option value="Gardiance of galaxy 2"> Gardiance of galaxy 2 </option>
            <option value="laggan"> laggan </option>
            <option value="Spiderman far from home"> Spiderman far from home </option>
            <option value="Jai Bhim"> Jai Bhim </option>
            <option value="Pushpa"> Pushpa </option>
            <option value="Civil War">  Civil War </option>
            <option value="Black Panther"> Black Panther </option>
            <option value="Sulthan"> Sulthan</option>
            <option value="Master"> Master </option>
            <option value="hitsman Bodygaurd"> hitsman Bodygaurd </option>
            <option value="RRR "> RRR </option>


        </select>
    </div>
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>

        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>

        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>

    </ul>

    <div class="container">
        <div class="screen"></div>
        <div class="row" id="seatBooked">

            <div class="seat"><input type="checkbox" value="a1" name="seat_booked[]"></div>
            <div class="seat"> <input type="checkbox" value="a2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="a3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="a4" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="a5" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="a6" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="a7" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="a8" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="a9" name="seat_booked[]"></div>

        </div>

        <div class="row" id="seatBooked">
            <div class="seat"><input type="checkbox" value="b1"  name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="b2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="b3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="b4" name="seat_booked[]"></div>
            <div class="seat occupied"></div>
            <div class="seat"><input type="checkbox" value="b6" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="b7" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="b8" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="b9" name="seat_booked[]"></div>
        </div>

        <div class="row" id="seatBooked">
            <div class="seat"><input type="checkbox" value="c1" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="c4" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c5" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c6" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="c7" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c8" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="c9" name="seat_booked[]"></div>
        </div>

        <div class="row" id="seatBooked">
            <div class="seat"><input type="checkbox" value="d1" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="d4" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d5" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d6" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="d7" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d8" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="d9" name="seat_booked[]"></div>
        </div>

        <div class="row" id="seatBooked">
            <div class="seat"><input type="checkbox" value="e1" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="e2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="e3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="e4" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="e5" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="e6" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="e7" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="e8" name="seat_booked[]"></div>
            <div class="seat occupied"></div>
        </div>

        <div class="row" id="name="seat_booked[]">
            <div class="seat"><input type="checkbox" value="f1" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="f2" name="seat_booked[]"></div>
            <div class="seat"><input type="checkbox" value="f3" name="seat_booked[]"></div>

            <div class="seat"><input type="checkbox" value="f4" name="seat_booked[]"></div>
            <div class="seat occupied" value="f5">
{{--            <div class="seat"><input type="checkbox" value="f6" name="seat_booked[]"></div>--}}
{{--            <div class="seat"><input type="checkbox" value="f7" name="seatBooked[]"></div>--}}
{{--            <div class="seat"><input type="checkbox" value="f8" name="seatBooked[]"></div>--}}
{{--            <div class="seat"><input type="checkbox" value="f9" name="seatBooked[]"></div>--}}
        </div>
    </div>

    <p class="text">
     you have selected <span id="count">0</span> seats for a price of Rs. <span id="total">0</span>
    </p>




    <!-- <input type="submit"  value="Submit" id="btn" onclick="redirect();"/> -->
    <input type="submit"  value="Submit" id="btn"/>
</form>
    </div>
    <script >
        const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

let ticketPrice  = +movieSelect.value;

function seatMovieData(){
    localstorage.setItem('selectedzMovieIndex',movieIndex);
    localstorage.setItem('selectedMovieprice',movieprice);
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

// function submitForm(){
//          const selectedSeats = document.querySelectorAll('.row .seat.selected');

//     $("#btn").click(function(e){

//   e.preventDefault();


//   var name = $("input[name=name]").val();
// //   var password = $("input[name=password]").val();
// //   var email = $("input[name=email]").val();

//   $.ajax({
//      type:'POST',
//      url:"{{ route('payment') }}",
//      data:{name:name},

//   });

// });
// }


    </script>
</body>
</html>
