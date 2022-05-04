


var invest = document.getElementById('investimento');
var lazer = document.getElementById('lazer');
var gfixo = (invest + lazer) - 100;


var xValues = ["Gastos Fixos", "Investimentos", "Lazer"];
//var yPlanValues = [gfixo, invest, lazer];
var yPlanValues = [70, 20, 10];
var yRealValues = [60, 5, 35];
var barColors = [
   "#253659",
   "#04BF9D",
   "#F27D52",
];

new Chart("Planejamento", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yPlanValues
      }]
   },
   options: {
      title: {
         display: true,
         text: "Planejamento"
      }
   }
});

new Chart("Realidade", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yRealValues
      }]
   },
   options: {
      title: {
         display: true,
         text: "Realidade",
      }
   }
});

new Chart("planEdicao", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yPlanValues
      }]
   },
   options: {
      title: {
         display: true,
         text: "Planejamento"
      }
   }
});

new Chart("realEdicao", {
   type: "pie",
   data: {
      labels: xValues,
      datasets: [{
         backgroundColor: barColors,
         data: yRealValues
      }]
   },
   options: {
      title: {
         display: true,
         text: "Realidade",
      }
   }
});
