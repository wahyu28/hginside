<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username');
            $table->string('roles')->default('ADMIN'); // Admin, User
            $table->string('nip')->nullable();
            $table->enum('jk', ['l', 'p']);
            $table->text('foto')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('is_blokir', ['y', 'n'])->default('n');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('roles');
            $table->dropColumn('nip');
            $table->dropColumn('jk');
            $table->dropColumn('foto');
            $table->dropColumn('agama');
            $table->dropColumn('pendidikan');
            $table->dropColumn('alamat');
            $table->dropColumn('is_blokir');
        });
    }
}
