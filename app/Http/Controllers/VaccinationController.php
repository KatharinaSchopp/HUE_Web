<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VaccinationController extends Controller
{
    public function index() {
        $vaccinations = Vaccination::with(['vaclocation', 'user'])->get();
        return $vaccinations;
    }

    public function findById(int $id) {
        $vaccination = Vaccination::where('id', $id)->
        with(['vaclocation', 'user'])->first();
        return $vaccination;
    }

    public function findBySearchTerm(string $searchTerm) {
        $vaccination = Vaccination::with(['vaclocation', 'user'])
            ->where('maxCapacity', 'LIKE', '%' . $searchTerm. '%')
            ->orWhere('date' , 'LIKE', '%' . $searchTerm. '%')

            ->orWhereHas('vaclocation', function ($query) use ($searchTerm) {
                $query->where('city', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('zip', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('address', 'LIKE', '%' . $searchTerm. '%');
            })
            ->orWhereHas('user', function ($query) use ($searchTerm) {
                $query->where('username', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('firstname', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('lastname', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('socialSecurityNumber', 'LIKE', '%' . $searchTerm. '%');
            })
            ->get();
        return $vaccination;
    }

    /**
     * create new Vaccination
     */
    public function new(Request $request) : JsonResponse  {
        $request = $this->parseRequest($request);
        /*+
        *  use a transaction for saving model including relations
        * if one query fails, complete SQL statements will be rolled back
        */
        DB::beginTransaction();
        try {
            $vaccination = Vaccination::create($request->all());
            DB::commit();
            // return a vaild http response
            return response()->json($vaccination, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("saving vaccination failed: " . $e->getMessage(), 420);
        }
    }

    public function update(Request $request, int $id): JsonResponse
    {
        DB::beginTransaction();
        try {
            $vaccination = Vaccination::with(['vaclocation', 'user'])
                ->where('id', $id)->first();
            if ($vaccination != null) {
                $request = $this->parseRequest($request);
                $vaccination->update($request->all());
                $vaccination->save();
            }
            DB::commit();
            $vaccination1 = Vaccination::with(['vaclocation', 'user'])
                ->where('id', $id)->first();
            // return a vaild http response
            return response()->json($vaccination1, 201);
        } catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("updating vaccination failed: " . $e->getMessage(), 420);
        }
    }

    public function delete(int $id) : JsonResponse
    {
        $vaccination = Vaccination::where('id', $id)->first();
        if ($vaccination != null) {
            $vaccination->delete();
        }
        else
            throw new \Exception("vaccination couldn't be deleted - it does not exist");
        return response()->json('vaccination (' . $id . ') successfully deleted', 200);
    }


    //Hilfsmethode
    /**
     * modify / convert values if needed
     */
    private function parseRequest(Request $request) : Request {
        // get date and convert it - its in ISO 8601, e.g. "2018-01-01T23:00:00.000Z"
        $startTimeslot = new \DateTime($request->startTimeslot);
        $request['startTimeslot'] = $startTimeslot;
        $endTimeslot = new \DateTime($request->endTimeslot);
        $request['endTimeslot'] = $endTimeslot;
        $date = new \Carbon\Carbon($request->date);
        $request['date'] = $date;
        return $request;
    }
}
