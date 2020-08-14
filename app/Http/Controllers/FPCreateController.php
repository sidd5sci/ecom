<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\FPAttributeType;
use Models\FPAttribute;



class FPCreateController extends Controller{

    private $visualValue;

    public function __construct(){
        // $this->visualValue = new VisualValue();

    }
    public function create($OT,Request $request){

        

        # get list of attributes of this object type and schema
        
        // select * from f_p_attributes as attr
        //     left join f_p_attribute_type attr_type on 
        //     attr.attribute_type_id = attr_type.attribute_type_id 

        //     where attr.object_type_id = $OT  
        //     and attr.schema_id =  $SID

        $name = '<div class="row">
                    <div calss="col-md-4">
                        <label>Name</label>
                    </div>
                    <dv calss="col-md-8">
                        <input type="text"/>
                    </div>
                 </div>';

        $description = '<div class="row">
                            <div calss="col-md-4">
                                <label>Description</label>
                            </div>
                            <dv calss="col-md-8">
                                <textarea></textarea>
                            </div>
                        </div>';
        $type = '<div class="row">
                    <div calss="col-md-4">
                        <label>Type</label>
                    </div>
                    <dv calss="col-md-8">
                        <select>
                            <option value="'.$OT.'">Product</option>
                        </select>
                    </div>
                </div>';
        $schema = '<div class="row">
                    <div calss="col-md-4">
                        <label>Schema</label>
                    </div>
                    <dv calss="col-md-8">
                        <select>
                            <option value="'.$OT.'">root</option>
                            <option value="'.$OT.'">Ecommerce</option>
                        </select>
                    </div>
                </div>';
        $hiddenAttributes = [

        ];
        $visualAttributes = [$name,$description,$type,$schema];
        return view('admin.common.unipage',compact('OT','hiddenAttributes','visualAttributes'));
    }
}