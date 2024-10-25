<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Report</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Apply the background image */
            background: url('https://t3.ftcdn.net/jpg/07/38/89/48/360_F_738894857_62jRatktPCpiBnPiBHrBLgy5ecPD1gTR.jpg') no-repeat center center fixed;
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
        }

        /* Glass card styling */
        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            color: white;
            margin: 10px;
            max-width: 500px;
            position: relative;
            left: 400px; /* Move the container 30px to the right */
            
            
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

        /* Chart styling */
        canvas {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
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
        max-width: 185px; /* Adjusted width */
        height: 120px; /* Set a specific height */
        position: relative;
        right: 650px; /* Move the container 30px to the right */
       
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

/* Common styles for both Sales and Expenses */
.totalExpenses {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 15px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    color: white;
    margin: 10px;
    max-width: 185px; /* Adjusted width */
    height: 120px; /* Set a specific height */
    position: relative;
    right: 450px; /* Move the container 30px to the right */
    bottom: 330px; /* Move the container 30px to the right */
}


/* Icon and Text Styling */
.expenses-icon {
    font-size: 1.5rem; /* Set icon size */
    color: #fff; /* Icon color */
}

.total-expenses {
    font-size: 25px; /* Font size for total amounts */
    font-weight: bold; /* Bold font for total amounts */
    color: #fff; /* White text color */
    margin-top: 10px; /* Add some height spacing above the total amounts */
}

.total-expenses-title {
    font-size: 1rem; /* Reduced font size for the titles */
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
        max-width: 185px; /* Adjusted width */
        height: 120px; /* Set a specific height */
        position: relative;
        right: 650px; /* Move the container 30px to the right */
        bottom: 25px;
       
    }
    .profit-icon{
        font-size: 1.5rem; /* Set icon size */
        color: #fff; /* Icon color */
    }

    .total-profit {
        font-size: 25px; /* Font size for total amounts */
        font-weight: bold; /* Bold font for total amounts */
        color: #fff; /* White text color */
        margin-top: 10px; /* Add some height spacing above the total amounts */
    }

   .total-profit-title {
        font-size: 1rem; /* Reduced font size for the titles */
        color: #fff; /* White text color */
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
                        <form action="{{ route('admin.expenses-report') }}" method="POST" class="d-flex justify-content-center mb-4">
                            @csrf
                            <div class="form-group me-2">
                                <label for="start_date" class="form-label text-white">Start Date:</label>
                                <input type="date" id="start_date" name="start_date" class="form-control"
                                       value="{{ request('start_date', \Carbon\Carbon::now()->subDays(6)->toDateString()) }}" required>
                            </div>
                            <div class="form-group me-2">
                                <label for="end_date" class="form-label text-white">End Date:</label>
                                <input type="date" id="end_date" name="end_date" class="form-control"
                                       value="{{ request('end_date', \Carbon\Carbon::now()->toDateString()) }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary align-self-end">
                                Generate Report
                            </button>
                        </form>

                        <!-- Combined Chart for Expenses, Sales, and Profit -->
                        <canvas id="combinedChart" style="max-width: 100%; height: 300px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <!-- Total Sales Glass Card -->
                <div class="totalSales d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <i class="fas fa-chart-line sales-icon me-2"></i>
                        <h4 class="mb-0 total-sales-title">Total Sales</h4>
                    </div>
                    <h2 class="total-sales">₱ {{ number_format($totalSales, 2) }}</h2>
                </div>

                <!-- Total Profit Glass Card (Newly Added) -->
                <div class="totalProfit d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <i class="fas fa-chart-line profit-icon me-2"></i>
                        <h4 class="mb-0 total-profit-title">Total Profit</h4>
                    </div>
                    <h2 class="total-profit">₱ {{ number_format($totalSales - $totalExpenses, 2) }}</h2>
                </div>

                <!-- Total Expenses Glass Card -->
                <div class="totalExpenses d-flex flex-column align-items-start p-3 mb-4">
                    <div class="d-flex align-items-center mb-1">
                        <i class="fas fa-money-bill-wave expenses-icon me-2"></i>
                        <h4 class="mb-0 total-expenses-title">Total Expenses</h4>
                    </div>
                    <h2 class="total-expenses">₱ {{ number_format($totalExpenses, 2) }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const expenses = @json($expenses ?? []);
    const sales = @json($sales ?? []);
    
    if (expenses.length > 0 || sales.length > 0) {
        const ctx = document.getElementById('combinedChart').getContext('2d');
        const labels = [...new Set([
            ...expenses.map(expense => new Date(expense.date).toLocaleDateString()),
            ...sales.map(sale => new Date(sale.date).toLocaleDateString())
        ])];

        const expenseData = labels.map(label => {
            const expense = expenses.find(exp => new Date(exp.date).toLocaleDateString() === label);
            return expense ? parseFloat(expense.total_expenses) : 0;
        });

        const salesData = labels.map(label => {
            const sale = sales.find(s => new Date(s.date).toLocaleDateString() === label);
            return sale ? parseFloat(sale.total_sales) : 0;
        });

        // Calculate profit
        const profitData = salesData.map((sale, index) => {
            return sale - expenseData[index];
        });

        const combinedChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Expenses',
                    data: expenseData,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                }, {
                    label: 'Total Sales',
                    data: salesData,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                }, {
                    label: 'Profit',
                    data: profitData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>
</body>
</html>