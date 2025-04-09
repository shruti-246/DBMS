use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('PetID');  // Primary key
            $table->string('Name', 50);
            $table->integer('Age');
            $table->string('Street', 100);
            $table->string('City', 50);
            $table->string('ZipCode', 10);
            $table->string('State', 20);
            $table->string('TypeofPet', 50);
            $table->timestamps();  // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
