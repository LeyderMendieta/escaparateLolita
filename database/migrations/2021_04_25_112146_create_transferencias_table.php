<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->id();
            $table->integer("id_pedido")->index();
            $table->string("auth_cv_result",1);
            $table->string("auth_trans_ref_no",60);
            $table->string("auth_amount",15);
            $table->string("auth_response",10);
            $table->string("auth_time",20);
            $table->string("auth_code",7);
            $table->string("transaction_id",26);
            $table->string("req_transaction_uuid",50);
            $table->string("req_reference_number",50);
            $table->string("req_card_expiry_date",7);
            $table->string("req_card_type",3);
            $table->string("req_card_number",20);
            $table->string("req_line_item_count",2);
            $table->string("req_amount",15);
            $table->string("req_profile_id",36);
            $table->string("req_access_key",32);
            $table->text("request_token");
            $table->string("card_type_name",50);
            $table->string("score_rcode",5);
            $table->string("score_rmsg");
            $table->string("signature",44);
            $table->text("signed_field_names");
            $table->string("decision_rmsg");
            $table->string("decision_return_code",50);
            $table->string("decision",8);
            $table->string("message",255);
            $table->string("bill_trans_ref_no",60);
            
            $table->string("req_bill_to_surname",60);
            $table->string("req_bill_to_forename",60);
            $table->string("req_bill_to_email",255);
            $table->bigInteger("req_bill_to_phone");
            $table->string("req_bill_to_address_line1",60);
            $table->string("req_bill_to_address_country",2);
            $table->string("req_bill_to_address_state",60);
            $table->string("req_bill_to_address_city",50);
            $table->string("req_bill_to_address_postal_code",10);

            $table->string("req_ship_to_surname",60);
            $table->string("req_ship_to_forename",60);
            $table->bigInteger("req_ship_to_phone");
            $table->string("req_ship_to_address_line1",60);
            $table->string("req_ship_to_address_country",2);
            $table->string("req_ship_to_address_state",60);
            $table->string("req_ship_to_address_city",50);
            $table->string("req_ship_to_address_postal_code",10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferencias');
    }
}
