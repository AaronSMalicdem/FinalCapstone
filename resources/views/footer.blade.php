<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Filter</title>
    <!-- Add any required CSS (like Bootstrap or custom styles) -->
</head>
<body>

<!-- partials/footer.blade.php -->
<footer class="glassmorphic-footer">
    <div class="container d-flex justify-content-center align-items-center py-3">
        <!-- Dropdown for filters -->
        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Filter Report
            </button>
            <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                <li><a class="dropdown-item" href="#" onclick="updateChart('today')">Today</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('yesterday')">Yesterday</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_3_days')">Last 3 Days</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_5_days')">Last 5 Days</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_7_days')">Last 7 Days</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('this_week')">This Week</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_week')">Last Week</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('this_month')">This Month</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_month')">Last Month</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('this_year')">This Year</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('last_year')">Last Year</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateChart('overall')">Overall</a></li>
                <li><a class="dropdown-item" href="#" onclick="showCustomDate()">Custom</a></li>
            </ul>
        </div>

        <!-- Custom Date Range inputs -->
        <div class="d-none" id="customDateRange" style="margin-left: 20px;">
            <input type="date" id="customStartDate" class="form-control me-2" placeholder="Start Date">
            <input type="date" id="customEndDate" class="form-control me-2" placeholder="End Date">
            <button class="btn btn-primary" onclick="updateChart('custom')">Apply</button>
        </div>
    </div>
</footer>

<!-- Glassmorphic Styling -->
<style>
    .glassmorphic-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        backdrop-filter: blur(10px) saturate(200%);
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        z-index: 1000;
    }
    .dropdown-menu {
        background-color: rgba(0, 0, 0, 0.7);
    }
    .dropdown-item {
        color: white;
    }
    .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<!-- Script to Handle Date Range Selection and Filtering -->
<script>
    function showCustomDate() {
        // Show the custom date range inputs
        document.getElementById('customDateRange').classList.remove('d-none');
    }

    function updateChart(filter) {
        // Fetch and update the chart data according to the selected filter.
        console.log(`Filter selected: ${filter}`);

        // If custom filter is selected, get custom date range values
        if (filter === 'custom') {
            const startDate = document.getElementById('customStartDate').value;
            const endDate = document.getElementById('customEndDate').value;

            if (startDate && endDate) {
                console.log(`Custom Date Range: ${startDate} - ${endDate}`);
                // You can send this date range via AJAX to fetch updated data
                // Example AJAX call:
                // fetch('/api/updateChart', { method: 'POST', body: JSON.stringify({ start_date: startDate, end_date: endDate }) });
            } else {
                console.error('Both start and end dates are required for a custom range.');
            }
        }

        // You can replace the console logs with actual AJAX or other logic to update your report/chart.
    }
</script>

<!-- Add any required JS libraries like Bootstrap JS, etc. -->
</body>
</html>
