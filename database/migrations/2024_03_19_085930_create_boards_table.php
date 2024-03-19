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
        Schema::create('boards', function (Blueprint $table) {
            $table->id('board_id'); // 해당 테이블의 Pirmary Key를 bigint(auto-increment) 타입으로 생성
            $table->string('board_title', 255); // boardTitle라는 이름의 컬럼을 varchar(255) 타입으로 생성
            $table->longText('board_content'); // boardContent라는 이름의 컬럼을 longtext 타입으로 생성
            $table->timestamp('created_at'); // createdAt라는 이름의 컬럼을 timestamp 타입으로 생성
            $table->timestamp('updated_at'); // updatedAt라는 이름의 컬럼을 timestamp 타입으로 생성
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
