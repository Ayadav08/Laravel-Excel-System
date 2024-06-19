<?php

Schema::create('excel_data', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->json('data');
    $table->timestamps();
});