$(document).ready(function () {
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == "") {
        filename = "index.html"
    }
    $("header .nav-item .nav-link").removeClass("active");
    $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
})
function createToast(message) {
    let toast = document.createElement("div")
    $(toast).append(`<div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            <p>${message}</p>
        </div>
        <button type="button" class="ms-auto" data-bs-dismiss="toast" aria-label="Close"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
</div>`)
    $(".toast-container").append(toast)
    setTimeout(() => {
        $(toast).remove()
    }, 5000);
}
$(document).ready(function () {
    $(".nav-toggler").click(function () {
        if ($(this).hasClass("collapsed")) {
            $(this).removeClass("collapsed")
            $("nav.side-nav").removeClass("mini-sidebar")
            createToast("Sidebar mini Deactivated!")
            // setTimeout(() => {
            $(".full-content").show()
            // }, 500);
        }
        else {
            $(this).addClass("collapsed")
            createToast("Sidebar mini Activated!")
            $("nav.side-nav").addClass("mini-sidebar")
            $(".full-content").hide()
        }
    })
});

// chart work
function changeChartData(chart, data) {
    chart.data.datasets[0].data = data
    chart.update()
}
const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
let dataPerformanceChart = [[100, 70, 90, 70, 85, 60, 75, 60, 90, 80, 110, 100],
[60, 70, 65, 75, 65, 80, 75, 90, 85, 100, 90, 110],
[90, 80, 85, 75, 90, 70, 80, 65, 100, 60, 70, 65]
]
const performanceChartConfig = {
    type: 'line',
    data: {
        labels: months,
        datasets: [
            {
                label: 'Dataset 1',
                data: dataPerformanceChart[0],
                borderColor: "#e14eca",
                pointBackgroundColor: "#e14eca",
                backgroundColor: 'rgba(255,255,255,0.01)',
                tension: 0.4
            }
        ]
    },
    options: {
        fill: true,
        interaction: {
            intersect: false
        },
        responsive: true,
        plugins: {
            legend: {
                display: false,
            },
            title: {
                display: false,
            }
        }
    },
}
const performanceChartCtx = document.getElementById('performanceChart');
const performanceChart = new Chart(performanceChartCtx, performanceChartConfig)
// change chart data work
$(document).ready(function () {
    $(".graph-card .btn-content button").click(function () {
        $(this).siblings().removeClass("active")
        $(this).addClass("active")
        $(this).parents(".graph-card").find("canvas").data("chart")
        changeChartData(performanceChart, dataPerformanceChart[$(this).index()])
    })
});




// form work
// hide show password
$(".pswrd-cont a").click(function () {
    if ($(this).hasClass("hidden")) {
        $(this).parents("form").find(".pswrd-cont").children("input").attr("type", "text")
        $(this).removeClass("hidden")
        $(this).parents("form").find(".fa-eye").removeClass("fa-eye").addClass("fa-eye-slash")
    }
    else {
        $(this).parents("form").find(".pswrd-cont").children("input").attr("type", "password")
        $(this).addClass("hidden")
        $(this).parents("form").find(".fa-eye-slash").addClass("fa-eye").removeClass("fa-eye-slash")
    }
})

$(document).ready(function () {
    $(".date-input").datepicker({autoClose: true,viewStart: 2});
    $('.time-input').mdtimepicker();
});
$(() => {
    let options = {
       search: true,
       hover: false,
       responsive: true,
       checkboxes: true,
       scrollToSelect: true,
       transition: 400,
       closeAfterSelect: true,
       beforeRenderList: (item) => {
          return `<img src="images/flags/${item.value.toLowerCase()}.svg" width="20" /> ${item.text}`
       },
       onSelect: (element, item) => {
          console.log(element, item)
       }
    }
    $('select.country-select').customSelect(options)
})
$(".custom-select").customSelect({
    hover: false,
    responsive: true,
    checkboxes: true,
    scrollToSelect: true,
    transition: 400,
    closeAfterSelect: true,
})

// range slider
$(".range-double").slider({
    range: true,
    min: 0,
    max: 100,
    values: [30,70],
    slide: function(event,ui){
      $(this).prev().val(ui.values[0]+"-"+ui.values[1]);
      $(this).parents(".input-field").find(".value").html(ui.values[0]+" - " + ui.values[1])
    }
});
$(".range-single").slider({
    range: 'min',
    min: 0,
    max: 100,
    value: 50,
    slide: function(event,ui){
      $(this).prev().val(ui.value);
      $(this).parents(".input-field").find(".value").html(ui.value)
    }
});

// tag input work
$(".tag-input").keyup(function (e) {
    if(e.keyCode == 13){
        $(this).before(`<span class="tags">${$(this).val()} <button onclick="removeTag(this)"><i class="fa-light fa-xmark"></i></button></span>`)
        $(this).val("")
    }
});
function removeTag(elem){
    $(elem).parent().remove()
}

// checkbox work
$(".custom-switch input").click(function(){
    if($(this).prop("checked")){
        $(this).parent().addClass("checked")
    }
    else{
        $(this).parent().removeClass("checked")
    }
})

$(".img-upload").change(function(e) {
    let inpElem = $(this)
    var reader = new FileReader();
    reader.onload = function(){
        var output = $(inpElem).siblings("img")
        console.log(output)
        $(output).attr('src',reader.result);
    };
    reader.readAsDataURL(e.target.files[0]);
    $(this).parents(".input-field").find(".img-upload-btn").text("Change Image")
  })