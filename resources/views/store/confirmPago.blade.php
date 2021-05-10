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

                                        define ('HMAC_SHA256', 'sha256');
                                        define ('SECRET_KEY', 'ef1f70f811824a199c668669825b87a4c54ff57ccc9c4ddb8f0c6d90e8dd623cac09d3aa07b1465ba2bccc5ba241132cf5108a6e69dd463cae4295a45889e000bb614b7d648f4b6b9d0f7110cc6005feff18265b2ca94ad69e2081701fdcc804d22651b3b54140e480895becaa9ea96b74a2b6530550421dbf1dae51b26af6cf');

                                        function sign ($params) {
                                        return signData(buildDataToSign($params), SECRET_KEY);
                                        }

                                        function signData($data, $secretKey) {
                                            return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
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
                                        <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/silent/pay" method="post" />
                                            <fieldset id="confirmation">
                                                <h3>Confirmar Pago</h3>
                                                <div>
                                                    <?php
                                                        foreach($_REQUEST as $name => $value) {
                                                            $params[$name] = $value;
                                                        }
                                                        /*
                                                        foreach($params as $name => $value) {
                                                            echo "<div>";
                                                            echo "<span class=\"fieldName\">" . $name . "</span>: <span class=\"fieldValue\">" . $value . "</span>";
                                                            echo "</div>\n";
                                                        }
                                                        */
                                                    ?>
                                                </div>
                                            </fieldset>
                                            <?php
                                                foreach($params as $name => $value) {
                                                    echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
                                                }
                                                echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
                                            ?>
                                            <fieldset>
                                                
                                                <div class="section w-50">
                                                    <div class="row form-group">
                                                        <label for="card_type">Tipo Tarjeta</label>
                                                        <select id="tipoTarjeta" name="card_type" class="form-control p-0 pl-3 border" required>
                                                            <option value="001">Visa</option>
                                                            <option value="002">Mastercard</option>
                                                        </select>
                                                    </div>
                                                    <div class="row form-group">
                                                        <label for="card_number">Numero Tarjeta</label>
                                                        <input id="numeroTarjeta" type="text" class="form-control border" name="card_number" minlength="16" maxlength="16" required />
                                                        <div class="invalid-field text-danger d-none">
                                                            <span class="invalid-cardtype"></span> Numero de Tarjeta no valido
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="card_expiry_date">Mes de Expiración</label>
                                                            <select id="mesField" class="form-control p-0 pl-3 border" required>
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
                                                            <select id="yearField" class="form-control p-0 pl-3 border" required>
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
                                                        <input type="hidden" id="card_expiry_date"  name="card_expiry_date" placeholder="09-2022" required />
                                                    </div>
                                                    <div class="row form-group">
                                                        <label for="card_cvn">cvn</label>
                                                        <input type="number" class="form-control border" name="card_cvn" id="cvn" required />
                                                        <div class="invalid-field text-danger d-none">
                                                            Digita el CVN de la tarjeta
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        <button type="button" id="realizarPago" role="button">Realizar Pago</button>
                                        </form>
                                    </div>
                                </section>

                            </div>
                        </article>
                    </div>
                </div>
            </div>
                @include('store.layouts.footer2')
            </div>
        </div>
    
        @include('store.layouts.foot')
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
    $(document).ready(function(){

        $(".form-control").change(function(){
            $(this).siblings(".invalid-field").addClass("d-none");
            $(this).parents(".col-6").find(".invalid-field-mes").addClass("d-none");
            $(this).parents(".col-6").find(".invalid-field-year").addClass("d-none");
        });
        

        $('#numeroTarjeta').change(function(){
            var $tipo = $("#tipoTarjeta").val();
            var numeroTarjeta = $(this).val();
            var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;

            if($tipo == "001")
            {
                if (visaRegEx.test(numeroTarjeta) === false ){ 
                    $(this).siblings(".invalid-field").removeClass("d-none");
                }
            }
            else
            {
                if (mastercardRegEx.test(numeroTarjeta) === false ){ 
                    $(this).siblings(".invalid-field").removeClass("d-none");
                } 
            }
        });

        $('#realizarPago').click(function(){

            var $tipo = $("#tipoTarjeta").val();
            var numeroTarjeta = $('#numeroTarjeta').val();
            var mes = $('#mesField').val();
            var year = $('#yearField').val();
            console.log("mes: ["+year+"]");
            var cvn = $('#cvn').val();
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
                return false;
            }
            else $(this).parents("form").submit();
        });
    });
    function cybs_dfprofiler(merchantID, environment) {
            
        if (environment.toLowerCase() == 'live') {
            var org_id = 'k8vif92e';
        } else {
            var org_id = '1snn5n9w';
        }

        var sessionID =   new Date().getTime();
        str = "https://h.online-metrix.net/fp/tags.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=2";

        var paragraphTM = document.createElement("p");
        str = "background:url(https://h.online-metrix.net/fp/clear.png?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=1)";
        

        paragraphTM.styleSheets = str;
        paragraphTM.height = "0";
        paragraphTM.width = "0";
        paragraphTM.hidden = "true";

        document.body.appendChild(paragraphTM);

        var img = document.createElement("img");

        str = "https://h.online-metrix.net/fp/clear.png?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=2";
        img.src = str;
        
        document.body.appendChild(img);
        

        var tmscript = document.createElement("script");
        tmscript.src = "https://h.online-metrix.net/fp/check.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        tmscript.type = "text/javascript";

        document.body.appendChild(tmscript);

        var objectTM = document.createElement("object");
        objectTM.data = "https://h.online-metrix.net/fp/fp.swf?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        objectTM.width = "1";
        objectTM.height = "1";
        objectTM.id = "thm_fp";

        var param = document.createElement("param");
        param.name = "movie";
        param.value = "https://h.online-metrix.net/fp/fp.swf?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        objectTM.appendChild(param);


        str = "https://h.online-metrix.net/fp/tags.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "";
        


        document.body.appendChild(objectTM);

        return sessionID;
    } 
    cybs_dfprofiler("tc_pa_016026821", "test");
</script>