<?php

use App\Models\Inventory;
use App\Models\Material;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_material', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignIdFor(Inventory::class)->nullable();
            $table->foreignIdFor(Material::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_material');
    }
}
