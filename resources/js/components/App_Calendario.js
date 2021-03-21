import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Cookies from 'universal-cookie';
import Configuracion from './Configuration';
import 'react-calendar/dist/Calendar.css';
import Calendar from 'react-calendar';

class App_Calendario extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();

        this.state = {
          error: null,
          isLoaded: false,
          activeSession: cookies.get('authlog'),
          dateSelected: "",
          titleModal: "",
          availableToEvent: []
        };
      }

      onClickday(e)
      {       
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {   
          document.getElementById("btnModal").click();
          console.log(e.getDate(),e.getMonth()+1,e.getFullYear());
          var mes = e.getMonth()+1;
          this.setState({
            dateSelected: e.getFullYear()+"-"+mes+"-"+e.getDate(),
            titleModal: e.getDate()+"-"+mes+"-"+e.getFullYear()
          });
          this.loadAvailableDates(e.getDate(),e.getMonth()+1,e.getFullYear());  
        } 
        else
        {
          alert("Debes estas Logeado para poder agendar");
        }     
      }

      activeCalendario()
      {     
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {   
          document.getElementById("calendarData").style.display = "block";
        }
        else
        {
          alert("Debes estas Logeado para poder agendar");
        }
      }

      removeItem(button) {
          var item = getItem(button),
              confirmMessage;

          if (item) {
              confirmMessage = item.getAttribute("data-confirm");

              if (!confirmMessage || window.confirm(confirmMessage)) {
                  item.parentNode.removeChild(item);
              }
          }
          else {
              throw new Error("No item found");
          }
      }

      asignarCita(e)
      {
        if (this.state.activeSession != "" && this.state.activeSession != undefined) { 
          var horario = e.target.getAttribute("data-id");
          var fecha = e.target.getAttribute("data-fecha");
          var producto = $("#spanProductID").text();
          if(producto == "" || producto == undefined) producto = 0;
          e.preventDefault();
          try {

              let config = {
                method: 'POST',
                headers: {
                  'Accept': 'application/json',
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({horario: horario,fecha: fecha,producto: producto})
              }

              fetch(Configuracion.url_principal+"api/asignarAgenda",config)
              .then(res => res.json())
              .then(
                (result) => {
                  alert("Agendado para "+result.fecha);

                  document.getElementById("closeModal").click();
                },
                
                (error) => {
                  this.setState({
                    isLoaded: true,
                    error
                  });
                }
              );

          } catch (error) {
              console.log(error);
          }
        }
        else
        {
          alert("Debes estas Logeado para poder agendar");
        }
      }

      loadAvailableDates(day,month,year)
      {
        if (this.state.activeSession != "" && this.state.activeSession != undefined) { 
          fetch(Configuracion.url_principal+"api/availableDaysFor/"+this.props.type+"/"+day+"/"+month+"/"+year)
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                availableToEvent: result
              });
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          );
        }
        else
        {
          alert("Debes estas Logeado para poder agendar");
        }
      }


    render(){

        return (
        <div className="contenedor-calendario agendar-cita">
            <div id="calendarData">
              <Calendar
                onChange={this.onChange}
                value={this.state.date}
                onClickDay={this.onClickday.bind(this)}
                tileClassName="btn-tile-calendario"
                minDate={new Date()}
                tileDisabled={({date, view }) => 
                (view === 'month') && (date.toLocaleDateString('en-us', {weekday: 'long'}) === "Sunday" || date.toLocaleDateString('en-us', {weekday: 'long'}) === "Saturday")}
              />
            </div>
            <button id="btnModal" type="button" style={{display: "none"}} className="btn btn-primary" data-toggle="modal" data-target="#modalAssignCita">
            </button>
            <div className="modal fade" id="modalAssignCita" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div className="modal-dialog" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <h5 className="modal-title">Horario Disponible para el {this.state.titleModal}</h5>
                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div className="modal-body">
                    <ul>
                  {this.state.availableToEvent.map((spaceFree) => (
                    <li key={spaceFree.id} onClick={this.asignarCita.bind(this)} className="list-group-item list-group-item-action cursor-pointer" data-id={spaceFree.id} data-fecha={this.state.dateSelected}> {spaceFree.horario} </li>
                  ))}
                  </ul>
                  </div>                  
                  <div className="modal-footer text-center">
                    <button id='closeModal' type="button" className="btn btn-secondary mx-auto" data-dismiss="modal">Cancelar</button>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        );
    }
}

if (document.getElementById('App_Calendar')) {
    ReactDOM.render(<App_Calendario type="1"/>, document.getElementById('App_Calendar'));
}
if (document.getElementById('App_Calendar_Tallaje')) {
    ReactDOM.render(<App_Calendario type="2"/>, document.getElementById('App_Calendar_Tallaje'));
}