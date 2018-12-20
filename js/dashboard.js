// Histogramme des fonctions
new Chart(document.getElementById("chart1"), {
    type: 'bar',
    data: {
      labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
      datasets: [
        {
          label: "uploads",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#FFD494", "#607D8B"],
          data: [8,10,5,18,9,7,15]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Nombre de fichiers envoyés - semaine 4'
      }
    }
});

//Diagrame à courbe
new Chart(document.getElementById("chart2"), {
    type: 'line',
    data: {
      labels: ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"],
      datasets: [{ 
          data: [20,17,24,12,15,19,8],
          borderColor: "#3e95cd",
          fill: true,
            label : "téléchargements"
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Nombre de fichiers téléchargés - semaine 4'
      }
    }
  });


  //Diagrame pour les type de fichier
  new Chart(document.getElementById("chart3"), {
    type: 'doughnut',
    data: {
      labels: [".jpg", ".png", ".gif", ".zip", ".mp3", ".mp4"],
      datasets: [
        {
          label: "type de fichier",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#FFD494"],
          data: [150,98,67,54,31,23]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Nombre de fichier par type - semaine 4'
      }
    }
});
 