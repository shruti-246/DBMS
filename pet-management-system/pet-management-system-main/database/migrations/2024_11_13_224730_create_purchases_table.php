use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->unsignedBigInteger('OID');
            $table->unsignedBigInteger('FoodID');
            $table->unsignedBigInteger('PetID');
            $table->string('Month', 20);
            $table->integer('Year');
            $table->integer('Quantity');

            $table->primary(['OID', 'FoodID', 'PetID', 'Month', 'Year']);
            $table->foreign('OID')->references('OID')->on('owners')->onDelete('cascade');
            $table->foreign('FoodID')->references('FoodID')->on('foods')->onDelete('cascade');
            $table->foreign('PetID')->references('PetID')->on('pets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
