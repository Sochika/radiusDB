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
    Schema::table('offices', function (Blueprint $table) {
      //
      $table->integer('level')->default(0)->after('name');
      $table->text('description')->nullable()->after('level');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('offices', function (Blueprint $table) {
      //
      $table->dropColumn('level');
      $table->dropColumn('description');
    });
  }
};
