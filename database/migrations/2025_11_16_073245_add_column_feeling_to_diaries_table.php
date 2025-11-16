<?php

use App\Enums\FeelingStatus;
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
        Schema::table('diaries', function (Blueprint $table) {
            $statuses = array_map(fn($case) => $case->value, FeelingStatus::cases());

            $table->enum('feeling_status', $statuses)
                ->nullable()
                ->after('diary_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diaries', function (Blueprint $table) {
            //
        });
    }
};
