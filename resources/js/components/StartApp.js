import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from './Configuration';
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

       
            setTimeout(function(){$('iframe[title="Instagram widgets for website"]').addClass("iframe-instagram"); }, 1000);

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
        },    
        from: null,
        to: null
        
      };
    }
  
    async componentDidMount() {
      await this.loadProducts();
    }

    async loadProducts(page = 1)
    {
      var filterby_min_price = document.getElementById('filterby_min_price').getAttribute("value");
      var filterby_max_price = document.getElementById('filterby_max_price').getAttribute("value");
      var filterby_search = document.getElementById('filterby_search').getAttribute("value");
      var filterby_category = document.getElementById('filterby_category').getAttribute("value");

      var filters = "";
      if(filterby_min_price != "undefined") filters += "&min_price="+filterby_min_price;
      if(filterby_max_price != "undefined") filters += "&max_price="+filterby_max_price;
      if(filterby_search != "undefined") filters += "&s="+filterby_search;
      if(filterby_category != "undefined") filters += "&category="+filterby_category;
      await fetch(Configuracion.url_principal+"api/view_products?page="+page+filters)
      .then(res => res.json())
      .then(
        (response) => {
          $('#filter_pmin').val(response.filters.min);
          $('#filter_pmax').val(response.filters.max);
          var result = response.productos;
          this.setState({
            isLoaded: true,
            products: result.data,
            from: result.from,
            to: result.to,
            page: {
              itemPerPage: result.per_page,
              total: result.total
            }
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
      this.setState({activePage: pageNumber});
      await this.loadProducts(pageNumber);
      
    }

  render(){
      return (
          
          <div>
            <ListProducts 
                productos={this.state.products}
                url_images={Configuracion.url_images}
                url_href={Configuracion.url_principal}
                totalItemsCount={this.state.page.total}
                from={this.state.from}
                to={this.state.to}
            />
            <nav className="woocommerce-pagination">
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

export default Products_Shop;
if (document.getElementById('Shop_Products')) {
  ReactDOM.render(<Products_Shop />, document.getElementById('Shop_Products'));
}
