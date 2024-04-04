<?php

use App\Models\Version;
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
        try {
            Schema::create('versions', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->timestamps();
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
        $versions = [
            (Object)['id' => 1, 'name' => "Iphone 15"],
            (Object)['id' => 2, 'name' => "Iphone 15 Max"],
            (Object)['id' => 3, 'name' => "Iphone 15 Pro"],
            (Object)['id' => 4, 'name' => "Iphone 15 Pro max"],
            (Object)['id' => 5, 'name' => "Iphone 15 SUPER"],
        ];
        foreach ($versions as $key => $value) {
            $item = new Version();
            $item->name = $value->name;
            $item->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
