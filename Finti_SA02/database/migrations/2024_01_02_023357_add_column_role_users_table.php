<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    // tambah 1 kolom role setelah kolom password
    Schema::table('users', function (Blueprint $table) {
        $table->string('role', 10)->nullable()->after('password');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    // hapus 1 kolom role
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('role');
    });
}


}
