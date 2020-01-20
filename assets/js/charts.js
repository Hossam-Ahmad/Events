const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

var homeBar = new Morris.Area({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [{
            year: '2019-02-1',
            views: 0
        },
        {
            year: '2019-02-2',
            views: 0
        },
        {
            year: '2019-02-3',
            views: 0
        },
        {
            year: '2019-02-4',
            views: 3
        },
        {
            year: '2019-02-5',
            views: 4
        },
        {
            year: '2019-02-5',
            views: 4
        },
        {
            year: '2019-02-06',
            views: 4
        },
        {
            year: '2019-02-07',
            views: 5
        },
        {
            year: '2019-02-08',
            views: 5
        },
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['views'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['views'],
    resize: true,
    xLabels: "day",
    gridTextColor: '#474e54',
    gridLineColor: '#eef0f2',
    goalLineColors: '#e3e6ea',
    lineWidth: 1,
    //   hideHover:"always",
    pointSize: 0,
    lineColors: ["#6aedc7"],
    fillOpacity:0.5,
    xLabelFormat: function(year) {
        // return year.getDate()+'/'+(year.getMonth()+1)+'/'+year.getFullYear(); 
        return year.getDate(); 
        },
    dateFormat: function (year) {
        d = new Date(year);
        return "Page views total - "+monthNames[d.getMonth()]+" "+d.getDate() + ', ' + d.getFullYear();
    },
});
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    homeBar.redraw();
    $(window).trigger('resize');
})