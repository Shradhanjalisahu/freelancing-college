<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Validator;
use Session;

use App\Models\Colleges;
use App\Models\State;
use App\Models\City;
use App\Models\Univercity;
use App\Models\Branch;


class ImportCollege implements ToModel, WithStartRow
{
    protected $colleges = [];
    protected $currentRow = 0;
    protected $failedCount = 0;
    protected $successCount = 0;
    /**
     * @param array $row
     *
     * @return College |null
     */
    public function model(array $row)
    {
        # Counter
        ++$this->currentRow;
        $this->failedCount;
        $this->successCount;

        # Dont create or validate on empty rows
        # Bad workaround
        # TODO: better solution
        if (!array_filter($row)) {
            return null;
        }


        // read rows
        if(isset($row[0])){
            $insert_data = array(
                'collegeName'  => trim($row[0]),
                'contact'  => trim($row[13]),
                'url'=>'',
                'name'   => trim($row[2]),
                'state' => trim($row[3]),
                'location'   => trim($row[1]), 
                'state_id'   => trim($row[3]),
                'city_id'   => trim($row[4]),
                'course'  => trim($row[6]),
                'branch_id'   => trim($row[5]),
                'email'   => trim($row[7]),
                'address'   => trim($row[8]),
                'facilites'   => trim($row[9]),
                'history'   => trim($row[10]),
                'mission'   => trim($row[11]),
                'highlight'   => trim($row[12]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $collegeUrl = strtolower($insert_data['collegeName'].' '.$insert_data['state_id'].' '.$insert_data['city_id']);
            
            $insert_data['url'] = str_replace(" ","-",$collegeUrl);

            // if state is present
            if(isset($insert_data['state_id'])){
                $state_name = $insert_data['state_id'];
                $state = State::where('state_name', $state_name)
                    ->first(["state_name","id"]);
                if(isset($state)){
                    $insert_data['state_id'] = $state['id'];
                }else{
                    $insert_data['state_id'] = null;
                }
            }

            // if city present
            if(isset($insert_data['city_id'])){
                $city_name = $insert_data['city_id'];
                $city = City::where('city_name', $city_name)
                    ->first(["city_name","id"]);
                // print_r(json_encode($city));
                // return ;
                if(isset($city)){
                    $insert_data['city_id'] = $city['id'];
                }else{
                    $insert_data['city_id'] = null;
                }
            }

            // if branch_id is there
            if(isset($insert_data['branch_id'])){
                $branch_name = $insert_data['branch_id'];
                $branch = Branch::where('branch_name', $branch_name)
                    ->first(["branch_name","id"]);
                if(isset($branch)){
                    $insert_data['branch_id'] = $branch['id'];
                }else{
                    $insert_data['branch_id'] = null;
                }
            }

            // validate the row
            $validator = Validator::make($insert_data, [
                'collegeName' => 'required|max:255',
                'location' => 'required|max:255',
                'contact' => 'required|digits_between:10,11',
                'name' => 'required|max:255',
                'state_id' => 'required',
                'city_id' => 'required',
                'branch_id' => 'required|integer',
                'course' => 'required|max:255',
                'email' => 'required|max:255',
                'address' => 'required|max:255',
                'facilites' => 'required|max:255',
                'history' => 'required',
                'mission' => 'required',
                'highlight' => 'required'
            ]);

            // checking the data valid or not
            if ($validator->fails()) {
                $errors = [];
                foreach ($validator->messages()->all() as $error) {
                    array_push($errors, $error);
                }
                ++$this->failedCount;
            }else{
                Colleges::create($insert_data);
                ++$this->successCount;
            }

            # Update session counter
            Session::put('importResult', array(
                "total"=>$this->currentRow,
                "success" => $this->successCount,
                "failed" => $this->failedCount,
            ));
        }
    }

    /**
     * this method will allow the excel reader to read the data from the row number 2
     * @return int
    */
    public function startRow(): int
    {
        return 2;
    }
    
}
