$(document).ready(function (t, e, i) {
  var SITEURL = "{{ url('/') }}";
  function t(t) {
    t.each(function () {
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
  $("#calendar1").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay,list"
    },
    buttonText: {
      today: "today",
      month: "month",
      week: "week",
      week: "week"
    },
    events: "/hel",
    editable: !0,
    selectable: !0,
    droppable: !0,
    drop: function (t, e) {
      var i = $(this).data("eventObject"),
        n = $.extend({}, i);
      n.start = t, n.allDay = e, n.backgroundColor = $(this).css("background-color"), n.borderColor = $(this).css("border-color"), $("#calendar").fullCalendar("renderEvent", n, !0), $("#drop-remove").is(":checked") && $(this).remove()
    },

    eventDrop: function (info) {


      var formattedDate = info.start.format('YYYY-MM-DD');

      // Access the new event date and perform your desired actions
      console.log('New event date:', info);
      $.ajax({
        

        url: eventUpdateRoute,
        type: 'POST',
        data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          eventId: info.id,
          eventNewDate: formattedDate,
        },
        error: function (xhr, textStatus, error) {
          // Error occurred while updating event
          console.log(xhr.responseText);
        },
        success: function (response) {
          if (response.success) {
            if (response.reload) {
              // Display a success message
              alert('Événement mis à jour avec succès.');

              // Reload the page after the user clicks "OK"
              location.reload();
            } else {
              // Handle success without reloading
              // Display a success message or perform any other action
              alert('Événement mis à jour avec succès.');
            }
          } else {
            // Handle failure
            alert(response.message);
            location.reload();
          }
        }

      });


    },



    eventClick: function (calEvent, jsEvent, view) {
      $("#note-id").val(calEvent.id);
      var noteId = calEvent.id;
      var note = calEvent.note;
      localStorage.setItem('noteId', noteId);
      localStorage.setItem('note', note);
      $("#editEname1").val(calEvent.title);
      $("#start_date").val(moment(calEvent.start).format("YYYY-MM-DDTHH:mm:ss"));
      $("#editEvent1").modal({
        backdrop: 'static'
      });
    

     
  


      $("#editEvent1").find('.delete-event').show().end().find('.delete-event').unbind('click').click(function () {
        console.log("Event ID:", calEvent.id); // Log the event ID

        if (confirm("Are you sure you want to delete this event?")) {
          var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve the CSRF token value
          $.ajax({
            url: '/events/' + calEvent.id,
            type: 'DELETE',
            data: {
              _token: csrfToken // Include the CSRF token in the data payload
            },
            success: function (response) {
              // Event deleted successfully
              $('#calendar1').fullCalendar('removeEvents', calEvent.id);
              $("#editEvent1").modal('hide');
            },
            error: function (xhr, textStatus, error) {
              // Error occurred while deleting event
              console.log(xhr.responseText);
            }
          });
        }
      });
      $("#editEvent1").find('form').on('submit', function (e) {
        e.preventDefault();
        var eventData = {
          name: $("#editEname1").val(),
          start_date: $("#start_date").val(),
        };
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve the CSRF token value
        $.ajax({
          url: '/events/' + calEvent.id,
          type: 'PUT',
          data: {
            _token: csrfToken, // Include the CSRF token in the data payload
            name: eventData.name,
            start_date: eventData.start_date // Include the event data
          },
          success: function (response) {
            // Event updated successfully
            calEvent.title = eventData.name;
            calEvent.start = moment(eventData.start_date).toDate();
            $("#calendar1").fullCalendar('updateEvent', calEvent);
            $("#editEvent1").modal('hide');
          },
          error: function (xhr, textStatus, error) {
            // Error occurred while updating event
            console.log(xhr.responseText);
          },
           success: function (response) {
            if (response.success) {
              if (response.reload) {
                // Reload the page using JavaScript
                location.reload();
              } else {
                // Handle success without reloading
                // Display a success message or perform any other action
                location.reload();
              }
            } else {
              // Handle failure
              alert(response.message);
            }
          }
        });
      });
      console.log("Event ID:", calEvent); // Log the event ID
    },





    select: function (start, end, allDay) {
      var $this = this;
      $("#addEvent1").modal({
        backdrop: 'static'
      });
      $("#eventStarts1").datetimepicker("date", start)
      var form = $("#addEventForm1");
      $("#addEvent1").find('.delete-event').hide().end().find('.save-event').show().end().find('.save-event').unbind('click').click(function () {
        form.submit();
      });




      $("#calendar1").fullCalendar('unselect');
    }
  });

  var a = "#3c8dbc";
  $("#color-chooser-btn");
  $("#color-chooser > li > a").on("click", function (t) {
    t.preventDefault(), a = $(this).css("color"), $("#add-new-event").css({
      "background-color": a,
      "border-color": a
    })
  }), $("#add-new-event").on("click", function (e) {
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

})
