<?php

namespace App\Http\Resources\Vehicles;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        "vehicle_id"=>$this->id,
        "vehicle_type_info"=>VehicleTypeResource::make($this->whenLoaded('Vehicle_Type')),
        "vehicle_number"=>$this->vehicle_number,
        "vehicle_capacity_info"=>VehicleCapacityResource::make($this->whenLoaded('Vehicle_Capacity')) ,
        "vehicle_body_type_info"=>VehicleBodyResource::make($this->whenLoaded('Vehicle_Body_Type')),
        "rc_copy_front"=>url('/')."/Vehicles/RcFront/".$this->rc_copy_front,
        "rc_copy_back"=>url('/')."/Vehicles/RcBack/".$this->rc_copy_back,
        "insurance_copy_front"=>url('/')."/Vehicles/InsuranceFront".$this->insurance_copy_front,
        "insurance_copy_back"=>url('/')."/Vehicles/InsuranceBack".$this->insurance_copy_back,
        "insurance_validity"=>$this->insurance_validity,
        "fc_validity"=>$this->fc_validity,
        "vehicle_status"=>$this->vehicle_status,
        ];
    }
}
