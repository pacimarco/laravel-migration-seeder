<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainList = config('train');

        foreach ($trainList as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->date = $train['date'];
            $newTrain->departureStation = $train['departureStation'];
            $newTrain->arrivalStation = $train['arrivalStation'];
            $newTrain->departureTime = $train['departureTime'];
            $newTrain->arrivalTime = $train['arrivalTime'];
            $newTrain->trainCode = $train['trainCode'];
            $newTrain->numOfCarriage = $train['numOfCarriage'];
            $newTrain->inTime = $train['inTime'];
            $newTrain->deleted = $train['deleted'];

            $newTrain->save();
    }
}
}
