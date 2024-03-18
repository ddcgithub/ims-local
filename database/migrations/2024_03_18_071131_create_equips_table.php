<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equips', function (Blueprint $table) {
            $table->id();
            $table->string('equip_code');
            $table->string('equip_image')->nullable();
            $table->string('equip_file')->nullable();
            $table->integer('equip_category_id');
            $table->integer('equip_type_id');
            $table->text('equip_specific');
            $table->float('equip_price');
            $table->integer('equip_budget_id');
            $table->integer('equip_group_id');
            $table->string('equip_used');
            $table->integer('equip_position_id')->nullable();
            $table->date('equip_install_date');
            $table->string('equip_status');
            $table->text('equip_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equips');
    }
};
