<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('route');
            $table->integer('Isactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidebars');
    }
}


/*
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('1', 'Dashboard', 'home', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('2', 'Users', 'user', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('3', 'Department', 'department', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('4', 'Employee', 'employee', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('5', 'Activity', 'activity', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('6', 'Holidays', 'holiday', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('7', 'Event', 'event', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('8', 'Payroll', 'payroll', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('9', 'Accounts', 'accunts', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('10', 'Reports', 'report', '1');
INSERT INTO `hrm`.`sidebars` (`id`, `name`, `route`, `Isactive`) VALUES ('11', 'Projects', 'project', '1');
*/