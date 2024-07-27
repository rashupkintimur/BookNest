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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("room_id")->nullable(false);
            $table->foreign("room_id")->references("id")->on("rooms")->onDelete("cascade");
            $table->unsignedBigInteger("user_id")->nullable(false);
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->timestamp("started_at")->default(DB::raw("CURRENT_TIMESTAMP"))->nullable(false);
            $table->timestamp("finished_at")->default(DB::raw("CURRENT_TIMESTAMP"))->nullable(false);
            $table->integer("days")->nullable(false);
            $table->integer("price")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
