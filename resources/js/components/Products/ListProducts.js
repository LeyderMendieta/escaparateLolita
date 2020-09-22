import React from 'react';

const ListProducts = ({productos}) => (
    <table className="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
          { productos.map((product) => (
              <tr key={product.id} >
                  <th scope="row">{product.id}</th>
                  <td>{product.name}</td>
                  <td>{product.descripcion}</td>
                  <td>{product.created_at}</td>
              </tr>
          ))}
        
      </tbody>
    </table>  
    );


export default ListProducts;

