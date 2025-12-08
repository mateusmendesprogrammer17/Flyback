<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("
            CREATE PROCEDURE insert_departament(
                IN p_name_dp VARCHAR(100),
                IN p_sigla VARCHAR(10),
                IN p_description TEXT,
                IN p_email_institucional VARCHAR(255),
                IN p_telefone VARCHAR(50)
            )
            BEGIN
                INSERT INTO departaments (name_dp, sigla, description, email_institucional, telefone, created_at, updated_at)
                VALUES (p_name_dp, p_sigla, p_description, p_email_institucional, p_telefone, NOW(), NOW());
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS insert_departament");
    }
};
