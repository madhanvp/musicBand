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
        // Only run when the instruments table exists and DB driver is MySQL (as this uses ALTER TABLE .. MODIFY)
        if (Schema::hasTable('instruments')) {
            $driver = config('database.default');
            // config() isn't available reliably in migrations when run via CLI before config cached,
            // but this project .env uses mysql by default; perform a safe check and attempt ALTER for MySQL.
            try {
                DB::statement("ALTER TABLE `instruments` MODIFY `image` VARCHAR(255) NULL;");
            } catch (\Throwable $e) {
                // If ALTER TABLE fails (different driver or syntax), surface a helpful message in logs.
                // Do not throw to avoid breaking migrations in unknown environments.
                logger()->warning('Could not alter instruments.image to nullable: ' . $e->getMessage());
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('instruments')) {
            try {
                DB::statement("ALTER TABLE `instruments` MODIFY `image` VARCHAR(255) NOT NULL;");
            } catch (\Throwable $e) {
                logger()->warning('Could not revert instruments.image nullability: ' . $e->getMessage());
            }
        }
    }
};
