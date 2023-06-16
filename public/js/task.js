$(document).ready(function(t, e, i) {
    function t(t) {
        t.each(function() {
            var t = {
                title: $.trim($(this).text())
            };
            $(this).data("eventObject", t), $(this).draggable({
                zIndex: 1070,
                revert: !0,
                revertDuration: 0
            })
        })
    }
    t($("#external-events div.external-event"));
    var e = new Date,
        i = e.getDate(),
        n = e.getMonth(),
        r = e.getFullYear();
    $("#calendar").fullCalendar({
        header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay,list"
        },
        
        editable: !0,
        selectable: !0,
        droppable: !0,
        drop: function(t, e) {
            var i = $(this).data("eventObject"),
                n = $.extend({}, i);
            n.start = t, n.allDay = e, n.backgroundColor = $(this).css("background-color"), n.borderColor = $(this).css("border-color"), $("#calendar").fullCalendar("renderEvent", n, !0), $("#drop-remove").is(":checked") && $(this).remove()
        },
        
        eventClick: function(calEvent, jsEvent, view) {
            var $this = this;
            $("#editEname").val(calEvent.title)
            $("#editStarts").datetimepicker("date", calEvent.start._d)
            $("#editEvent").modal({
                backdrop: 'static'
            });
            $("#editEvent").find('.delete-event').show().end().find('.delete-event').unbind('click').click(function() {
                $("#calendar").fullCalendar('removeEvents', function(ev) {
                    return (ev._id == calEvent._id);
                });
                $("#editEvent").modal('hide');
            });
            $("#editEvent").find('form').on('submit', function() {
                calEvent.title = $("#editEname").val();
                calEvent.start = new Date($("#editStarts").data("datetimepicker").date())
                $("#calendar").fullCalendar('updateEvent', calEvent);
                $("#editEvent").modal('hide');
                return false;
            });    
        },
        

        select: function(start, end, allDay) {
            var $this = this;
            $("#addEvent").modal({
                backdrop: 'static'
            });
            $("#taskDate").datetimepicker("date", start)
            var form = $("#addEventTask");
            $("#addEvent").find('.delete-event').hide().end().find('.save-event').show().end().find('.save-event').unbind('click').click(function() {
                form.submit();
            });

            $("#addEventTask").on('submit', function() {
                var title = form.find("#taskName").val();
                var start = form.find("#taskDate").val();
                var categoryClass = form.find("#addColor [type=radio]:checked").data("color");
                if (title !== null && title.length != 0) {
                    $("#calendar").fullCalendar('renderEvent', {
                        title: title,
                        start: start,
                        allDay: false,
                        className: categoryClass
                    }, true);
                    $("#addEvent").modal('hide');
                    
                } else {
                    alert('task not working');
                }
                
                return false;
            });
            $("#calendar").fullCalendar('unselect');
        }
        
    });
    
    var a = "#3c8dbc";
    $("#color-chooser-btn");
    $("#color-chooser > li > a").on("click", function(t) {
        t.preventDefault(), a = $(this).css("color"), $("#add-new-event").css({
            "background-color": a,
            "border-color": a
        })
    }), $("#add-new-event").on("click", function(e) {
        e.preventDefault();
        var i = $("#new-event").val();
        if (0 != i.length) {
            var n = $("<div />");
            n.css({
                "background-color": a,
                "border-color": a,
                color: "#fff"
            }).addClass("external-event"), n.html(i), $("#external-events").prepend(n), t(n), $("#new-event").val("")
        }
        
    });

    
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');


})