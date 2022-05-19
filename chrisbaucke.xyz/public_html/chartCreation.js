let bar3Config = {
    type: "bar",
    title: {
        text: "Temp Title",
        fontSize: 24
    },
    legend: {
        draggable: true
    },
    scaleX: {
        label: {text: "X Axis"},
        labels: ["1", "2", "3"]
    },
    scaleY: {
        label: {text: "Y Axis"}
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
            values: [1, 2, 3],
            text: "Set 1"
        },
        {
            values: [2, 3, 4],
            text: "Set 2"
        },
        {
            values: [5, 6, 7],
            text: "Set 3"
        }
    ]
};

zingchart.render({
    id: "3SeriesBar",
    data: bar3Config
});