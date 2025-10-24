<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            if (!Schema::hasColumn('clients', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('clients', 'email')) {
                $table->string('email')->unique()->after('name');
            }
            if (!Schema::hasColumn('clients', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }
        });
    }

    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            if (Schema::hasColumn('clients', 'phone')) {
                $table->dropColumn('phone');
            }
            if (Schema::hasColumn('clients', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('clients', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
};
