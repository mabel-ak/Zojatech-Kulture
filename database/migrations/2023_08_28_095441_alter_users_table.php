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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('referral_code')->nullable();
            $table->string('referred_by')->nullable();
            $table->integer('no_of_referrals')->default(0);
            $table->string('subscription_plan')->nullable();
            $table->integer('upload_limit')->default(0);
            $table->foreignUlid('subscription_plan_id')->references('id')->on('subscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
