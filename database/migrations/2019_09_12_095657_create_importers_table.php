<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('importers')) {
            Schema::create('importers', function (Blueprint $table) {
                $table->integer('id')->nullable();
                $table->string('first_name')->nullable();
                $table->string('second_name')->nullable();
                $table->integer('chance_of_playing_next_round')->nullable();
                $table->integer('chance_of_playing_this_round')->nullable();
                $table->integer('code')->nullable();
                $table->integer('cost_change_event')->nullable();
                $table->integer('cost_change_event_fall')->nullable();
                $table->integer('cost_change_start')->nullable();
                $table->integer('cost_change_start_fall')->nullable();
                $table->integer('dreamteam_count')->nullable();
                $table->integer('element_type')->nullable();
                $table->string('ep_next')->nullable();
                $table->string('ep_this')->nullable();
                $table->integer('event_points')->nullable();
                $table->string('form')->nullable();
                $table->boolean('in_dreamteam')->nullable();
                $table->string('news')->nullable();
                $table->string('news_added')->nullable();
                $table->integer('now_cost')->nullable();
                $table->string('photo')->nullable();
                $table->string('points_per_game')->nullable();
                $table->string('selected_by_percent')->nullable();
                $table->boolean('special')->nullable();
                $table->string('squad_number')->nullable();
                $table->string('status')->nullable();
                $table->integer('team')->nullable();
                $table->integer('team_code')->nullable();
                $table->integer('total_points')->nullable();
                $table->integer('transfers_in')->nullable();
                $table->integer('transfers_in_event')->nullable();
                $table->integer('transfers_out')->nullable();
                $table->integer('transfers_out_event')->nullable();
                $table->string('value_form')->nullable();
                $table->string('value_season')->nullable();
                $table->string('web_name')->nullable();
                $table->integer('minutes')->nullable();
                $table->integer('goals_scored')->nullable();
                $table->integer('assists')->nullable();
                $table->integer('clean_sheets')->nullable();
                $table->integer('goals_conceded')->nullable();
                $table->integer('own_goals')->nullable();
                $table->integer('penalties_saved')->nullable();
                $table->integer('penalties_missed')->nullable();
                $table->integer('yellow_cards')->nullable();
                $table->integer('red_cards')->nullable();
                $table->integer('saves')->nullable();
                $table->integer('bonus')->nullable();
                $table->integer('bps')->nullable();
                $table->string('influence')->nullable();
                $table->string('creativity')->nullable();
                $table->string('threat')->nullable();
                $table->string('ict_index')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('importers');
    }
}
