<?php
include_once('common.php');
class AccommodationChecklist extends common {
    private $id;

    protected function _config() {
        parent::_config();
        $this->masterTemplate = "views/MASTER_NO_MENU.php";
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->flag | 0;
        c('#mm_accom')->attr('class','list-group-item active');
        $this->appendView("accommodation-checklist.view.php");
    }

    protected function _load() {   
        $this->delegate('#country_db', '#change', array('callback' => '.loadAccommodation')); 
        $this->delegate('#btn', 'click', array('callback' => '.saveForm'));
          
        $rs = $this->db->table('view_member_country');  
	$rs2[] = array('id' => '0', 'name' => 'Change Database...');
        $this->country_db->bind(array_merge($rs2, $rs)); 	
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $this->loadAccommodationList($this->id);
            $this->country_db->val($this->id);
        }
    }
    
    protected function loadAccommodationList($id) {  
        $rt = $this->db->table('view_accommodation id, host_name', 'country_id=?', $id);  
        $this['#data']->bind($rt); 
        $this['#data']->updateClient();       
        
        $rs = $this->db->execQuery("CALL sp_accommodation_amenity('".$id."')");
        
        if($rs){
            foreach($rs as $key => $value){
                //new table field -> own_room,share_room,own_bathroom,share_bathroom
                $idx = $value['accId'];
                $data['accommodation_type'][$idx]               = ($value['accommodation_type'])? $value['accommodation_type'] : '';
                $data['capacity'][$idx]                         = ($value['capacity']          )? $value['capacity']           : ''; 
                //$data['rooms'][$idx]                            = ($value['rooms'])? $value['rooms'] : '';
                $data['own_room'][$idx]                         = ($value['own_room'])? $value['own_room'] : '';
                $data['share_room'][$idx]                       = ($value['share_room'])? $value['share_room'] : '';
                $data['children'][$idx]                         = ($value['children'])? $value['children']   : '';
                $data['pets'][$idx]                             = ($value['pets'])? $value['pets']   : '';
                $data['sheet'][$idx]                            = ($value['sheet'])? $value['sheet'] : '';
                $data['towel'][$idx]                            = ($value['towel'])? $value['towel'] : '';
                $data['smoke'][$idx]                            = ($value['smoke'])? $value['smoke'] : '';
                $data['own_bathroom'][$idx]                     = ($value['own_bathroom'])? $value['own_bathroom'] : '';
                $data['share_bathroom'][$idx]                   = ($value['share_bathroom'])? $value['share_bathroom'] : '';
                $data['running_water'][$idx]                    = ($value['running_water'])? $value['running_water'] : '';
                $data['bucket_shower'][$idx]                    = ($value['bucket_shower'])? $value['bucket_shower'] : '';
                $data['bathroom_hot_water'][$idx]               = ($value['bathroom_hot_water'])? $value['bathroom_hot_water'] : '';
                $data['bathroom_toiletries'][$idx]              = ($value['bathroom_toiletries'])? $value['bathroom_toiletries'] : '';
                $data['internet'][$idx]                         = ($value['internet'])? $value['internet'] : '';
                $data['laundry'][$idx]                          = ($value['laundry'])? $value['laundry']   : '';
                $data['languages'][$idx]                        = ($value['languages'])? $value['languages'] : '';
                $data['food_vegetarian'][$idx]                  = ($value['food_vegetarian'])? $value['food_vegetarian'] : '';
                $data['food_vegan'][$idx]                       = ($value['food_vegan'])? $value['food_vegan']     : '';
                $data['food_regular'][$idx]                     = ($value['food_regular'])? $value['food_regular'] : '';
                $data['curfew'][$idx]                           = ($value['curfew'])? $value['curfew'] : '';
                $data['water_tap'][$idx]                        = ($value['curfew'])? $value['curfew'] : '';
                $data['water_donot_drink'][$idx]                = ($value['water_donot_drink'])? $value['water_donot_drink'] : '';
                $data['water_boiled'][$idx]                     = ($value['water_boiled']  )? $value['water_boiled']   : '';  
                $data['water_purchase'][$idx]                   = ($value['water_purchase'])? $value['water_purchase'] : '';
                $data['mosquito_net_bring'][$idx]               = ($value['mosquito_net_bring'])? $value['mosquito_net_bring'] : '';
                $data['mosquito_net_buy'][$idx]                 = ($value['mosquito_net_buy']  )? $value['mosquito_net_buy']   : '';
                $data['mosquito_net_not_need'][$idx]            = ($value['mosquito_net_not_need'])? $value['mosquito_net_not_need'] : '';
                $data['wheelchair'][$idx]                       = ($value['wheelchair'])? $value['wheelchair'] : '';
                $data['lockable_wardrobe'][$idx]                = ($value['lockable_wardrobe'])? $value['lockable_wardrobe'] : '';
                $data['lockable_drawers'][$idx]                 = ($value['lockable_drawers'] )? $value['lockable_drawers']  : '';
                $data['lockable_room'][$idx]                    = ($value['lockable_room'])? $value['lockable_room'] : '';
                $data['room_key_provided'][$idx]                = ($value['room_key_provided'] )? $value['room_key_provided']  : '';
                $data['house_key_provided'][$idx]               = ($value['house_key_provided'])? $value['house_key_provided'] : ''; 
            }

            $this->data->inputValues($data);
        }
    }
    
    protected function loadAccommodation($e) {  
        $id = $e->intval() | 0;
        $this->loadAccommodationList($id);
    }
    
    protected function saveAccommodationType($e) {  
        $id = $e->intval();
        
    }
    
    protected function saveCapacity($e) {  
        $id = $e->intval() | 0;
    }
    
    protected function saveForm($e) {  
        $rs = $this->post->intVal('accommodation_id');
        if(!$rs){$this->redirectTo('accommodation-checklist.php');}
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['accommodation_id'] = $value;
            }
        }

        $rs = $this->post->intVal('accommodation_type');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['accommodation_type'] = $value;
            }
        }

        $rs = $this->post->textVal('capacity');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['capacity'] = $value;
            }
        }

        $rs = $this->post->textVal('own_room');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['own_room'] = $value;
            }
        }

        $rs = $this->post->intVal('share_room');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['share_room'] = $value;
            }
        }

        $rs = $this->post->intVal('sheet');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['sheet'] = $value;
            }
        }

        $rs = $this->post->intVal('towel');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['towel'] = $value;
            }
        }

        $rs = $this->post->intVal('own_bathroom');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['own_bathroom'] = $value;
            }
        }
        
        $rs = $this->post->intVal('share_bathroom');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['share_bathroom'] = $value;
            }
        }

        $rs = $this->post->intVal('running_water');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['running_water'] = $value;
            }
        }

        $rs = $this->post->intVal('bucket_shower');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['bucket_shower'] = $value;
            }
        }

        $rs = $this->post->intVal('bathroom_hot_water');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['bathroom_hot_water'] = $value;
            }
        }

        $rs = $this->post->intVal('bathroom_toiletries');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['bathroom_toiletries'] = $value;
            }
        }

        $rs = $this->post->intVal('food_vegetarian');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['food_vegetarian'] = $value;
            }
        }

        $rs = $this->post->intVal('food_vegan');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['food_vegan'] = $value;
            }
        }

        $rs = $this->post->intVal('food_regular');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['food_regular'] = $value;
            }
        }

        $rs = $this->post->intVal('water_tap');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['water_tap'] = $value;
            }
        }

        $rs = $this->post->intVal('water_donot_drink');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['water_donot_drink'] = $value;
            }
        }

        $rs = $this->post->intVal('water_boiled');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['water_boiled'] = $value;
            }
        }

        $rs = $this->post->intVal('water_purchase');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['water_purchase'] = $value;
            }
        }

        $rs = $this->post->textVal('children');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['children'] = $value;
            }
        }

        $rs = $this->post->textVal('pets');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['pets'] = $value;
            }
        }

        $rs = $this->post->intVal('smoke');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['smoke'] = $value;
            }
        }

        $rs = $this->post->intVal('internet');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['internet'] = $value;
            }
        }

        $rs = $this->post->intVal('laundry');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['laundry'] = $value;
            }
        }

        $rs = $this->post->textVal('languages');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['languages'] = $value;
            }
        }

        $rs = $this->post->intVal('curfew');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['curfew'] = $value;
            }
        }

        $rs = $this->post->intVal('lockable_wardrobe');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['lockable_wardrobe'] = $value;
            }
        }
        
        $rs = $this->post->intVal('lockable_drawers');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['lockable_drawers'] = $value;
            }
        }
        
        $rs = $this->post->intVal('lockable_room');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['lockable_room'] = $value;
            }
        }
        
        $rs = $this->post->intVal('room_key_provided');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['room_key_provided'] = $value;
            }
        }
        
        $rs = $this->post->intVal('house_key_provided');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['house_key_provided'] = $value;
            }
        }
        
        $rs = $this->post->intVal('mosquito_net_bring');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['mosquito_net_bring'] = $value;
            }
        }

        $rs = $this->post->intVal('wheelchair');
        if($rs){
            foreach($rs as $key => $value){
                $data[$key]['wheelchair'] = $value;
            }
        }

        try{
            foreach($data as $key => $value){
                $this->db->tableDelete('accommodation_amenity', 'accommodation_id=?', $value['accommodation_id']);
                $this->db->tableInsert('accommodation_amenity',$value);
            }
        } catch(Exception $e) {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$e);
            return;
        }
    }
 
}
?>