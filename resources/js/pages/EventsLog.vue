<template>
  <div>
    <h1>Climate Events Log</h1>

    <ejs-grid :dataSource="eventsData">
      <e-columns>
        <e-column field="date" headerText="Date"></e-column>
        <e-column field="location" headerText="Location"></e-column>
        <e-column field="description" headerText="Description"></e-column>
        <e-column field="event_type" headerText="Event Type"></e-column>
      </e-columns>
    </ejs-grid>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      eventsData: [],
    };
  },
  mounted() {
    this.fetchEventsData();
  },
  methods: {
    fetchEventsData() {
      axios.get("/api/climate-events")
        .then(response => {
          this.eventsData = response.data;
          // Initialiser le composant Grid après le rendu avec les nouvelles données
          new Grid({ dataSource: this.eventsData }, "#Grid").refresh();
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>