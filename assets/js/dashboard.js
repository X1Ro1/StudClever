var stats = [
    {"percent": 32, "color": "green"},
    {"percent": 54, "color": "blue"}, 
    {"percent": 5, "color": "grey"}, 
    {"percent": 78, "color": "black"},
    {"percent": 41, "color": "orange"},
    {"percent": 5, "color": "red"},
    {"percent": 29, "color": "purple"}
];
var total_count = 0;
for (let i = 0; i < stats.length; i++) {
    total_count += stats[i].percent;
};

stats.sort((a, b) => a.percent < b.percent ? 1 : -1);

const circle_graph = document.getElementById("cirle_graph_&01");

var total_percent = 0;
for (let i = 0; i < stats.length; i++) {
    element = stats[i]; 

    const stat_elem = document.createElement("div");
    let percent = Math.round( (element.percent/total_count) * 100);
    console.log(element)
    let settings = `--p:${percent + 1};--c:var(--cl-${element.color});--b:15px;rotate: 0.${total_percent}turn`;
    console.log(settings)
    stat_elem.className = "pie no-round";
    stat_elem.setAttribute("style", settings);
    circle_graph.appendChild(stat_elem);
    total_percent += percent;
}
