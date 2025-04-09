use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id('FoodID');
            $table->string('Name', 50);
            $table->string('Brand', 50);
            $table->string('TypeofFood', 50);
            $table->decimal('Price', 8, 2);
            $table->decimal('ItemWeight', 5, 2);
            $table->string('ClassofFood', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
