import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

import Configuracion from './Configuration';
//import ErrorBoundary from './ErrorBoundary';
import MustHaveProducts from './Products/MustHaveProducts';
import BrandsProducts from './Products/BrandsProducts';
import ListProducts from './Products/ListProducts';
import Pagination from 'react-js-pagination';

class Product_MustHave extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          products: []
        };
      }
    
      componentDidMount() {
        fetch(Configuracion.url_principal+"api/products/reference_must_have")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                products: result
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
            <MustHaveProducts 
                products={this.state.products}
                url_images={Configuracion.url_images}
                url_href={Configuracion.url_principal}
            />
        );
    }
}

if (document.getElementById('Products_Must_Have')) {
    ReactDOM.render(<Product_MustHave />, document.getElementById('Products_Must_Have'));
}

class Product_Brands extends Component {

  constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        products: []
      };
    }
  
    componentDidMount() {
      fetch(Configuracion.url_principal+"api/products_brands")
        .then(res => res.json())
        .then(
          (result) => {
            this.setState({
              isLoaded: true,
              products: result
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
          <BrandsProducts 
              products={this.state.products}
              url_images={Configuracion.url_images}
              url_href={Configuracion.url_principal}
          />
      );
  }
}

if (document.getElementById('Products_Brands')) {
  ReactDOM.render(<Product_Brands />, document.getElementById('Products_Brands'));
}

class Products_Shop extends Component {

  constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        products: [],
        data: [],
        activePage: 0,
        page: {          
          itemPerPage: 10,
          total: 30
        }      
        
      };
    }
  
    async componentDidMount() {
      await this.loadProducts();
    }

    async loadProducts(page = 1)
    {
      await fetch(Configuracion.url_principal+"api/view_products?page="+page)
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            products: result.data
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

    async handlePageChange(pageNumber) {
      console.log(`active page is ${pageNumber}`);
      this.setState({activePage: pageNumber});
      await this.loadProducts(pageNumber);
      
    }

  render(){
      return (
          
          <div>
            <ListProducts 
                productos={this.state.products}
            />
            <nav class="woocommerce-pagination">
              <Pagination
                  activePage={this.state.activePage}
                  itemsCountPerPage={this.state.page.itemPerPage}
                  totalItemsCount={this.state.page.total}
                  pageRangeDisplayed={5}
                  onChange={this.handlePageChange.bind(this)}
                  innerClass="page-numbers"
                  linkClass="page-numbers"
                />
            </nav>
          </div>
      );
  }
}


if (document.getElementById('Shop_Products')) {
  ReactDOM.render(<Products_Shop />, document.getElementById('Shop_Products'));
}
