<!doctype html>
<html ⚡4email>
 <head><meta charset="utf-8"><style amp4email-boilerplate>body{visibility:hidden}</style><script async src="https://cdn.ampproject.org/v0.js"></script> 
   <title>Factura #{{$numero_factura}} - El Escaparate de Lolita</title>
   <link rel="icon" href="{{URL::asset('assets/images/favicon.ico')}}" sizes="32x32"/>
  <style amp-custom>
body {
	font-family:Arial, Helvetica, sans-serif;
}
.container {
	width:100%;
	max-width:1000px;
	margin:auto;
}
.table {
	width:100%;
	border:1px solid black;
	border-collapse:collapse;
	margin:0;
	padding:0;
	table-layout:fixed;
}
.table tr {
	background-color:white;
	border:1px solid #999999;
}
.table th, .table td {
	font-size:16px;
	padding:8px;
	text-align:center;
}
.table thead th {
	text-transform:uppercase;
	background-color:#FF779A;
}
.table tbody tr:hover {
	background-color:rgba(0, 0, 0, 0.2);
}
.table tbody td:hover {
	background-color:rgba(0, 0, 0, 0.3);
}
td.align-left {
	text-align:left;
}
td.align-center {
	text-align:center;
}
td.align-right {
	text-align:right;
}
.es-button img {
	display:inline-block;
	vertical-align:middle;
}
.es-menu amp-img, .es-button amp-img {
	vertical-align:middle;
}
.btn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:5px 10px;
  cursor:pointer;
  border-radius: 8px;
}

@media print {
  .noPrint{
    display:none;
  }
}

</style> 
@if($mailing)
<style>
  .noPrint{
    display: none;
  }
</style>
@endif
 </head> 
 <body> 
  <div class="es-wrapper-color"> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0"> 
     <tr> 
      <td valign="top"> 
       <table cellpadding="0" cellspacing="0" class="es-header" align="center"> 
         <tr> 
          <td align="center"> 
           <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" width="600"> 
             <tr> 
              <td class="es-p20t es-p20r es-p20l" align="left"> 
               <table cellpadding="0" cellspacing="0" width="100%"> 
                 <tr> 
                  <td width="560" align="center" valign="top"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                     <tr> 
                      <td align="center" style="font-size: 0px"><amp-img class="adapt-img" src="images/61461610057950938.png" alt style="display: block" layout="responsive"></amp-img></td> 
                     </tr> 
                     <tr> 
                      <td align="center"><p style="color: #656060;line-height: 13px;font-size: 13px">Factura #{{$numero_factura}}</td> 
                     </tr> 
                     <tr> 
                      <td align="center" class="es-p20" style="font-size:0"> 
                       <table border="0" width="100%" cellpadding="0" cellspacing="0" role="presentation"> 
                         <tr> 
                          <td style="border-bottom: 1px solid #cccccc;background:none;height:1px;width:100%;margin:0px 0px 0px 0px;text-align:center">
                            <button class="btn noPrint" onclick="window.print();return false;" >Imprimir</button>
                            <a href="{{ url('/pedidos') }}"><button class="btn noPrint">Ir a la Tienda</button></a>
                          </td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr> 
              <td class="es-p20t es-p20r es-p20l" align="left"> 
                <table cellpadding="0" cellspacing="0" width="100%"> 
                    <tr> 
                    <td width="560" align="center" valign="top"> 
                    <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                        <tr> 
                        <td align="center" style="font-size: 0px;padding-bottom:10px"><a target="_blank" href="https://elescaparatedelolita.com/shop/RUUvo9zIo5lgXWDtKb9Y8sb6Q9UNAXDV6vw57u25"><img class="adapt-img" width="150px" src="https://elescaparatedelolita.com/images/logo.png"  alt style="display: block" layout="responsive"></img></a><br/></td> 
                        </tr>                      
                    </table>
                    </td> 
                    </tr> 
                </table>
                </td> 
             </tr> 
             <tr> 
              <td class="es-p20t es-p10b es-p20r es-p20l" align="left" style="background-color: #ff779a"> 
               <table cellpadding="0" cellspacing="0" width="100%"> 
                 <tr> 
                  <td width="560" align="center" valign="top"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                     <tr> 
                      <td align="center" class="es-p20" style="font-size:0"> 
                       <table border="0" width="100%" cellpadding="0" cellspacing="0" role="presentation"> 
                         <tr> 
                          <td style="border-bottom: 1px solid #cccccc;background:none;height:1px;width:100%;margin:0px 0px 0px 0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td align="center"><p style="font-size: 17px;color: #fbfafa"><strong>&nbsp;pedido: #{{$pedido->id}}</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr> 
              <td class="es-p20t es-p20r es-p20l" align="left" bgcolor="#e9d6d5" style="background-color: #e9d6d5"> 
               <table cellpadding="0" cellspacing="0" width="100%"> 
                 <tr> 
                  <td width="560" align="center" valign="top"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                     <tr> 
                      <td align="left"><h3 style="color: #ff779a;font-size: 14px;font-family: arial, 'helvetica neue', helvetica, sans-serif;line-height: 28px"><strong>&nbsp;[<a target="_blank" href="https://elescaparatedelolita.com/contacts#" style="color: #ff779a;font-size: 14px;font-family: arial, 'helvetica neue', helvetica, sans-serif">Fecha de Transacción</a>] {{$fecha_factura}}</strong></h3>
                      <h3 style="margin-left:8px; color: #ff779a;font-size: 14px;font-family: arial, 'helvetica neue', helvetica, sans-serif">Estado de Transacción: <span style="color:darkblue">{{$estadoTransferencia}}</span></h3>
                      </td> 
                     </tr> 
                     <tr> 
                      <td><title>Factura Elescaparatedelolita</title> 
                       <div class="container"> 
                        <table class="table" role="presentation"> 
                         <thead> 
                          <tr> 
                           <th>Producto</th> 
                           <th>Color</th>
                           <th>Cantidad</th>
                           <th>C/U</th>
                           <th>Total</th>
                          </tr> 
                         </thead> 
                         @foreach($productos as $fila)
                            <tr> 
                                <td class="align-left">{{$fila->productoID}} - {{$fila->name}}</td> 
                                <td>{{$fila->color_selected}}</td> 
                                <td>{{$fila->cantidad}}</td> 
                                <td>${{$fila->precio}}</td> 
                                <td>${{($fila->total - $fila->impuesto)}}</td> 
                            </tr> 
                         @endforeach
                          
                          <tr> 
                           <td colspan="2"></td> 
                           <td colspan="2" class="align-left">Subtotal</td>
                           <td>${{$subtotal}}</td> 
                          </tr>
                          <tr> 
                           <td colspan="2"></td> 
                           <td colspan="2" class="align-left">Impuestos 7%</td>
                           <td>${{$impuestos}}</td> 
                          </tr>
                          <tr> 
                            <td colspan="2"></td> 
                            <td colspan="2" class="align-left">Costo de Envio</td>
                            <td>
                            @if($pedido->costoDomicilio > 0)
                              ${{$pedido->costoDomicilio}}
                            @else
                              Free Delivery
                            @endif</td> 
                          </tr>
                          @if($descuento > 0)
                          <tr> 
                            <td colspan="2"></td> 
                            <td colspan="2" class="align-left">Cupon de Descuento</td>
                            <td style="color:crimson">- ${{$descuento}}</td> 
                          </tr>
                          @endif
                          <tr style="background:#FF779A;color:white"> 
                           <td colspan="3"></td> 
                           <td class="align-left">TOTAL</td>
                           <td>${{$pedido->total}}</td> 
                          </tr>
                        </table> 
                       </div></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center"> 
         <tr> 
          <td align="center"> 
           <table class="es-content-body" style="background-color: #ffffff" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
             <tr> 
              <td class="es-p20t es-p20r es-p20l" align="left"> 
               <table width="100%" cellspacing="0" cellpadding="0"> 
                 <tr> 
                  <td class="es-m-p0r es-m-p20b" width="560" valign="top" align="center"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation"> 
                     <tr> 
                      <td align="left" bgcolor="#e9d6d5"><h3 style="color: #ff779a"><strong>&nbsp;&nbsp;Dirección&nbsp;de facturación</strong></h3></td> 
                     </tr> 
                     <tr> 
                      <td><title>Direccion de factura</title> 
                       <div class="container"> 
                        <table class="table-1" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">{{$transferencia->req_bill_to_surname}} {{$transferencia->req_bill_to_forename}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div> 
                       <div class="container"> 
                        <table class="table-2" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Telefono: {{$transferencia->req_bill_to_phone}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div> 
                       <div class="container"> 
                        <table class="table-3" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Dirección: {{$transferencia->req_bill_to_address_line1}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div> 
                       <div class="container"> 
                        <table class="table-4" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Ciudad: {{$transferencia->req_bill_to_address_city}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div> 
                       <div class="container"> 
                        <table class="table-5" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Estado/Provincia: {{$transferencia->req_bill_to_address_state}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div> 
                       <div class="container"> 
                        <table class="table-6" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Pais: {{$transferencia->req_bill_to_address_country}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div>
                       <div class="container"> 
                        <table class="table-9" role="presentation"> 
                         <thead> 
                          <tr> 
                           <td class="align-left">Correo: {{$transferencia->req_bill_to_email}}</td> 
                          </tr> 
                         </thead> 
                        </table> 
                       </div></td> 
                     </tr> 
                     <tr> 
                      <td align="center" bgcolor="#efefef"><p style="color: #656060;line-height: 11px;font-size: 11px"><strong>Términos y condiciones de entrega:</strong> Si selecciono el interior del país su tiempo estimado de entrega es de 48 horas hábiles despues de la compra, si es dentro de la ciudad de Panamá será entregado en 24 horas hábiles despues de la compra, por lo tanto si su paquete es devuelto porque no se encuentra en la dirección definida nos comunicaremos a su número de teléfono que tiene inscrito en la plataforma, si no encontramos respuesta el producto&nbsp;se traera devuelta a nuestra tienda&nbsp;y tendrá un cargo adicional al ser reenviado a la dirección nuevamente.</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" style="font-size: 0px"><a target="_blank" href="https://wa.link/svi8h3"><img class="adapt-img" src="{{URL::asset('assets/store/images/6791610215347634.png')}}" alt style="display: block" width="150" height="124" layout="responsive" /></a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding="0" cellspacing="0" class="es-footer" align="center"> 
         <tr> 
          <td align="center"> 
           <table bgcolor="#ffffff" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="600"> 
             <tr> 
              <td class="es-p20t es-p20b es-p20r es-p20l" align="left"> 
               <table cellpadding="0" cellspacing="0" width="100%"> 
                 <tr> 
                  <td width="560" align="left"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                     <tr> 
                      <td align="center" style="font-size:0"> 
                       <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation"> 
                         <tr> 
                          <td align="center" valign="top" class="es-p0r"><a target="_blank" href="https://www.instagram.com/primalmkt/"><amp-img src="images/instagram-logo-black.png" alt="Ig" title="Instagram" width="32" height="32"></amp-img></a></td> 
                          <td align="center" valign="top"><a target="_blank" href="https://www.facebook.com/Primal-Market-103336497994022"><amp-img src="images/facebook-logo-black.png" alt="Fb" title="Facebook" width="32" height="32"></amp-img></a></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr> 
              <td class="es-p20t es-p20r es-p20l" align="left"> 
               <table cellpadding="0" cellspacing="0" width="100%"> 
                 <tr> 
                  <td width="560" align="center" valign="top"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation"> 
                     <tr> 
                      <td align="center"><p style="color: #060606;font-size: 13px">                      
                      &nbsp;<a target="_blank" href="{{ url('/' . $page='docs/terminos_condiciones_20201005.pdf') }}" style="color: #000000;font-size: 13px">Terminos de Uso</a>&nbsp;|&nbsp;<a target="_blank" href="{{ url('/' . $page='docs/politicas_entrega_domicilio_20201005.pdf') }}" style="color: #000000;font-size: 13px">Politicas de Delivery</a></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>