<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\CommonMigrationColumns;

return new class extends Migration
{
    use CommonMigrationColumns;

    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $this->reservedColumns($table);
            $this->auditInfoColumns($table);
            $table->timestamps();

            $this->auditInfoColumnsForeignKeys($table);
        });
    }

    public function down()
    {
        Schema::dropIfExists('test');
    }
};
