<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Confirmar Pago - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    
    <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page scheme_default blog_mode_shop body_style_wide blog_style_excerpt sidebar_show sidebar_left no_layout">
        <div class="body_wrap">
            <div class="page_wrap">
                <header class="top_panel top_panel_custom without_bg_image scheme_default">
                    <div class="column_row sc_layouts_row sc_layouts_row_type_narrow sc_layouts_row_delimiter scheme_dark">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                <div class="sc_content_width_1_1">
                                    <div class="column_row">
                                        <div class="columns_wrap">
                                            <div class="column_container column-2_3 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    @include('store.layouts.nav-default-1')
                                                </div>
                                            </div><div class="column_container column-1_3 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="empty_space h-1_5em"><span class="empty_space_inner"></span></div>
                </header>
                <div class="page_content_wrap scheme_default">
                <div class="content_wrap">
                    <div class="content" style="width:100%">
                        <article class="post_item_single post_type_page page type-page">
                            <div class="post_content entry-content">
                            
                                <section>
                                    <div class="content_container">
                                    <?php
                                        function sign ($params) {
                                            return buildDataToSign($params);
                                        }

                                        function buildDataToSign($params) {
                                                $signedFieldNames = explode(",",$params["signed_field_names"]);
                                                foreach ($signedFieldNames as $field) {
                                                $dataToSign[] = $field . "=" . $params[$field];
                                                }
                                                return commaSeparate($dataToSign);
                                        }

                                        function commaSeparate ($dataToSign) {
                                            return implode(",",$dataToSign);
                                        }
                                            //https://testsecureacceptance.cybersource.com/silent/pay
                                    ?>
                                        <form id="payment_confirmation" action="https://secureacceptance.cybersource.com/silent/pay" method="post" />
                                            <fieldset id="confirmation">
                                                <h3>Confirmar Pago</h3>
                                                <div>
                                                    <?php
                                                        foreach($_REQUEST as $name => $value) {
                                                            $params[$name] = $value;
                                                        }
                                                        
                                                        
                                                        foreach($params as $name => $value) {
                                                            echo "<div>";
                                                            //echo "<span class=\"fieldName\">" . $name . "</span>: <span class=\"fieldValue\">" . $value . "</span>";
                                                            echo "</div>\n";
                                                        }
                                                    ?>
                                                </div>
                                            </fieldset>
                                            <?php
                                                foreach($params as $name => $value) {
                                                    echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
                                                }
                                                echo "<input type=\"hidden\" id=\"fieldsToSign\" value=\"" . sign($params) . "\"/>\n";
                                                //echo "<h6 id='infoSign'>" . sign($params) . "</h6>";
                                                echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"null\"/>\n";
                                                /**Validate if exist Token Payment */
                                                if($params["transaction_type"] == "sale" )
                                                {
                                                    echo "<span id='typeSale' style='display:none'>payment</span>";
                                                    ?>
                                                        <span>Confirmar el pago para finalizar la compra</span> <br/><br/>
                                                    <?php
                                                }
                                                else
                                                {
                                                    echo "<span id='typeSale' style='display:none'>card</span>";
                                                    ?>
                                                        <div class="alert alert-info ">Nota: Unicamente se permiten tarjetas VISA y/o Mastercard</div><br/>
                                                        <fieldset id="nuevoMetodoPago" class="mx-3">
                                                            <div class="section w-50">
                                                                <div class="row form-group">
                                                                    <input type="hidden" name="card_type" id="card_type">
                                                                    <label for="card_type">Tipo de Tarjeta (Carga Automatico)</label>
                                                                    <select id="tipoTarjeta" class="form-control p-0 pl-3 border" disabled>
                                                                        <option value="" selected>...</option> 
                                                                        <option value="001">Visa</option>
                                                                        <option value="002">Mastercard</option>
                                                                    </select>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <label for="card_number">Numero Tarjeta</label>
                                                                    <input type="hidden" name="card_number" id="card_number">
                                                                    <input id="numeroTarjeta" type="text" class="form-control border clnfield"  minlength="16" maxlength="16" js-maxinput='16' onkeypress='validate(event)' />
                                                                    <div class="invalid-field text-danger d-none">
                                                                        <span class="invalid-cardtype"></span> Numero de Tarjeta no valido
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <label for="card_expiry_date">Mes de Expiración</label>
                                                                        <select id="mesField" class="form-control p-0 pl-3 border">
                                                                            <option value="">Seleccionar...</option>
                                                                            <?php 
                                                                            $mes = 1;
                                                                            while($mes < 13)
                                                                            {
                                                                                if($mes < 10) $dato = "0".$mes;
                                                                                else $dato = $mes;
                                                                                echo "<option value='$dato'>$mes</option>";
                                                                                $mes++;
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        <div class="invalid-field-mes text-danger d-none">
                                                                            Elige el Mes de Expiración
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="card_expiry_date">Año de Expiración</label>
                                                                        <select id="yearField" class="form-control p-0 pl-3 border">
                                                                            <option value="">Seleccionar...</option>
                                                                            <?php 
                                                                            $year = date("Y");
                                                                            $limit = date("Y") + 40;
                                                                            while($year < $limit)
                                                                            {
                                                                                echo "<option value='$year'>$year</option>";
                                                                                $year++;
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        <div class="invalid-field-year text-danger d-none">
                                                                            Elige el Año de Expiración
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="card_expiry_date"  name="card_expiry_date" placeholder="09-2022" />
                                                                </div>
                                                                <div class="row form-group">
                                                                    <label for="card_cvn">cvn</label>
                                                                    <input type="hidden" name="card_cvn" id="card_cvn">
                                                                    <input type="text" class="form-control border clnfield" id="cvn"  onkeypress='validate(event)' js-maxinput='3' />
                                                                    <div class="invalid-field text-danger d-none">
                                                                        Digita el CVN de la tarjeta
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="mx-5">
                                                            <input type="checkbox" className="custom-control-input" id="confirmar-guardarTarjeta" checked />
                                                            <label className="custom-control-label" for="confirmar-guardarTarjeta">
                                                            Guardar la tarjeta para proximas compras
                                                            </label>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                            
                                        <button type="button" class="mx-5" id="realizarPago" role="button">Realizar Pago</button>
                                        <h6 id="msgProcesando" class="text-info d-none">Procesando el pago...</h6>
                                        </form>
                                    </div>
                                    <div class=" mt-4 alert alert-danger jsinfo-result-valCard d-none"></div>
                                </section>
                                <input type="hidden" class="apiCardVerify" value="{{ url('/' . $page='api/verifyCardAvailable/') }}">
                                <input type="hidden" class="apiSignDataST" value="{{ url('/' . $page='api/signDataST/') }}">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
                @include('store.layouts.footer2')
            </div>
        </div>
    
        @include('store.layouts.foot')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/_packed.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/price-slider.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>
<script>
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) || (theEvent.target.value.length > theEvent.target.getAttribute("js-maxinput")) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

async function postData(url = '', data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    //mode: 'cors', // no-cors, *cors, same-origin
   // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    //credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    //redirect: 'follow', // manual, *follow, error
    //referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript objects
}

    $(document).ready(function(){

        var nTarjeta = "";
        var nCVN = "";

        $(".form-control").change(function(){
            $(this).siblings(".invalid-field").addClass("d-none");
            $(this).parents(".col-6").find(".invalid-field-mes").addClass("d-none");
            $(this).parents(".col-6").find(".invalid-field-year").addClass("d-none");
        });

        var st_FieldsToSign = $('#fieldsToSign').val();
        var st_SignedFieldsNames = $('#signed_field_names').val();

        $('#confirmar-guardarTarjeta').change(function(){

            var newval = "";
            var valSigned = $('#signed_field_names').val();
            if($(this).prop("checked") == true)
                {
                    newval = st_FieldsToSign;

                    
                    if($('input[name="payment_token"]').length == 0)
                    $('#payment_confirmation').find("input").first().after("<input type='hidden' name='payment_token' value='' />");

                    $('#transaction_type').val("sale,create_payment_token");
                    $('#signed_field_names').val(st_SignedFieldsNames);

                }
            else
                {
                    newval = $('#fieldsToSign').val().replace("transaction_type=sale,create_payment_token,payment_token=","transaction_type=sale").replace("payment_token,","");
                    
                    $('input[name="payment_token"]').remove();

                    $('#transaction_type').val("sale");
                    $('#signed_field_names').val(valSigned.replace(",payment_token",""));
                }
            $('#fieldsToSign').val(newval);


            postData($('.apiSignDataST').val(), { data: $('#fieldsToSign').val() })
            .then(response => {
                //$('input[name="signed_date_time"]').val(response.date);
                $('#signature').val(response.sign);
            });

        });

        $('#cvn').change(function(){
            var numeroCVN = $(this).val();
            $(this).val("xxxx");
            nCVN = numeroCVN;
        });

        $('.clnfield').click(function(){
            $(this).val("");
        });

        $('#numeroTarjeta').change(function(){
            
            var numeroTarjeta = $(this).val();
            var substr_tarjeta = numeroTarjeta.substring(numeroTarjeta.length - 4, numeroTarjeta.length);
            var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
            var passed = true;
            if (visaRegEx.test(numeroTarjeta) === true ){
                $('#tipoTarjeta').val("001");
                $('#card_type').val("001");
            }
            else if (mastercardRegEx.test(numeroTarjeta) === true ){ 
                $('#tipoTarjeta').val("002");
                $('#card_type').val("002");
            }
            else {
                $(this).siblings(".invalid-field").removeClass("d-none");
                passed = false;
            }

            if(passed) $(this).val("xxxx-xxxx-xxxx-"+substr_tarjeta);
            else $(this).val("xxxx-xxxx-xxxx-xxxx");

            nTarjeta = numeroTarjeta;
        });

        postData($('.apiSignDataST').val(), { data: $('#fieldsToSign').val() })
        .then(response => {
            $('#signature').val(response.sign);
        });

        $('#realizarPago').click(function(){

            $(this).hide();
            $('#msgProcesando').removeClass("d-none");
            
            if($('#typeSale').text() == "payment")
            {
                $(this).parents("form").submit();
                return false;
            }

            var $tipo = $("#card_type").val();
            var numeroTarjeta = nTarjeta;
            var mes = $('#mesField').val();
            var year = $('#yearField').val();
            var cvn = nCVN;
            var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
            var cvnValidator = /^(?:[0-9]{3,4})$/;
            var stopProcess = false;

            if($tipo == "001")
            {
                if (visaRegEx.test(numeroTarjeta) === false ){ 
                    $('#numeroTarjeta').siblings(".invalid-field").removeClass("d-none");
                    stopProcess = true;
                }
            }
            else
            {
                if (mastercardRegEx.test(numeroTarjeta) === false ){ 
                    $('#numeroTarjeta').siblings(".invalid-field").removeClass("d-none");
                    stopProcess = true
                } 
            }

            if(mes == "")
            {
                $(".invalid-field-mes").removeClass("d-none");
                stopProcess = true;
            }
            if(year == "")
            {
                $(".invalid-field-year").removeClass("d-none");
                stopProcess = true;
            }
            if(cvn == "")
            {
                $('#cvn').siblings(".invalid-field").text("campo obligatorio");
                $('#cvn').siblings(".invalid-field").removeClass("d-none");
                stopProcess = true;
            }
            else if(cvnValidator.test(cvn) === false)
            {
                $('#cvn').siblings(".invalid-field").text("El formato no es valido");
                $('#cvn').siblings(".invalid-field").removeClass("d-none");
                stopProcess = true;
            }

            if(mes != "" && year != "")
            {
                $('#card_expiry_date').val(mes+"-"+year);
            }

            //----------------------result
            if(stopProcess)
            {
                $('#msgProcesando').addClass("d-none");
                $(this).show();
                return false;
            }
            else 
            { 
                fetch($('.apiCardVerify').val()+"/"+nTarjeta)
                .then(res => res.json())
                .then(
                    (result) => {
                    if(result == 4111 || result == 4100)
                    {
                        $('#realizarPago').show();
                        $('#msgProcesando').addClass("d-none");
                    }
                    //------------------
                    if(result == 4111)
                    {
                        $('.jsinfo-result-valCard').removeClass("d-none");
                        $('.jsinfo-result-valCard').html("Ya tienes asociada esta tarjeta tokenizada, regresa al checkout y elige la tarjeta para proceder con el pago!");     
                        nTarjeta = "0";                   
                    }
                    else
                    {
                        $('#card_number').val(nTarjeta);
                        $('#card_cvn').val(nCVN);
                        $(this).parents("form").submit();
                    }                    
                });                
            }
        });
    });
   

    
    
</script>