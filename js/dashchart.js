// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}



// ---------- CHARTS ----------


      
var options = {
  series: [44, 55, 13, 43, 22, 23, 11,],
  chart: {
  width: 380,
  type: 'pie',
},
labels: ['Purok 1', 'Purok 2', 'Purok 3', 'Purok 4', 'Purok 5', 'Purok 6', 'Purok 7'],
responsive: [{
  breakpoint: 480,
  options: {
    chart: {
      width: 200
    },
    legend: {
      position: 'bottom'
    }
  }
}]
};

var chart = new ApexCharts(document.querySelector("#population-chart"), options);
chart.render();



// AREA CHART
var options = {
  series: [{
  name: 'RENTER',
  data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
}, {
  name: 'OWNERS',
  data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
}, {
  name: 'SHARER',
  data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
}],
  chart: {
  type: 'bar',
  height: 350
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '55%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: false
},
stroke: {
  show: true,
  width: 2,
  colors: ['transparent']
},
xaxis: {
  categories: ['Purok 1', 'Purok 2', 'Purok 3', 'Purok 4',
               'Purok 5', 'Purok 6', 'Purok 7', 'Purok 8', 'Purok 9'],
},

fill: {
  opacity: 1
}

};

var chart = new ApexCharts(document.querySelector("#household-chart"), options);
chart.render();

var options = {
  series: [{
  name: 'NEW CASES',
  data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
}, {
  name: 'RECOVERED',
  data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
}, {
  name: 'DEATH',
  data: [35, 41, 36, 26, 45, 48, 52, 53, 43]
},{
  name: 'VACCINATED',
  data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
}],
  chart: {
  type: 'bar',
  height: 350
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '55%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: false
},
stroke: {
  show: true,
  width: 2,
  colors: ['transparent']
},
xaxis: {
  categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
},

fill: {
  opacity: 1
}
};

var chart = new ApexCharts(document.querySelector("#covid-chart-1"), options);
chart.render();
