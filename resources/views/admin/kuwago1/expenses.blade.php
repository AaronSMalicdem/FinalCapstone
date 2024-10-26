<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
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

         /* canvas {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            color: white;
            margin: 10px;
            width: 590px;
            position: fixed;
            left: 141px;
            bottom:40px;
            
        } */

        .glass-card {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    color: white;
    margin: 10px;
    width: 500px; /* Set a fixed width */
    height: 250px; /* Set a fixed height */
    position: fixed;
    left: 465px;
    bottom: 221px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#combinedChart {
    width: 100%; /* Let the canvas take full width of the parent */
    height: 90%; /* Let the canvas take full height of the parent */
}



        /* Headings and text */
        h3.card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8); /* Make text stand out */
        }

        /* Input fields glass-like style */
        input[type="date"] {
            background: rgba(255, 255, 255, 0.4);
            color: white;
            border: none;
            border-radius: 10px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 5px 10px;
        }

        /* Buttons styling */
        .btn-primary {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            border: none;
            backdrop-filter: blur(10px);
            border-radius: 15px;
        }

        .btn-primary:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .glass-card {
                padding: 10px;
            }
        }

          /* Glass container styles */
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
       
    }

  
       /* Total Sales Design */
    .totalSales {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        color: white;
        margin: 10px;
        width: 430px; /* Adjusted width */
        height: 170px; /* Set a specific height */
        position: relative;
        right: 650px; /* Move the container 30px to the right */
        bottom:23px;
       
    }

    .sales-icon {
        font-size: 1.5rem; /* Set icon size */
        color: #fff; /* Icon color */
    }

    .total-sales {
        font-size: 25px; /* Font size for total sales */
        font-weight: bold; /* Bold font for total sales */
        color: #fff; /* White text color */
        margin-top: 10px; /* Add some height spacing above the total sales */

    }
    .total-sales-title {
    font-size: 1rem; /* Reduced font size for the title */
    color: #fff; /* White text color */
}


 /* Total Sales Style */
 .totalProfit{
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        color: white;
        margin: 10px;
        width: 430px; /* Adjusted width */
        height: 245px; /* Set a specific height */
        position: fixed;
        left:15px; /* Move the container 30px to the right */
        bottom:-9px;
       
       
    }
   

    .total-profit {
        font-size: 20px; /* Font size for total amounts */
        font-weight: bold; /* Bold font for total amounts */
        color: #fff; /* White text color */
        margin-top: 10px; /* Add some height spacing above the total amounts */
    }

   .total-profit-title {
        font-size: 1rem; /* Reduced font size for the titles */
        color: #fff; /* White text color */
    }

    /*Total Orders*/
    .totalOrders {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        color: white;
        margin: 10px;
        width: 338px; /* Adjusted width */
        height: 200px; /* Set a specific height */
        position: relative;
        
        left:-37px;
        bottom: 560px; /* Move the container 30px to the right */
    }

    /*Target Sales*/
    .targetSales {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        color: white;
        margin: 10px;
        width: 390px; /* Adjusted width */
        height: 120px; /* Set a specific height */
        position: relative;
        right: 650px; /* Move the container 30px to the right */
        bottom: 420px; /* Move the container 30px to the right */
    }

    /* footer here */
    .glassmorphic-footer {
    position: relative;
    bottom: 530px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
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

.recentPurchased{
    color:white;
    position:fixed;
    left:29px;
    right:0px;
    top:200px;
    font-weight:bold;

}

   


    </style>
</head>
<body>
@include('sidebar')
@include('navbar')

    <!-- Main Content -->
     <!-- Outer Glass Container -->
<div class="outer-glass-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="glass-card">
                    <div class="card-body">
                        <!-- Combined Chart for Expenses, Sales, and Profit -->
                        <canvas id="combinedChart" style="max-width: 100%; height: 230px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <!-- Total Sales Glass Card -->
                <div class="totalSales d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <h4 class="mb-0 total-sales-title">Total Sales</h4>
                    </div>
                </div>

                <div>
                    <h5 class="recentPurchased">Recently Purchased</h3>
                </div>

                <!-- Total Profit Glass Card -->
                <div class="totalProfit d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <h4 class="mb-0 total-profit-title">Sales By Category</h4>
                    </div>
                </div>

                <!-- Total Expenses Glass Card -->
              

                <!-- Total Orders Glass Card (Newly Added) -->
                <div class="totalOrders d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <!-- <i class="fas fa-shopping-cart orders-icon me-2"></i> -->
                        <h4 class="mb-0 total-orders-title">Top-selling Products</h4>
                   </div>
               </div>
        </div>
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
    const sales = @json($sales ?? []); // Keep only sales data

    if (sales.length > 0) {
        const ctx = document.getElementById('combinedChart').getContext('2d');
        
        // Extract labels from sales data
        const labels = sales.map(sale => new Date(sale.date).toLocaleDateString());

        // Extract sales data
        const salesData = sales.map(sale => parseFloat(sale.total_sales));

        const combinedChart = new Chart(ctx, {
            type: 'line', // Change to 'bar' for vertical grouped bar graph
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Expenses',
                    data: salesData,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)', // Bar color for sales
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: false // Grouped bars
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });
    }
</script>

</body>
</html>