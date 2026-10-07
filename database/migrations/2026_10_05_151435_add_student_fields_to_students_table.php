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
        Schema::table('students', function (Blueprint $table) {
            if (! Schema::hasColumn('students', 'nis')) {
                $table->string('nis', 4)->unique();
            }

            if (! Schema::hasColumn('students', 'name')) {
                $table->string('name');
            }

            if (! Schema::hasColumn('students', 'gender')) {
                $table->string('gender')->comment('MALE/FEMALE');
            }

            if (! Schema::hasColumn('students', 'major')) {
                $table->string('major');
            }

            if (! Schema::hasColumn('students', 'class')) {
                $table->string('class');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
