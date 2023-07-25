<template>
  <div>
    <h1>Climate Metrics Dashboard</h1>

    <!-- Carte pour la température globale moyenne -->
    <ejs-card>
      <div>
        <h2>Global Average Temperature</h2>
        <ejs-chart :id="chartId" :dataSource="temperatureData" :xName="xName" :yName="yName" :type="type"></ejs-chart>
      </div>
    </ejs-card>

  </div>
</template>

<script>
import axios from "axios";
import { Chart } from '@syncfusion/ej2-vue-charts';
import { Card } from '@syncfusion/ej2-vue-navigations';

export default {
  data() {
    return {
      chartId: "climate-chart",
      temperatureData: [],
      xName: "month",
      yName: "value",
      type: "Line",
    };
  },
  mounted() {
    this.fetchTemperatureData();
  },
  methods: {
    fetchTemperatureData() {
      axios.get("/api/climate-metrics")
        .then(response => {
          this.temperatureData = response.data;
          // Initialiser le composant Chart après le rendu avec les nouvelles données
          new Chart({ dataSource: this.temperatureData }, "#" + this.chartId).refresh();

          // Ajouter un titre au graphique
          document.getElementById(this.chartId + "_title").innerHTML = "Global Average Temperature";

          // Ajouter une légende au graphique
          document.getElementById(this.chartId + "_chart_legend").innerHTML = "Temperature";

          // Ajouter une annotation au graphique
          document.getElementById(this.chartId + "_Annotation_0").innerHTML = "Source: NASA Goddard Institute for Space Studies";

          // Ajouter un axe des abscisses au graphique
          document.getElementById(this.chartId + "_Axis_0_Label_0").innerHTML = "Jan";
          document.getElementById(this.chartId + "_Axis_0_Label_1").innerHTML = "Feb";
          document.getElementById(this.chartId + "_Axis_0_Label_2").innerHTML = "Mar";
          document.getElementById(this.chartId + "_Axis_0_Label_3").innerHTML = "Apr";
          document.getElementById(this.chartId + "_Axis_0_Label_4").innerHTML = "May";
          document.getElementById(this.chartId + "_Axis_0_Label_5").innerHTML = "Jun";
          document.getElementById(this.chartId + "_Axis_0_Label_6").innerHTML = "Jul";
          document.getElementById(this.chartId + "_Axis_0_Label_7").innerHTML = "Aug";
          document.getElementById(this.chartId + "_Axis_0_Label_8").innerHTML = "Sep";
          document.getElementById(this.chartId + "_Axis_0_Label_9").innerHTML = "Oct";
          document.getElementById(this.chartId + "_Axis_0_Label_10").innerHTML = "Nov";
          document.getElementById(this.chartId + "_Axis_0_Label_11").innerHTML = "Dec";



        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>