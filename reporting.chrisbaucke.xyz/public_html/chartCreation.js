//Note: series values are hard-coded, but do come from the actual database values

let viewsConfig = {
    type: "bar",
    title: {
        text: "Page Views for the Past Week",
        fontSize: 24
    },
    legend: {
        draggable: true
    },
    scaleX: {
        label: {text: "Day"},
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
    },
    scaleY: {
        label: {text: "Page Views"}
    },
    plot: {
        animation: {
            effect: "ANIMATION_EXPAND_BOTTOM",
            method: "ANIMATION_STRONG_EASE_OUT",
            sequence: "ANIMATION_BY_NODE",
            speed: 275
        }
    },
    series: [
        {
            values: [0, 1, 0, 0, 1, 4, 11]
        }
    ]
};
zingchart.render({
    id: "viewsChart",
    data: viewsConfig,
    height: 400,
    width: "100%"
});

var browserConfig = {
    "type": "pie",
    "title": {
      "text": "Browser Types Among Users"
    },
    "plot": {
        "valueBox": {
            "placement": "out",
            "text": "%t\n%npv%"
        }
    },
    "series": [{
        "values": [123],
        "text": "Firefox"
      },
      {
        "values": [23],
        "text": "Chrome"
      },
      {
        "values": [15],
        "text": "Edge"
      }
    ]
  };
   
  zingchart.render({
    id: 'browserChart',
    data: browserConfig,
    height: 400,
    width: "100%"
  });

