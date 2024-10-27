<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promos</title>
</head>

<style>
     body {
            /* Apply the background image */
            background: url('https://t4.ftcdn.net/jpg/07/94/30/45/360_F_794304521_O4o0Y5UrvKtDxBNHY9utMowV2VhuhRpk.jpg') no-repeat center center fixed;
            background-size: cover;

            /* Create a darker overlay on top of the image */
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;

            /* Full height and centered content */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow:hidden;
           
        }

     .outer-glass-container {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 30px;
        width: 1000px;
        height: 500px; /* Fixed height */
        margin: 50px auto;
        backdrop-filter: blur(20px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        position: fixed;
    }

     /* footer here */
     .glassmorphic-footer {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 750px;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    border-radius: 40px;
    z-index: 10;
}

.glassmorphic-footer button,
.glassmorphic-footer select {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    border: none;
    border-radius: 20px;
    padding: 8px 16px;
    margin: 0 10px;
}

.glassmorphic-footer select {
    padding: 8px 12px;
    background: transparent; /* Make the dropdown background transparent */
    color: black; /* Ensure the text color is white */
    border: none; /* Remove border */
    cursor: pointer; /* Change cursor to pointer */
}

/* Center the dropdown text and add a line underneath */
.glassmorphic-footer .dropdown {
    text-align: center; /* Center the text */
    position: relative; /* Position relative for the line */
}

.glassmorphic-footer .dropdown::after {
    content: '';
    display: block;
    height: 2px;
    background: #fff; /* Line color */
    width: 100%; /* Full width */
    position: absolute;
    bottom: -5px; /* Position it below the text */
    left: 0;
}

.glassmorphic-footer .filter-icon {
    font-size: 30px;
    cursor: pointer;
    color: #fff;
    position: relative;
    right: 40px;
}


.modal-bg {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 100;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: #333;
    padding: 20px;
    border-radius: 8px;
    max-width: 400px;
    width: 100%;
    color: #fff; /* Change text color to white */
}

.modal-content h5 {
    margin-bottom: 20px;
}

.modal-content .form-label {
    color: #fff; /* Make the label color white */
}

.modal-content input[type="date"] {
    color: #000; /* Set input text color to black for visibility */
}

/*Carousel Style*/
.carousel {
  display: flex;
  width: 100%;
  height: 100%;
  align-items: center;
  font-family: Arial;
}

.carousel__list {
  display: flex;
  list-style: none;
  position: relative;
  width: 100%;
  height: 300px;
  justify-content: center;
  perspective: 300px;
}

.carousel__item {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 0px;
  width: 230px;
  height: 400px;
  border-radius: 12px;
  box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.5);
  position: fixed;
  top:-40px;
  left:170px;
  transition: all 0.3s ease-in;
  
}

.carousel__item:nth-child(1) {
    background: linear-gradient(45deg, #B08D57 0%, #CD853F 100%); /* Brass color */
}

.carousel__item:nth-child(2) {
    background: linear-gradient(45deg, #B08D57 0%, #CD853F 100%); /* Brass color */
}

.carousel__item:nth-child(3) {
    background: linear-gradient(45deg, #B08D57 0%, #CD853F 100%); /* Brass color */
}

.carousel__item:nth-child(4) {
    background: linear-gradient(45deg, #B08D57 0%, #CD853F 100%); /* Brass color */
}

.carousel__item:nth-child(5) {
    background: linear-gradient(45deg, #B08D57 0%, #CD853F 100%); /* Brass color */
}

.carousel__item[data-pos="0"] {
  z-index: 5;
}

.carousel__item[data-pos="-1"],
.carousel__item[data-pos="1"] {
  opacity: 0.7;
  filter: blur(1px) grayscale(10%);
}

.carousel__item[data-pos="-1"] {
  transform: translateX(-40%) scale(0.9);
  z-index: 4;
}

.carousel__item[data-pos="1"] {
  transform: translateX(40%) scale(0.9);
  z-index: 4;
}

.carousel__item[data-pos="-2"],
.carousel__item[data-pos="2"] {
  opacity: 0.4;
  filter: blur(3px) grayscale(20%);
}

.carousel__item[data-pos="-2"] {
  transform: translateX(-70%) scale(0.8);
  z-index: 3;
}

.carousel__item[data-pos="2"] {
  transform: translateX(70%) scale(0.8);
  z-index: 3;
}
.carousel__content {
  display: flex;
  flex-direction: column; /* Stack items vertically */
  align-items: center;    /* Center horizontally */
  justify-content: center; /* Center vertically */
  text-align: center;      /* Center text */
  padding: 20px;          /* Adjust padding to move text inside the item */
  height: 100%;           /* Full height of the carousel item */
  position: relative;      /* Allow absolute positioning of inner elements */
}

.Page1 {
  font-size: 20px;
  margin: 0; /* Remove default margin */
  color: #fff; /* Title color */
  position:fixed;
  top:50px;
  left:210px;
}

.description {
    font-size: 10px; /* Dynamic font size */
    margin: 0; /* Remove default margin */
    padding: 50px 10px 10px; /* Use shorthand for padding */
    color: #fff; /* Description color */
    line-height: 1.5; /* Improve readability by adjusting line height */
    word-wrap: break-word; /* Ensure long words break to the next line if needed */
}

#carousel__icon{
    font-size:50px;
    position: fixed;
    top:-5px;
    left:250px;
    height:20px;
    width:20px;

}

.promo-container {
            width: 300px;
            height: 400px;
            overflow-y: auto;
            padding-left: 20px; /* Creates space for the scroll bar */
            background-color: transparent; /* Make background transparent */
            border: none; /* Remove border */
            position: fixed;
            top:40px;
            right:10px;
        }

        .promo-container::-webkit-scrollbar {
    width: 4px; /* Slim width for the scrollbar track */
    background-color: rgba(255, 255, 255, 0.1); /* Light background for track */
}

.promo-container::-webkit-scrollbar-track {
    background-color: rgba(255, 255, 255, 0.1); /* Light background for track */
}

.promo-container::-webkit-scrollbar-thumb {
    width: 12px; /* Thicker thumb */
    background-color: rgba(255, 255, 255, 0.8); /* White thumb */
    border-radius: 6px; /* Optional rounded corners */
    margin: 2px; /* Adds space around the thumb for a more centered look */
    position: relative; /* Ensures it's visually distinct */
}



.promo-container::-webkit-scrollbar-thumb:hover {
    background-color: rgba(255, 255, 255, 1); /* Slightly brighter on hover */
}


        .promo-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .promo-list li {
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Light border */
            color: #fff; /* White text for contrast */
        }

        h3 {
            color: #fff;
        }


</style>
<body>
@include('sidebar')
@include('navbar')

<div class="outer-glass-container">
<div class="carousel">
  <ul class="carousel__list">
    <li class="carousel__item" data-pos="-2">1</li>
    <li class="carousel__item" data-pos="-1">2</li>
    <li class="carousel__item" data-pos="0">
    <div class="carousel_content">
    <i class="fa fa-tags" id="carousel__icon"></i><span></span>
    <h3 class="Page1">Huge Sale Alert!</h3>
           <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
sed do eiusmod tempor incididunt ut labore et dolore magna <br>
aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
</p>
        </div>
    </li>
    <li class="carousel__item" data-pos="1">4</li>
    <li class="carousel__item" data-pos="2">5</li>
  </ul>
</div>

<div class="promo-container">
        <h3>All Time Promos</h3>
        <ul class="promo-list">
            <li>1. 50% Discount</li>
            <li>2. Buy 1 Get 1 Free</li>
            <li>3. 25% Off on Electronics</li>
            <li>4. $10 Off on Orders Over $50</li>
            <li>5. Free Shipping on All Orders</li>
            <li>6. 30% Off for New Users</li>
            <li>7. Weekend Flash Sale - Up to 70% Off</li>
            <li>8. 20% Cashback on Your First Purchase</li>
            <li>9. Members Get Extra 15% Off</li>
            <li>10. End of Season Sale - Up to 60% Off</li>
            <li>11. 2x Reward Points on Every Purchase</li>
            <li>12. Holiday Sale - 40% Off Storewide</li>
            <li>13. Free Gift on Orders Over $100</li>
            <li>14. Back to School - 35% Off Supplies</li>
            <li>15. Summer Sale - Buy More, Save More</li>
            <li>16. 5% Discount for Paying with PayPal</li>
            <li>17. Limited Time Offer - Extra 10% Off</li>
            <li>18. Referral Bonus - $5 for Every Friend</li>
            <li>19. Exclusive 20% Off for App Users</li>
            <li>20. VIP Members - Free Monthly Gifts</li>
        </ul>
    </div>

</div>


<div class="glassmorphic-footer">
    <!-- Generate PDF Button -->
    <button onclick="generatePDF()" class="btn btn-outline-light">Generate PDF</button>

    <!-- Filter Dropdown with Custom Date Option -->
    <div class="dropdown">
        <select id="dateFilter" onchange="handleFilterChange()" class="dropdownforModal">
            <option value="today">Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="last3days">Last 3 Days</option>
            <option value="last5days">Last 5 Days</option>
            <option value="last7days">Last 7 Days</option>
            <option value="thisweek">This Week</option>
            <option value="lastweek">Last Week</option>
            <option value="thismonth">This Month</option>
            <option value="lastmonth">Last Month</option>
            <option value="thisyear">This Year</option>
            <option value="lastyear">Last Year</option>
            <option value="overall">Overall</option>
            <option value="custom">Custom</option>
        </select>
    </div>

    <!-- Filter Icon to Refresh the Chart -->
    <i class="fas fa-filter filter-icon" onclick="updateChartWithFilter()"></i>
</div>

<!-- Custom Date Selection Modal -->
<div class="modal-bg" id="customDateModal">
    <div class="modal-content">
        <h5>Select Date Range</h5>
        <form action="{{ route('admin.kuwago1.expenses') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="start_date" class="form-label text-white">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="form-control"
                       value="{{ request('start_date', \Carbon\Carbon::now()->subDays(6)->toDateString()) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="end_date" class="form-label text-white">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="form-control"
                       value="{{ request('end_date', \Carbon\Carbon::now()->toDateString()) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" onclick="closeModal()" class="btn btn-secondary me-2">Cancel</button>
                <button type="submit" class="btn btn-primary">Generate Report</button>
            </div>
        </form>
    </div>
</div>



  <!-- for chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- for dropdown -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript for PDF Generation, Filter Handling, and Modal Toggle -->




<script>
    function generatePDF() {
        // Implement PDF generation logic here
        alert("PDF Generated!"); // Placeholder
    }

    function handleFilterChange() {
        const filter = document.getElementById('dateFilter').value;
        if (filter === 'custom') {
            document.getElementById('customDateModal').style.display = 'flex';
        }
    }

    function updateChartWithFilter() {
        const filter = document.getElementById('dateFilter').value;
        // Implement chart update logic based on filter selection
        alert("Chart Updated with filter: " + filter); // Placeholder
    }

    function closeModal() {
        document.getElementById('customDateModal').style.display = 'none';
    }
</script>
<script>
const state = {};
const carouselList = document.querySelector('.carousel__list');
const carouselItems = document.querySelectorAll('.carousel__item');
const elems = Array.from(carouselItems);

// Event listener for clicks on the carousel list
carouselList.addEventListener('click', function (event) {
  // Get the clicked target
  var newActive = event.target.closest('.carousel__item'); // Find the closest item clicked

  // If the clicked item is not valid or is already active, do nothing
  if (!newActive || newActive.classList.contains('carousel__item_active')) {
    return;
  }

  // Update the carousel to show the newly active item
  update(newActive);
});

const update = function(newActive) {
  const newActivePos = newActive.dataset.pos;

  // Find current, previous, next, first, and last items based on position
  const current = elems.find((elem) => elem.dataset.pos == 0);
  const prev = elems.find((elem) => elem.dataset.pos == -1);
  const next = elems.find((elem) => elem.dataset.pos == 1);
  const first = elems.find((elem) => elem.dataset.pos == -2);
  const last = elems.find((elem) => elem.dataset.pos == 2);

  // Remove active class from the current item
  current.classList.remove('carousel__item_active');

  // Update positions of all items based on the new active item
  [current, prev, next, first, last].forEach(item => {
    var itemPos = item.dataset.pos;
    item.dataset.pos = getPos(itemPos, newActivePos);
  });

  // Add the active class to the newly active item
  newActive.classList.add('carousel__item_active');
};

const getPos = function (current, active) {
  const diff = current - active;

  // If the difference exceeds 2, reset position to keep continuity
  if (Math.abs(current - active) > 2) {
    return -current;
  }

  return diff;
};
</script>


    
</body>
</html>