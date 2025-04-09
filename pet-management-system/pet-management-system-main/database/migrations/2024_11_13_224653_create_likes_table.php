use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->unsignedBigInteger('PetID');
            $table->string('TypeofFood', 50);

            $table->primary(['PetID', 'TypeofFood']);
            $table->foreign('PetID')->references('PetID')->on('pets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
