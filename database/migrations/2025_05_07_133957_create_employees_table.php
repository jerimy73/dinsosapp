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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 18);
            $table->string('nik', 16)->nullable();
            $table->string('name', 100);
            $table->string('phone',20)->nullable();
            $table->string('email',100)->nullable();
            $table->string('jobdesc',100);
            $table->string('major',100)->nullable();
            $table->enum('education', [
                'SLTA/Sederajat',
                'DI', 
                'DII', 
                'DIII', 
                'DIV', 
                'S1', 
                'S2', 
                'S3'
            ]);
            $table->string('religion',100)->nullable();
            $table->string('birth_place',100)->nullable();
            $table->date('birth_date');
            $table->enum('gender', ['male','female']);
            $table->enum('asn_type', ['PNS','PPPK', 'non-ASN']);
            $table->enum('placement', ['kadis', 'sekretariat','pemdes', 'pm', 'dayalinjamsos', 'rehabsos']);
            $table->enum('marital_status', ['single','married', 'divorced']);
            $table->enum('pangkat', [
                'Pengatur Muda, II/a',
                'Pengatur Muda Tk. I, II/b',
                'Pengatur, II/c',
                'Pengatur Tk. I, II/d',
                'Penata Muda, III/a',
                'Penata Muda Tk. I, III/b',
                'Penata, III/c',
                'Penata Tk. I, III/d',
                'Pembina, IV/a',
                'Pembina Tk. I, IV/b',
                'Pembina Utama Muda, IV/c',
                'Pembina Utama Madya, IV/d',
                'Pembina Utama, IV/e',
                'V', 'VI', 'VII', 'VIII','IX','X','XI','XII','XIII','XIV',
                'XV', 'XVI']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
