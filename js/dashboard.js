var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: 'Berber rugs',
      data: [12, 15, 3, 5, 6, 3],
      backgroundColor: [
        'rgba(57, 118, 67)',
        
      ],
      borderColor: [
        'rgba(57, 118, 67)',
        
      ],
      borderWidth: 1
    },
      {
      label: 'moroccan tajines',
      data: [17,12 , 19, 8, 7, 6],

      backgroundColor: [
        'rgba(214, 204, 153)',
        
      ],
      borderColor: [
        'rgba(214, 204, 153)',
       
      ],
      borderWidth: 1
    }
    ]

  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});


//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "berber rugs",
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: [
        'rgba(57, 118, 67)',
      ],
      borderColor: [
        'rgba(57, 118, 67)',
      ],
      borderWidth: 2
    },
    {
      label: " morroccan tajines",
      data: [28, 48, 40, 19, 86, 27, 90],
      backgroundColor: [
        'rgba(214, 204, 153)',
      ],
      borderColor: [
        'rgba(214, 204, 153)',
      ],
      borderWidth: 2
    }
    ]
  },
  options: {
    responsive: true
  }
});




//////////////////////

  // Sidebar Toggler
document.querySelector('.sidebar-toggler').addEventListener('click', function() {
  document.querySelector('.sidebar').classList.toggle('open');
  document.querySelector('.content').classList.toggle('open');
  return false;
});



const dashboard = document.getElementById('content-container');
const salesSection = document.getElementById('sales-section');
const revenueSection = document.getElementById('revenue-section');
const salesLink = document.getElementById('sales-link');
const revenueLink = document.getElementById('revenue-link');
const dashboardLink = document.getElementById('dashboard-link');

function showSalesSection() {
    salesSection.style.display = 'block';
    revenueSection.style.display = 'none';
    dashboard.style.display = 'none';
    
    salesLink.classList.add('active');
    revenueLink.classList.remove('active');
    dashboardLink.classList.remove('active');
}

function showDashboardSection() {
    dashboard.style.display = 'block';
    salesSection.style.display = 'none';
    revenueSection.style.display = 'none';

    dashboardLink.classList.add('active');
    salesLink.classList.remove('active');
    revenueLink.classList.remove('active');
}

function showRevenueSection() {
    dashboard.style.display = 'none';
    salesSection.style.display = 'none';
    revenueSection.style.display = 'block';

    revenueLink.classList.add('active');
    salesLink.classList.remove('active');
    dashboardLink.classList.remove('active');
}

salesLink.addEventListener('click', showSalesSection);
revenueLink.addEventListener('click', showRevenueSection);
dashboardLink.addEventListener('click', showDashboardSection);
showDashboardSection();


