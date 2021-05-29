import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Feature_GiftCards extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          giftCards: []          
        };
        
      }

      componentDidMount() {
        fetch(Configuracion.url_principal+"api/all_giftCards")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                giftCards: result
              });
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
                {this.state.giftCards.map((row) => (
                    <div className="column_container column-1_3 sc_layouts_column_icons_position_left" key={row.id}>
                        <div className="column-inner">
                            <div className="text_column">
                                <div className="empty_space h-1em"><span className="empty_space_inner"></span></div>
                                <div className="sc_price sc_price_default" style={{borderColor:"#"+row.color_hex}}>
                                    <div className="sc_price_info">
                                        <div className="sc_price_title"><a href="#">{row.nombre}</a></div>
                                        <div className="sc_price_price"><span className="sc_price_decimals">$</span><span className="sc_price_value">{row.valor}</span></div>
                                        <div className="sc_price_details">
                                            <p></p>
                                            <ul>
                                                {row.etiquetas.split("\n").map((otrorow,index) =>(
                                                    <li key={index}>{otrorow}</li>
                                                ))}
                                            </ul>
                                            <p></p>
                                        </div>
                                        <a href={Configuracion.url_principal+"shop/"+row.acceso_url} className="sc_price_link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_Feature_GiftCards')) {
    ReactDOM.render(<App_Feature_GiftCards />, document.getElementById('App_Feature_GiftCards'));
}
