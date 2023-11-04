<?php

namespace App\Traits;

trait CommonMigrationColumns
{
    protected function auditInfoColumns($table)
    {
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->unsignedBigInteger('deleted_by')->nullable();
    }

    protected function reservedColumns($table)
    {
        $table->string('rsvd_5', 1)->nullable();
        $table->string('rsvd_4', 1)->nullable();
        $table->string('rsvd_3', 1)->nullable();
        $table->string('rsvd_2', 1)->nullable();
        $table->string('rsvd_1', 1)->nullable();
    }

    protected function auditInfoColumnsForeignKeys($table)
    {
        $table->foreign('created_by')
            ->references('id')
            ->on('users')
            ->onDelete('set null');

        $table->foreign('updated_by')
            ->references('id')
            ->on('users')
            ->onDelete('set null');

        $table->foreign('deleted_by')
            ->references('id')
            ->on('users')
            ->onDelete('set null');
    }
}
