<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
     /* footer here */
     .glassmorphic-footer {
    position: relative;
    bottom: 580px;
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

</style>
<body>
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
        <form action="{{ route('admin.kuwago1.main') }}" method="POST">
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

</body>
</html>