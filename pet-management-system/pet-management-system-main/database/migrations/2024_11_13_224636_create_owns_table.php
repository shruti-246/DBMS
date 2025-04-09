use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnsTable extends Migration
{
    public function up()
    {
        Schema::create('owns', function (Blueprint $table) {
            $table->unsignedBigInteger('PetID');
            $table->unsignedBigInteger('OID');
            $table->integer('Year');
            $table->integer('PetAgeatOwnership');
            $table->decimal('PricePaid', 8, 2);

            $table->primary(['PetID', 'OID']);
            $table->foreign('PetID')->references('PetID')->on('pets')->onDelete('cascade');
            $table->foreign('OID')->references('OID')->on('owners')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('owns');
    }
}
