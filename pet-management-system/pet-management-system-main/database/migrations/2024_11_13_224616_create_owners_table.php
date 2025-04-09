use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id('OID');
            $table->string('LastName', 50);
            $table->string('Street', 100);
            $table->string('City', 50);
            $table->string('ZipCode', 10);
            $table->string('State', 20);
            $table->integer('Age');
            $table->decimal('AnnualIncome', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
