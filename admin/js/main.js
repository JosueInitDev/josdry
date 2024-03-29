// Ghraps

const sales = document.getElementById("sales");
const earning = document.getElementById("earning");
const products = document.getElementById("products");

Chart.defaults.color = "#927685";
Chart.defaults.borderColor = "#33202c";

new Chart(sales, {
  type: "bar",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July"],
    datasets: [
      {
        label: "My Revenue",
        data: [380, 200, 500, 300, 200, 400, 100],
        backgroundColor: ["rgba(155,128,151,1"],
        hoverBackgroundColor: "#ff90b8",
      },
    ],
  },

  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

new Chart(earning, {
  type: "line",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
    datasets: [
      {
        label: "My Revenue",
        data: [380, 200, 500, 300, 200],
        backgroundColor: ["rgba(155,128,151,1"],
        hoverBackgroundColor: "#ff90b8",
      },
    ],
  },

  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});

new Chart(products, {
  type: "doughnut",
  data: {
    labels: ["Sites web", "Applis", "Designs", "IA", "Autres"],
    datasets: [
      {
        label: "Total contacts",
        data: [380, 200, 500, 140, 254],
        hoverBackgroundColor: "#ff90b8",
      },
    ],
  },

  options: {
    responsive: true,
  },
});
