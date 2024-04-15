// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Make an AJAX request to fetch book counts from the server
$.ajax({
  url: '/get-book-counts', // Replace this with the actual endpoint
  method: 'GET',
  success: function(response) {
      var totalBooks = response.totalBooks;
      var borrowedBooks = response.borrowedBooks;
      var returnedBooks = response.returnedBooks;

      // Initialize chart with retrieved data
      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: ['Total Books', 'Borrowed Books', 'Returned Books'],
              datasets: [{
                  data: [totalBooks, borrowedBooks, returnedBooks],
                  backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                  hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                  hoverBorderColor: "rgba(234, 236, 244, 1)",
              }],
          },
          options: {
              maintainAspectRatio: false,
              tooltips: {
                  backgroundColor: "rgb(255,255,255)",
                  bodyFontColor: "#858796",
                  borderColor: '#dddfeb',
                  borderWidth: 1,
                  xPadding: 15,
                  yPadding: 15,
                  displayColors: false,
                  caretPadding: 10,
              },
              legend: {
                  display: false
              },
              cutoutPercentage: 80,
          },
      });
  },
  error: function(xhr, status, error) {
      console.error('Error fetching book counts:', error);
  }
});
