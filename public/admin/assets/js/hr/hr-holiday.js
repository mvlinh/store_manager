(()=>{function e(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}$((function(t){var a;$(".fc-datepicker").datepicker({dateFormat:"dd MM yy",zIndex:1}),$('[data-toggle="modaldatepicker"]').datepicker({autoHide:!0,zIndex:999998}),$("#hr-holiday").DataTable((e(a={order:[[0,"desc"]]},"order",[]),e(a,"columnDefs",[{orderable:!1,targets:[4]}]),e(a,"language",{searchPlaceholder:"Search...",sSearch:""}),a)),$(".select2").select2({minimumResultsForSearch:1/0,width:"100%"})})),document.addEventListener("DOMContentLoaded",(function(){var t,a=document.getElementById("calendar1"),r=new FullCalendar.Calendar(a,(e(t={headerToolbar:{left:"prev",center:"title",right:"next"},navLinks:!0,businessHours:!0,editable:!0,selectable:!0,selectMirror:!0,droppable:!0,drop:function(e){document.getElementById("drop-remove").checked&&e.draggedEl.parentNode.removeChild(e.draggedEl)},select:function(e){var t=prompt("Event Title:");t&&r.addEvent({title:t,start:e.start,end:e.end,allDay:e.allDay}),r.unselect()},eventClick:function(e){confirm("Are you sure you want to delete this event?")&&e.event.remove()}},"editable",!0),e(t,"dayMaxEvents",!0),e(t,"eventRender",(function(e,t){"Halfday"==e.description.toString()&&t.find(".fc-event-time").after($('<span class="fc-event-icons"></span>').html("<i class='fe fe-view'></i> "))})),e(t,"events",[{title:"Pongal",start:"2021-01-14",color:"rgba(255, 173, 0, 0.1)"},{title:"Republic",start:"2021-01-26",color:"rgba(255, 173, 0, 0.1)"}]),t));r.render()}))})();