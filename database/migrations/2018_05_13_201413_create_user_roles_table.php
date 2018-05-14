<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Role;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('power');
            $table->timestamps();
        });

        $now = \Carbon\Carbon::now();
        DB::table('roles')->insert([
            [
                'name'  => Role::NAME_GUEST,
                'power' => Role::POWER_GUEST,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'  => Role::NAME_MEMBER,
                'power' => Role::POWER_MEMBER,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'  => Role::NAME_OFFICER,
                'power' => Role::POWER_OFFICER,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'  => Role::NAME_MODERATOR,
                'power' => Role::POWER_MODERATOR,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'  => Role::NAME_ADMINISTRATOR,
                'power' => Role::POWER_ADMINISTRATOR,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'  => Role::NAME_SUPERUSER,
                'power' => Role::POWER_SUPERUSER,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id');
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
            $table->dropColumn('role_id');
        });
        Schema::dropIfExists('roles');
    }
}
