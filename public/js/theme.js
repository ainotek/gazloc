"use strict";
! function(e) {
    e.matches = e.matches || e.mozMatchesSelector || e.msMatchesSelector || e.oMatchesSelector || e.webkitMatchesSelector, e.closest = e.closest || function(e) {
        return this ? this.matches(e) ? this : this.parentElement ? this.parentElement.closest(e) : null : null
    }
}(Element.prototype);
var demoMode = function() {
    var e, t, a, o, l, n, r, s, c = document.querySelector("#demoForm"),
        i = document.querySelector("#topnav"),
        d = document.querySelector("#topbar"),
        u = document.querySelector("#sidebar"),
        f = document.querySelector("#sidebarSmall"),
        p = document.querySelector("#sidebarUser"),
        b = document.querySelector("#sidebarSmallUser"),
        h = document.querySelector("#sidebarSizeContainer"),
        v = document.querySelectorAll('input[name="navPosition"]'),
        m = document.querySelectorAll('[class^="container"]'),
        g = (document.querySelectorAll("#stylesheetLight, #stylesheetDark"), document.querySelector("#stylesheetLight")),
        y = document.querySelector("#stylesheetDark"),
        S = {
            colorScheme: localStorage.getItem("dashkitColorScheme") ? localStorage.getItem("dashkitColorScheme") : "light",
            navPosition: localStorage.getItem("dashkitNavPosition") ? localStorage.getItem("dashkitNavPosition") : "sidenav",
            navColor: localStorage.getItem("dashkitNavColor") ? localStorage.getItem("dashkitNavColor") : "default",
            sidebarSize: localStorage.getItem("dashkitSidebarSize") ? localStorage.getItem("dashkitSidebarSize") : "base"
        };

    function C(e) {
        "topnav" == e ? $(h).collapse("hide") : $(h).collapse("show")
    }

    function k(e) {
        e.setAttribute("style", "display: none !important")
    }
    return function() {
        for (var e = window.location.search.substring(1).split("&"), t = 0; t < e.length; t++) {
            var a = e[t].split("="),
                o = a[0],
                l = a[1];
            "colorScheme" != o && "navPosition" != o && "navColor" != o && "sidebarSize" != o || (localStorage.setItem("dashkit" + o.charAt(0).toUpperCase() + o.slice(1), l), S[o] = l)
        }
    }(), "light" == (e = S.colorScheme) ? (g.disabled = !1, y.disabled = !0, e = "light") : "dark" == e && (g.disabled = !0, y.disabled = !1, e = "dark"),
        function(e) {
            if (i && d && u && f && p && b)
                if ("topnav" == e) {
                    k(d), k(u), k(f);
                    for (var t = 0; t < m.length; t++) m[t].classList.remove("container-fluid"), m[t].classList.add("container")
                } else if ("combo" == e) {
                    k(i), k(p), k(b);
                    for (t = 0; t < m.length; t++) m[t].classList.remove("container"), m[t].classList.add("container-fluid")
                } else if ("sidenav" == e) {
                    k(i), k(d);
                    for (t = 0; t < m.length; t++) m[t].classList.remove("container"), m[t].classList.add("container-fluid")
                }
        }(S.navPosition), t = S.navColor, u && f && i && ("default" == t ? (u.classList.add("navbar-light"), f.classList.add("navbar-light"), i.classList.add("navbar-light")) : "inverted" == t ? (u.classList.add("navbar-dark"), f.classList.add("navbar-dark"), i.classList.add("navbar-dark")) : "vibrant" == t && (u.classList.add("navbar-dark", "navbar-vibrant"), f.classList.add("navbar-dark", "navbar-vibrant"), i.classList.add("navbar-dark", "navbar-vibrant"))), "base" == (a = S.sidebarSize) ? k(f) : "small" == a && k(u), o = c, l = S.colorScheme, n = S.navPosition, r = S.navColor, s = S.sidebarSize, $(o).find('[name="colorScheme"][value="' + l + '"]').closest(".btn").button("toggle"), $(o).find('[name="navPosition"][value="' + n + '"]').closest(".btn").button("toggle"), $(o).find('[name="navColor"][value="' + r + '"]').closest(".btn").button("toggle"), $(o).find('[name="sidebarSize"][value="' + s + '"]').closest(".btn").button("toggle"), C(S.navPosition), document.body.style.display = "block", c && (c.addEventListener("submit", function(e) {
        e.preventDefault(),
            function(e) {
                var t = e.querySelector('[name="colorScheme"]:checked').value,
                    a = e.querySelector('[name="navPosition"]:checked').value,
                    o = e.querySelector('[name="navColor"]:checked').value,
                    l = e.querySelector('[name="sidebarSize"]:checked').value;
                localStorage.setItem("dashkitColorScheme", t), localStorage.setItem("dashkitNavPosition", a), localStorage.setItem("dashkitNavColor", o), localStorage.setItem("dashkitSidebarSize", l), window.location = window.location.pathname
            }(c)
    }), [].forEach.call(v, function(e) {
        e.parentElement.addEventListener("click", function() {
            C(e.value)
        })
    })), !0
}();
! function() {
    var e = {
            300: "#E3EBF6",
            600: "#95AAC9",
            700: "#6E84A3",
            800: "#152E4D",
            900: "#283E59"
        },
        t = {
            100: "#D2DDEC",
            300: "#A6C5F7",
            700: "#2C7BE5"
        },
        a = "#FFFFFF",
        o = "transparent",
        l = "Cerebri Sans",
        n = document.querySelectorAll('[data-toggle="chart"]'),
        r = document.querySelectorAll('[data-toggle="legend"]');

    function s(e) {
        var t = e.dataset.target,
            a = i(document.querySelector(t)),
            o = JSON.parse(e.dataset.add);
        e.checked ? function e(t, a) {
            for (var o in a) Array.isArray(a[o]) ? a[o].forEach(function(e) {
                t[o].push(e)
            }) : e(t[o], a[o])
        }(a, o) : function e(t, a) {
            for (var o in a) Array.isArray(a[o]) ? a[o].forEach(function(e) {
                t[o].pop()
            }) : e(t[o], a[o])
        }(a, o), a.update()
    }

    function c(e) {
        var t = e.dataset.target,
            a = i(document.querySelector(t)),
            o = JSON.parse(e.dataset.update),
            l = e.dataset.prefix,
            n = e.dataset.suffix;
        ! function e(t, a) {
            for (var o in a) "object" != typeof a[o] ? t[o] = a[o] : e(t[o], a[o])
        }(a, o), (l || n) && function(e, n, r) {
            n = n || "", r = r || "", e.options.scales.yAxes[0].ticks.callback = function(e) {
                if (!(e % 10)) return n + e + r
            }, e.options.tooltips.callbacks.label = function(e, t) {
                var a = t.datasets[e.datasetIndex].label || "",
                    o = e.yLabel,
                    l = "";
                return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">' + n + o + r + "</span>"
            }
        }(a, l, n), a.update()
    }

    function i(t) {
        var a = void 0;
        return Chart.helpers.each(Chart.instances, function(e) {
            t == e.chart.canvas && (a = e)
        }), a
    }
    "undefined" != typeof Chart && (Chart.defaults.global.responsive = !0, Chart.defaults.global.maintainAspectRatio = !1, Chart.defaults.global.defaultColor = e[600], Chart.defaults.global.defaultFontColor = e[600], Chart.defaults.global.defaultFontFamily = l, Chart.defaults.global.defaultFontSize = 13, Chart.defaults.global.layout.padding = 0, Chart.defaults.global.legend.display = !1, Chart.defaults.global.legend.position = "bottom", Chart.defaults.global.legend.labels.usePointStyle = !0, Chart.defaults.global.legend.labels.padding = 16, Chart.defaults.global.elements.point.radius = 0, Chart.defaults.global.elements.point.backgroundColor = t[700], Chart.defaults.global.elements.line.tension = .4, Chart.defaults.global.elements.line.borderWidth = 3, Chart.defaults.global.elements.line.borderColor = t[700], Chart.defaults.global.elements.line.backgroundColor = o, Chart.defaults.global.elements.line.borderCapStyle = "rounded", Chart.defaults.global.elements.rectangle.backgroundColor = t[700], Chart.defaults.global.elements.arc.backgroundColor = t[700], Chart.defaults.global.elements.arc.borderColor = a, Chart.defaults.global.elements.arc.borderWidth = 4, Chart.defaults.global.elements.arc.hoverBorderColor = a, Chart.defaults.global.tooltips.enabled = !1, Chart.defaults.global.tooltips.mode = "index", Chart.defaults.global.tooltips.intersect = !1, Chart.defaults.global.tooltips.custom = function(l) {
        var e = document.getElementById("chart-tooltip");
        if (e || ((e = document.createElement("div")).setAttribute("id", "chart-tooltip"), e.setAttribute("role", "tooltip"), e.classList.add("popover"), e.classList.add("bs-popover-top"), document.body.appendChild(e)), 0 !== l.opacity) {
            if (l.body) {
                var t = l.title || [],
                    n = l.body.map(function(e) {
                        return e.lines
                    }),
                    r = "";
                r += '<div class="arrow"></div>', t.forEach(function(e) {
                    r += '<h3 class="popover-header text-center">' + e + "</h3>"
                }), n.forEach(function(e, t) {
                    var a = '<span class="popover-body-indicator" style="background-color: ' + l.labelColors[t].backgroundColor + '"></span>',
                        o = 1 < n.length ? "justify-content-left" : "justify-content-center";
                    r += '<div class="popover-body d-flex align-items-center ' + o + '">' + a + e + "</div>"
                }), e.innerHTML = r
            }
            var a = this._chart.canvas,
                o = a.getBoundingClientRect(),
                s = (a.offsetWidth, a.offsetHeight, window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0),
                c = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0,
                i = o.top + s,
                d = o.left + c,
                u = e.offsetWidth,
                f = e.offsetHeight,
                p = i + l.caretY - f - 16,
                b = d + l.caretX - u / 2;
            e.style.top = p + "px", e.style.left = b + "px", e.style.visibility = "visible"
        } else e.style.visibility = "hidden"
    }, Chart.defaults.global.tooltips.callbacks.label = function(e, t) {
        var a = t.datasets[e.datasetIndex].label || "",
            o = e.yLabel,
            l = "";
        return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">' + o + "</span>"
    }, Chart.defaults.doughnut.cutoutPercentage = 83, Chart.defaults.doughnut.tooltips.callbacks.title = function(e, t) {
        return t.labels[e[0].index]
    }, Chart.defaults.doughnut.tooltips.callbacks.label = function(e, t) {
        var a = "";
        return a += '<span class="popover-body-value">' + t.datasets[0].data[e.index] + "</span>"
    }, Chart.defaults.doughnut.legendCallback = function(e) {
        var o = e.data,
            l = "";
        return o.labels.forEach(function(e, t) {
            var a = o.datasets[0].backgroundColor[t];
            l += '<span class="chart-legend-item">', l += '<i class="chart-legend-indicator" style="background-color: ' + a + '"></i>', l += e, l += "</span>"
        }), l
    }, Chart.scaleService.updateScaleDefaults("linear", {
        gridLines: {
            borderDash: [2],
            borderDashOffset: [2],
            color: e[300],
            drawBorder: !1,
            drawTicks: !1,
            zeroLineColor: e[300],
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2]
        },
        ticks: {
            beginAtZero: !0,
            padding: 10,
            callback: function(e) {
                if (!(e % 10)) return e
            }
        }
    }), Chart.scaleService.updateScaleDefaults("category", {
        gridLines: {
            drawBorder: !1,
            drawOnChartArea: !1,
            drawTicks: !1
        },
        ticks: {
            padding: 20
        },
        maxBarThickness: 10
    }), n && [].forEach.call(n, function(e) {
        e.addEventListener("change", function() {
            e.dataset.add && s(e)
        }), e.addEventListener("click", function() {
            e.dataset.update && c(e)
        })
    }), r && document.addEventListener("DOMContentLoaded", function() {
        [].forEach.call(r, function(e) {
            ! function(e) {
                var t = i(e).generateLegend(),
                    a = e.dataset.target;
                document.querySelector(a).innerHTML = t
            }(e)
        })
    }))
}(),
    function() {
        var e = {
                300: "#E3EBF6",
                600: "#95AAC9",
                700: "#6E84A3",
                800: "#152E4D",
                900: "#283E59"
            },
            t = localStorage.getItem("dashkitColorScheme") ? localStorage.getItem("dashkitColorScheme") : "light";

        function a() {
            Chart.defaults.global.defaultColor = e[700], Chart.defaults.global.defaultFontColor = e[700], Chart.defaults.global.elements.arc.borderColor = e[800], Chart.defaults.global.elements.arc.hoverBorderColor = e[800], Chart.scaleService.updateScaleDefaults("linear", {
                gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: e[900],
                    drawBorder: !1,
                    drawTicks: !1,
                    zeroLineColor: e[900],
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                },
                ticks: {
                    beginAtZero: !0,
                    padding: 10,
                    callback: function(e) {
                        if (!(e % 10)) return e
                    }
                }
            })
        }
        "undefined" != typeof Chart && (void 0 === demoMode ? a() : demoMode && "dark" == t && a())
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="autosize"]');
        "undefined" != typeof autosize && e && [].forEach.call(e, function(e) {
            ! function(e) {
                autosize(e)
            }(e)
        })
    }(),
    function() {
        var e = document.getElementById("headerChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "line",
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: "#283E59",
                            zeroLineColor: "#283E59"
                        },
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return "$" + e + "k"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">$' + o + "k</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Performance",
                    data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("performanceChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "line",
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return "$" + e + "k"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">$' + o + "k</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Performance",
                    data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("performanceChartAlias");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "line",
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return "$" + e + "k"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">$' + o + "k</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Performance",
                    data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("ordersChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "bar",
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return "$" + e + "k"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">$' + o + "k</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales",
                    data: [25, 20, 30, 22, 17, 10, 18, 26, 28, 26, 20, 32]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("ordersChartAlias");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "bar",
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return "$" + e + "k"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">$' + o + "k</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales",
                    data: [25, 20, 30, 22, 17, 10, 18, 26, 28, 26, 20, 32]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("devicesChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "doughnut",
            options: {
                tooltips: {
                    callbacks: {
                        title: function(e, t) {
                            return t.labels[e[0].index]
                        },
                        label: function(e, t) {
                            var a = "";
                            return a += '<span class="popover-body-value">' + t.datasets[0].data[e.index] + "%</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Desktop", "Tablet", "Mobile"],
                datasets: [{
                    data: [60, 25, 15],
                    backgroundColor: ["#2C7BE5", "#A6C5F7", "#D2DDEC"]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("weeklyHoursChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "bar",
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(e) {
                                if (!(e % 10)) return e + "hrs"
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(e, t) {
                            var a = t.datasets[e.datasetIndex].label || "",
                                o = e.yLabel,
                                l = "";
                            return 1 < t.datasets.length && (l += '<span class="popover-body-label mr-auto">' + a + "</span>"), l += '<span class="popover-body-value">' + o + "hrs</span>"
                        }
                    }
                }
            },
            data: {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                datasets: [{
                    data: [21, 12, 28, 15, 5, 12, 17, 2]
                }]
            }
        })
    }(),
    function() {
        var e = document.getElementById("sparklineChart");
        "undefined" != typeof Chart && e && new Chart(e, {
            type: "line",
            options: {
                scales: {
                    yAxes: [{
                        display: !1
                    }],
                    xAxes: [{
                        display: !1
                    }]
                },
                elements: {
                    line: {
                        borderWidth: 2
                    },
                    point: {
                        hoverRadius: 0
                    }
                },
                tooltips: {
                    custom: function() {
                        return !1
                    }
                }
            },
            data: {
                labels: new Array(12),
                datasets: [{
                    data: [0, 15, 10, 25, 30, 15, 40, 50, 80, 60, 55, 65]
                }]
            }
        })
    }(),
    function() {
        var e = document.querySelectorAll("#sparklineChartSocialOne, #sparklineChartSocialTwo, #sparklineChartSocialThree, #sparklineChartSocialFour");
        "undefined" != typeof Chart && e && [].forEach.call(e, function(e) {
            ! function(e) {
                new Chart(e, {
                    type: "line",
                    options: {
                        scales: {
                            yAxes: [{
                                display: !1
                            }],
                            xAxes: [{
                                display: !1
                            }]
                        },
                        elements: {
                            line: {
                                borderWidth: 2,
                                borderColor: "#D2DDEC"
                            },
                            point: {
                                hoverRadius: 0
                            }
                        },
                        tooltips: {
                            custom: function() {
                                return !1
                            }
                        }
                    },
                    data: {
                        labels: new Array(12),
                        datasets: [{
                            data: [0, 15, 10, 25, 30, 15, 40, 50, 80, 60, 55, 65]
                        }]
                    }
                })
            }(e)
        })
    }(),
    function() {
        var e = document.querySelectorAll('[name="ordersSelect"]'),
            t = document.getElementById("ordersSelectAll");
        e && t && t.addEventListener("change", function() {
            ! function(t) {
                [].forEach.call(e, function(e) {
                    e.checked = t.checked
                })
            }(this)
        })
    }(),
    function() {
        var e = document.querySelectorAll(".dropup, .dropright, .dropdown, .dropleft"),
            t = document.querySelectorAll(".dropdown-menu .dropdown-toggle");
        t && [].forEach.call(t, function(t) {
            t.addEventListener("click", function(e) {
                e.preventDefault(),
                    function(e) {
                        var t = e.parentElement.querySelector(".dropdown-menu"),
                            a = e.closest(".dropdown-menu").querySelectorAll(".dropdown-menu");
                        [].forEach.call(a, function(e) {
                            e !== t && e.classList.remove("show")
                        }), t.classList.toggle("show")
                    }(t), e.stopPropagation()
            })
        }), $(e).on("hide.bs.dropdown", function() {
            ! function(e) {
                var t = e.querySelectorAll(".dropdown-menu");
                t && [].forEach.call(t, function(e) {
                    e.classList.remove("show")
                })
            }(this)
        })
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="dropzone"]');
        "undefined" != typeof Dropzone && e && (Dropzone.autoDiscover = !1, Dropzone.thumbnailWidth = null, Dropzone.thumbnailHeight = null, [].forEach.call(e, function(e) {
            ! function(e) {
                var t = void 0,
                    a = e.dataset.options;
                a = a ? JSON.parse(a) : {};
                var o = {
                        previewsContainer: e.querySelector(".dz-preview"),
                        previewTemplate: e.querySelector(".dz-preview").innerHTML,
                        init: function() {
                            this.on("addedfile", function(e) {
                                1 == a.maxFiles && t && this.removeFile(t), t = e
                            })
                        }
                    },
                    l = Object.assign(a, o);
                e.querySelector(".dz-preview").innerHTML = "", new Dropzone(e, l)
            }(e)
        }))
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="flatpickr"]');
        "undefined" != typeof flatpickr && e && [].forEach.call(e, function(e) {
            ! function(e) {
                var t = e.dataset.options;
                t = t ? JSON.parse(t) : {}, flatpickr(e, t)
            }(e)
        })
    }(),
    function() {
        var e = document.querySelectorAll(".highlight");
        "undefined" != typeof hljs && e && [].forEach.call(e, function(e) {
            ! function(e) {
                hljs.highlightBlock(e)
            }(e)
        })
    }(),
    function() {
        var e, t = document.querySelectorAll(".kanban-category"),
            a = document.querySelectorAll(".kanban-add-link"),
            o = document.querySelectorAll(".kanban-add-form");

        function l(e) {
            var t = e.closest(".kanban-add"),
                a = t.querySelector(".card"),
                o = t.querySelector(".kanban-add-link"),
                l = t.querySelector(".kanban-add-form");
            o.classList.toggle("d-none"), l.classList.toggle("d-none"), a && a.classList.contains("card-sm") && (a.classList.contains("card-flush") ? a.classList.remove("card-flush") : a.classList.add("card-flush"))
        }
        "undefined" != typeof Draggable && t && (e = t, new Draggable.Sortable(e, {
            draggable: ".kanban-item",
            mirror: {
                constrainDimensions: !0
            }
        })), a && [].forEach.call(a, function(e) {
            e.addEventListener("click", function() {
                l(e)
            })
        }), o && [].forEach.call(o, function(e) {
            e.addEventListener("reset", function() {
                l(e)
            }), e.addEventListener("submit", function(e) {
                e.preventDefault()
            })
        })
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="lists"]'),
            t = document.querySelectorAll('[data-toggle="lists"] [data-sort]');
        "undefined" != typeof List && (e && [].forEach.call(e, function(e) {
            ! function(e) {
                var t = e.dataset.options;
                t = t ? JSON.parse(t) : {}, new List(e, t)
            }(e)
        }), t && [].forEach.call(t, function(e) {
            e.addEventListener("click", function(e) {
                e.preventDefault()
            })
        }))
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="map"]');
        "undefined" != typeof mapboxgl && e && [].forEach.call(e, function(e) {
            ! function(e) {
                var t = e.dataset.options;
                t = t ? JSON.parse(t) : {};
                var a = {
                        container: e,
                        style: "mapbox://styles/mapbox/light-v9",
                        scrollZoom: !1,
                        interactive: !1
                    },
                    o = Object.assign(t, a);
                mapboxgl.accessToken = "pk.eyJ1IjoiZ29vZHRoZW1lcyIsImEiOiJjanU5eHR4N2cybDU5NGVwOHZwNGprb3E0In0.msdw9q16dh8v4azJXUdiXg", new mapboxgl.Map(o)
            }(e)
        })
    }(),
    function() {
        var e = document.querySelectorAll(".navbar-nav .collapse");
        $(e).on("show.bs.collapse", function() {
            ! function(t) {
                var e = t.closest(".navbar-nav, .navbar-nav .nav").querySelectorAll(".collapse");
                [].forEach.call(e, function(e) {
                    e !== t && $(e).collapse("hide")
                })
            }(this)
        })
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="popover"]');
        e && $(e).popover()
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="quill"]');
        "undefined" != typeof Quill && e && [].forEach.call(e, function(e) {
            ! function(e) {
                var t = e.dataset.options;
                t = t ? JSON.parse(t) : {};
                var a = Object.assign(t, {
                    modules: {
                        toolbar: [
                            ["bold", "italic"],
                            ["link", "blockquote", "code", "image"],
                            [{
                                list: "ordered"
                            }, {
                                list: "bullet"
                            }]
                        ]
                    },
                    theme: "snow"
                });
                new Quill(e, a)
            }(e)
        })
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="select"]');

        function l(e) {
            if (!e.id) return e.text;
            var t = e.element.dataset.avatarSrc;
            if (t)(a = document.createElement("div")).innerHTML = '<span class="avatar avatar-xs mr-3"><img class="avatar-img rounded-circle" src="' + t + '" alt="' + e.text + '"></span><span>' + e.text + "</span>";
            else var a = e.text;
            return a
        }
        jQuery().select2 && e && [].forEach.call(e, function(e) {
            ! function(e) {
                var t = e.dataset.options;
                t = t ? JSON.parse(t) : {};
                var a = {
                        dropdownParent: $(e).closest(".modal").length ? $(e).closest(".modal") : $(document.body),
                        templateResult: l
                    },
                    o = Object.assign(t, a);
                $(e).select2(o)
            }(e)
        })
    }(),
    function() {
        var e = document.querySelectorAll('[data-toggle="tooltip"]');
        e && $(e).tooltip()
    }();
