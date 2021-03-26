import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Feature_Notifications extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          notificaciones: [],
          pendientesCounter: 0
        };
        
      }

        componentDidMount() {
            fetch(Configuracion.url_principal+"api/getNotifications/5bb7b7a44c2f02464d807231f0083f0f1c221011")
            .then(res => res.json())
            .then(
            (result) => {
                if(result.notifications != undefined)
                {
                    this.setState({
                        isLoaded: true,
                        notificaciones: result.notifications,
                        pendientesCounter:result.pending
                    });
                }
                else alert("Internal Error");                
            });
        }

        openNotification(row)
        {
            fetch(Configuracion.url_principal+"api/updateNotifySeen/5bb7b7a44c2f02464d807231f0083f0f1c221011/"+row.id)
            .then(res => res.json())
            .then(
            (result) => {
                if(result.error == undefined) location.href=row.link;
                else alert("Error en el proceso de apertura");
            });
            
        }

        getTimeAgo(date)
        {
            const MINUTE = 60;
            const HOUR = MINUTE * 60;
            const DAY = HOUR * 24;
            const WEEK = DAY * 7;
            const MONTH = DAY * 30;
            const YEAR = DAY * 365;
            const then = new Date(date);
            const timeNow = new Date();
            const seconds = Math.round(Math.abs(timeNow - then) / 1000);

            const value =
            seconds < MINUTE
            ?  "un momento"
            : seconds < HOUR && Math.round(seconds / MINUTE) == 1
            ? Math.round(seconds / MINUTE).toString() +  ' minuto'
            : seconds < HOUR  && Math.round(seconds / MINUTE) > 1
            ? "" + Math.round(seconds / MINUTE).toString() +  ' minutos'
            : seconds < DAY && Math.round(seconds / HOUR) == 1
            ? Math.round(seconds / HOUR).toString() +  ' hora'
            : seconds < DAY && Math.round(seconds / HOUR) > 1
            ? Math.round(seconds / HOUR).toString() +  ' horas'
            : seconds < WEEK && Math.round(seconds / DAY) == 1
            ? Math.round(seconds / DAY).toString() +  ' dia'
            : seconds < WEEK && Math.round(seconds / DAY) > 1
            ? Math.round(seconds / DAY).toString() +  ' dias'
            : seconds < MONTH && Math.round(seconds / WEEK) == 1
            ? Math.round(seconds / WEEK).toString() +  ' semana'
            : seconds < MONTH && Math.round(seconds / WEEK) > 1
            ? Math.round(seconds / WEEK).toString() +  ' semanas'
            : seconds < YEAR && Math.round(seconds / MONTH) == 1
            ? Math.round(seconds / MONTH).toString() +  ' mes'
            : seconds < YEAR && Math.round(seconds / MONTH) > 1
            ? Math.round(seconds / MONTH).toString() +  ' meses'
            : seconds > YEAR && Math.round(seconds / YEAR) == 1 
            ? Math.round(seconds / YEAR).toString() +  ' año'
            : Math.round(seconds / YEAR).toString() +  ' años';
            return "Hace "+value;
        }
    
    render(){
        return (
            <React.Fragment>
                <a className="nav-custom-leyder nav-link icon" data-toggle="dropdown">
                    <i className="fe fe-bell"></i>
                    <span className="nav-unread badge badge-danger badge-pill">{this.state.pendientesCounter}</span>
                </a>
                <div id="notify_dropdown" className="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style={{maxHeight: "300px", overflowY: 'auto'}} >
                    <h4 className="text-light text-center pt-3">Notificaciones</h4>
                    <div className="dropdown-divider"></div>
                    {this.state.notificaciones.map((row) => (
                        <a className={(row.visto == 0) ? "dropdown-item d-flex pb-4 active" : "dropdown-item d-flex pb-4"} role="button" onClick={this.openNotification.bind(this,row)} key={row.id}>
                            <span id={"avatar_"+row.id} className="avatar mr-3 br-3 align-self-center avatar-md cover-image bg-primary-transparent text-primary">
                                <i className={row.logo} ></i>
                            </span>
                            <div>
                                <span className="font-weight-bold text-light"> {row.texto} </span>
                                <div className="small text-muted d-flex">
                                   {this.getTimeAgo(row.created_at)}
                                </div>
                            </div>
                        </a>
                    ))}                    
                    <div className="dropdown-divider"></div>
                    <div className="text-center dropdown-btn pb-3 d-none">
                        <div className="btn-list">
                            <a href="#" className=" btn btn-secondary btn-sm"><i className="fe fe-eye mr-1"></i>Ver Todo</a>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('AppFeatureNotifications')) {
    ReactDOM.render(<App_Feature_Notifications />, document.getElementById('AppFeatureNotifications'));
}
