<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable('instruments')) {
            return;
        }

        if (! Schema::hasColumn('instruments', 'image')) {
            return;
        }

        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE `instruments` MODIFY `image` VARCHAR(255) NULL;');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (! Schema::hasTable('instruments')) {
            return;
        }

        if (! Schema::hasColumn('instruments', 'image')) {
            return;
        }

        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE `instruments` MODIFY `image` VARCHAR(255) NOT NULL;');
        }
    }
};
