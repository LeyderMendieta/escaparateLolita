import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Feature_Articles extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          articulos: []          
        };
        
      }

      componentDidMount() {
        fetch(Configuracion.url_principal+"api/all_articulos")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                articulos: result
              });
              Configuracion.loadDatatable();
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )
      }

      render(){
        return (
            <React.Fragment>
                {this.state.articulos.map((row) => (
                   <div className="trx_addons_column-1_4" key={row.id}>
                    <div className="sc_blogger_item post type-post">
                        <div className="sc_blogger_item_content entry-content">
                            <h4 className="sc_blogger_item_title entry-title">
                                <a href="#post-standart.html" >{row.titulo}</a>
                            </h4>
                        </div>
                        <div className="sc_blogger_item_excerpt">
                            <div className="sc_blogger_item_excerpt_text">
                                <p>{row.descripcion}</p>
                            </div>
                            <div className="sc_blogger_item_button sc_item_button">
                                <a href={row.url} target="_blank" className="sc_button sc_button_simple">Leer Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                ))}
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_Feature_Articles')) {
    ReactDOM.render(<App_Feature_Articles />, document.getElementById('App_Feature_Articles'));
}
