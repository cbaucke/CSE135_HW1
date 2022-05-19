//Note: series values are hard-coded, but do come from the actual database values

let bar3Config = {
    type: "bar",
    title: {
        text: "Activity Counts of Three Users",
        fontSize: 24
    },
    legend: {
        draggable: true
    },
    scaleX: {
        label: {text: "Activity Type"},
        labels: ["Mouse Movement", "Click", "Key Press"]
    },
    scaleY: {
        label: {text: "Count"}
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
            values: [7, 0, 8],
            text: "User 1"
        },
        {
            values: [7, 1, 1],
            text: "User 2"
        },
        {
            values: [6, 5, 1],
            text: "User 3"
        }
    ]
};
zingchart.render({
    id: "3SeriesBar",
    data: bar3Config
});

let bar2Config = {
    type: "bar",
    title: {
        text: "Load Times Based on User Language",
        fontSize: 24
    },
    legend: {
        draggable: true
    },
    scaleX: {
        label: {text: "Measurement"},
        labels: ["Average Load Time"]
    },
    scaleY: {
        label: {text: "Time (ms)"}
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
            values: [133.07],
            text: "English Users"
        },
        {
            values: [86.75],
            text: "Spanish Users"
        }
    ]
};
zingchart.render({
    id: "2SeriesBar",
    data: bar2Config
});

var pieConfig = {
    "type": "pie",
    "title": {
      "text": "User Preferred Languages"
    },
    "plot": {
        "valueBox": {
            "placement": "out",
            "text": "%t\n%npv%"
        }
    },
    "series": [{
        "values": [33],
        "text": "English"
      },
      {
        "values": [12],
        "text": "Spanish"
      },
      {
        "values": [10],
        "text": "French"
      }
    ]
  };
   
  zingchart.render({
    id: 'pieChart',
    data: pieConfig,
    height: 400,
    width: "100%"
  });

